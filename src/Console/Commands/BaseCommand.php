<?php

namespace Rembon\LaravelCrudGenerator\Console\Commands;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BaseCommand extends Command
{
    /**
     * @var ?string|array
     */
    protected $name = null;

    /**
     * @var ?string|array
     */
    protected $table = null;

    /**
     * @var ?string|array
     */
    protected $schema = null;

    /**
     * @var ?string|array
     */
    protected $tableColumns = null;

    /**
     * @var ?string|array
     */
    protected $form = null;

    /**
     * @var ?string|array
     */
    protected $primary = null;

    /**
     * @var ?string|array
     */
    protected $datatable = null;

    /**
     * @var ?string|array
     */
    protected $unwantedColumns = [
        'id',
        'password',
        'email_verified_at',
        'remember_token',
        'created_at',
        'updated_at',
        'deleted_at',
        'date_modified',
        'date_created',
    ];

    /**
     * @return void
     */
    protected function route(): void
    {
        $controller =  "\App\Http\Controllers\\" . $this->name . "Controller::class";
        //exec("php artisan make:export ".$this->name."Export --model=".$this->name);
        $lower_name = strtolower($this->name);
        File::append(base_path('routes/web.php'), "\nRoute::get('$lower_name/list', [$controller,'data'])->name('$lower_name.list');");
        File::append(base_path('routes/web.php'), "\nRoute::get('$lower_name/delete/{id}', [$controller,'destroy'])->name('$lower_name.delete');");
        File::append(base_path('routes/web.php'), "\nRoute::resource('$lower_name', $controller);");
        File::append(base_path('routes/web.php'), "\n");
    }

    /**
     * @return void
     */
    protected function form(): void
    {
        $view = strtolower($this->name);
        $str = '';
        $schema = strtolower($this->schema);
        foreach ($this->form as $row) {
            if ($row["type"] == "text") {
                $var = '$' . $view . '->' . $row['label'];

                $str .= " <div class='mb-10'>
                    <label class='required form-label'>" . ucwords(str_replace("_", " ", $row['label'])) . "</label>
                    <input type='text' class='form-control' name='" . $row['label'] . "' value='{{old('" . $row['label'] . "', $var)}}'  placeholder='" . ucwords(str_replace("_", " ", $row['label'])) . "'>
                </div>
                ";
            } else if ($row["type"] == "file") {
                $str .= "<div class='mb-10'>
                    <label class='required form-label'>" . ucwords(str_replace("_", " ", $row['label'])) . "</label>
                    <input type='file' name='" . $row['label'] . "' class='form-control'>

                    </div>
                ";
            } else if ($row["type"] == "password") {
                $var = '$' . $view . '->' . $row['label'];
                $str .= "  <div class='mb-10'>
                    <label class='required form-label'>" . ucwords(str_replace("_", " ", $row['label'])) . "</label>
                    <input type='password' class='form-control' name='" . $row['label'] . "' value='{{old('" . $row['label'] . "', $var)}}'  placeholder='" . ucwords(str_replace("_", " ", $row['label'])) . "'>
                </div>
                ";
            } else if ($row["type"] == "email") {
                $var = '$' . $view . '->' . $row['label'];
                $str .= " <div class='mb-10'>
                    <label class='required form-label'>" . ucwords(str_replace("_", " ", $row['label'])) . "</label>
                    <input type='email' class='form-control' name='" . $row['label'] . "' value='{{old('" . $row['label'] . "', $var)}}'  placeholder='" . ucwords(str_replace("_", " ", $row['label'])) . "'>
                </div>
                ";
            } else if ($row["type"] == "textarea") {
                $var = '$' . $view . '->' . $row['label'];
                $str .= " <div class='mb-10'>
                    <label class='required form-label'>" . ucwords(str_replace("_", " ", $row['label'])) . "</label>
                    <textarea class='form-control' name='" . $row['label'] . "'   placeholder='" . ucwords(str_replace("_", " ", $row['label'])) . "'>{{old('" . $row['label'] . "', $var)}}</textarea>
                </div>
                ";
            }
        }

        $viewTemplate = str_replace(
            [
                '{{form}}',
                '{{modelName}}',
                '{{modelNamePlural}}',
                '{{modelNameSingular}}',

            ],
            [
                $str,
                $this->name,
                strtolower(Str::plural($this->name)),
                strtolower($this->name),
            ],
            $this->getStub('Form')
        );

        file_put_contents(resource_path("/views/" . $schema . "/" . $view . "/form.blade.php"), $viewTemplate);
    }

