<?php

namespace Rembon\LaravelCrudGenerator\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Artisan;

class CrudGeneratorController extends BaseController
{
    /**
     * @return View
     */
    public function index(): View
    {
        $models = $this->getAllModels();

        return view('crud-generator::form', compact('models'));
    }

    /**
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->exists == 1) {
            $table = $request->table;
            $model = $request->model;
            $schema = $request->schema;
            $form = '';
            $tables = '';

            foreach($request->field as $key => $row) {
                $type = $request->type[$key];

                $istable = $request->tables[$key];

                if ($istable == 1) {
                    $tables .= $row.",";
                }

                if($type == "select") {
                    $model = $request->input("model_$key");;
                    $value = $request->input("value_model_$key");
                    $label = $request->input("label_model_$key");
                    $form .= $row.":".$type.":".$model.":".$value.":".$label.",";
                } else {
                    $form .= $row.":".$type.",";
                }
            }

            $tables = rtrim($tables, ",");
            $form = rtrim($form, ",");

            Artisan::call('crud:generate '.$model.'  --exists=true --table='.$table.' --schema='.$schema.' --form='.$form.' --datatable='.$tables);
        } else {
            $table = $request->table;
            $model = $request->model;
            $schema = $request->schema;
            $field  = '';
            $tables = '';
            $form = '';

            foreach($request->field as $key => $row){
                $type = $request->type[$key];
                $size = $request->size[$key];
                $nullable = $request->nullable[$key] ?? false;
                $istable = $request->tables[$key];
                $forms = $request->form[$key];
                $field = $row.":".$type.":".$size.":".$nullable.",";

                if ($istable == 1) {
                    $tables .= $row.",";
                }

                if ($forms == 1) {
                    $types = $request->type_form[$key];
                    $form .= $row.":".$types.",";
                }

            }

            Artisan::call('crud:generate '.$model.' --exists=false --table='.$table.' --schema='.$schema.' --form='.$form.' --datatable='.$tables .' --field='.$field);

        }

        return redirect()
            ->route('crud.form')
            ->with([
                'success' => 'Crud Berhasil'
            ]);
    }

    /**
     * @return JsonResponse
     */
    public function getFillable(string $modelName): JsonResponse
    {
        $fullClassName = "App\\Models\\$modelName";

        if (class_exists($fullClassName)) {
            $modelInstance = new $fullClassName();
            $fillable = $modelInstance->getFillable();
            return response()->json($fillable);
        }

        return response()->json([]);
    }

}