    /**
     * @return void
     */
    protected function views(): void
    {
        $datatable = json_encode($this->parseDatatable($this->datatable));
        $field = $this->generateField($this->datatable);
        $view = strtolower($this->name);
        $schema = strtolower($this->schema);
        $path = base_path() . "/resources/views/{$schema}/{$view}";
        //$this->info($path);
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }

        //exec("php artisan make:view $view.index");
        //$this->createDir($path);
        $viewTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePlural}}',
                '{{modelNameSingular}}',
                '{{field}}',
                '{{columns}}'
            ],
            [
                $this->name,
                strtolower(Str::plural($this->name)),
                strtolower($this->name),
                $field,
                $datatable,
            ],
            $this->getStub('View')
        );

        file_put_contents(resource_path("/views/" . $schema . "/" . $view . "/index.blade.php"), $viewTemplate);
    }

    /**
     * @param string $view
     * @return string
     */
    public function viewPath(string $view): string
    {
        $view = str_replace('.', '/', $view) . '.blade.php';

        $path = base_path() . "/resources/views/{$view}";

        return $path;
    }

    /**
     * @param string $path
     * @return void
     */
    public function createDir(string $path): void
    {
        $dir = dirname($path);

        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
    }

    /**
     * @param ?string $columns
     * @return string
     */
    public function generateField(?string $columns): string
    {
        $str = '';
        if ($columns != '') {
            $data = explode(',', $columns);
            foreach ($data as $row) {
                $str .= '
               <th class="min-w-100px">' . ucwords(str_replace("_", " ", $row)) . '</th>

               ';
            }
        }
        $str .= '<th>Action</th>';

        return $str;
    }

    /**
     * @param ?string $columns
     * @return array
     */
    public function parseDatatable(?string $columns): array
    {
        $arr = [];
        $arr[] = [
            "data" => 'DT_RowIndex',
            "name" => 'DT_RowIndex',
            "orderable" => false,
            "searchable" => false
        ];
        if ($columns != '') {
            $data = explode(',', $columns);
            foreach ($data as $row) {
                $arr[] = ["data" => $row, "name" => $row];
            }
        }
        $arr[] = ["data" => "action", "name" => "action"];

        return $arr;
    }

    /**
     * @param ?string $columns
     * @return array
     */
    public function parseColumns(?string $columns): array
    {
        $arr = [];
        if ($columns != '') {
            $data = explode(',', $columns);
            foreach ($data as $row) {
                $label = explode(':', $row)[0];
                $type = explode(':', $row)[1];
                $arr[] = ["label" => $label, "type" => $type];
            }
        }

        return $arr;
    }

    /**
     * @return void
     */
    protected function controller(): void
    {
        $post = $this->getPostField();
        $search = $this->getSearchField();
        $str = '';
        $str2 = '';
        $low = strtolower($this->name);
        foreach ($this->form as $row) {
            if ($row["type"] == "file") {
                $str .= 'if($request->hasFile("' . $row["label"] . '")) {
                    $file = $request->file("' . $row["label"] . '");
                    $extension = $file->extension();
                    $filename = "' . $row["label"] . '-".date("YmdHis").' . '$extension;
                    $path = base_path("public")."/' . $row["label"] . '";
                    $file->move($path,$filename);
                    $input["' . $row["label"] . '"] = $filename;
                }else{
                    $input["' . $row["label"] . '"] = "";
                }';
                $str2 .= 'if($request->hasFile("' . $row["label"] . '")) {
                    $file = $request->file("' . $row["label"] . '");
                    $extension = $file->extension();
                    $filename = "' . $row["label"] . '-".date("YmdHis").' . '$extension;
                    $path = base_path("public")."/' . $row["label"] . '";
                    $file->move($path,$filename);
                    $input["' . $row["label"] . '"] = $filename;
                }else{
                    $input["' . $row["label"] . '"] = $' . $low . '->' . $row["label"] . ';
                }';
            }
        }

        $controllerTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePlural}}',
                '{{modelNameSingular}}',
                '{{postField}}',
                '{{primary}}',
                '{{uploadFile}}',
                '{{uploadFileUpdate}}',
                '{{schema}}'
            ],
            [
                $this->name,
                strtolower(Str::plural($this->name)),
                strtolower($this->name),
                $post,
                $this->primary,
                $str,
                $str2,
                strtolower($this->schema),
            ],
            $this->getStub('Controller')
        );

        file_put_contents(app_path("/Http/Controllers/{$this->name}Controller.php"), $controllerTemplate);
    }

    /**
     * @return void
     */
    protected function model(): void
    {
        $rulesArray = [];
        $primaryKey = "";

        foreach ($this->getColumns() as $index => $value) {
            if ($index == 0) {
                $primaryKey = $value->column_name;
            }
            if ($value->is_nullable == 'NO') {
                $rulesArray[$value->column_name] = 'required';
            }
        }

        $this->primary = $primaryKey;
        $rules = $this->rules($rulesArray);
        $fillable = $this->fillable();

        $modelTemplate = str_replace(
            ['{{modelName}}', '{{table}}', '{{fillable}}', '{{rules}}', '{{primaryKey}}'],
            [$this->name, $this->schema . "." . $this->table, $fillable, $rules, $primaryKey],
            $this->getStub('Model')
        );

        file_put_contents(app_path("Models/{$this->name}.php"), $modelTemplate);
    }

    /**
     * @param array $rulesArray
     * @return string|array
     */
    protected function rules($rulesArray): string|array
    {
        $rules = '';
        $rulesArray = Arr::except($rulesArray, $this->unwantedColumns);

        foreach ($rulesArray as $col => $rule) {
            $rules .= "\n\t\t'{$col}' => '{$rule}',";
        }

        return $rules;
    }

    /**
     * @return string
     */
    protected function fillable(): string
    {
        $filterColumns = $this->getFilteredColumns();

        array_walk($filterColumns, function (&$value) {
            $value = "'" . $value . "'";
        });

        return implode(',', $filterColumns);
    }

    /**
     * @return string|array
     */
    protected function getColumns(): string|array
    {
        if (empty($this->tableColumns)) {
            $this->tableColumns = DB::select("SELECT column_name, data_type, is_nullable FROM information_schema.columns WHERE table_name = '" . $this->table . "' AND table_schema = '" . $this->schema . "'");
        }

        return $this->tableColumns;
    }

    /**
     * @return array
     */
    protected function getFilteredColumns(): array
    {
        $unwanted = $this->unwantedColumns;
        $columns = [];

        foreach ($this->getColumns() as $column) {
            $columns[] = $column->column_name;
        }

        return array_filter($columns, function ($value) use ($unwanted) {
            return !in_array($value, $unwanted);
        });
    }

    /**
     * @return string
     */
    protected function getPostField(): string
    {
        $unwanted = $this->unwantedColumns;
        $unwanted[] = strtolower($this->table . "_id");

        $post = '';
        foreach ($this->getColumns() as $column) {
            if ($column->data_type == "character varying") {
                $type = "string";
            } else if ($column->data_type == "integer" || $column->data_type == "smallint") {
                $type = "integer";
            } else if ($column->data_type == "float" || $column->data_type == "real") {
                $type = "float";
            } else {
                $type = "string";
            }
            if (!in_array($column->column_name, $unwanted)) {
                $post .= '	 * 				    @OA\Property(property="' . $column->column_name . '", type="' . $type . '"),' . "\r\n";
            }
        }
        return $post;
    }

    /**
     * @return string|array
     */
    protected function getSearchField(): string|array
    {
        $unwanted = $this->unwantedColumns;
        $unwanted[] = strtolower($this->table . "_id");

        $post = '';
        $i = 0;

        foreach ($this->getColumns() as $column) {

            if (!in_array($column->column_name, $unwanted)) {
                if ($i == 0) {
                    $post .= '$query->where("' . $column->column_name . '", "ilike", "%".$request->search."%");';
                } else {
                    $post .= '$query->orWhere("' . $column->column_name . '", "ilike", "%".$request->search."%");';
                }
                // …
                $i++;
            }
        }

        return $post;
    }

    /**
     * @param string $type
     * @return string|false
     */
    protected function getStub($type): string|false
    {
        return file_get_contents(base_path("stubs/vendor/laravel-crud-generator/$type.stub"));
    }
}
