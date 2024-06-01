<?php

namespace Rembon\LaravelCrudGenerator\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Artisan;

class CrudGeneratorController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('crud-generator::form');
    }

    /**
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $table = $request->table;
        $model = $request->model;
        $schema = $request->schema ?? 'public';
        $form = '';
        $tables = '';

        foreach($request->field as $key => $row){
            $type = $request->type[$key];
            $form .= $row.":".$type.",";
            $istable = $request->tables[$key];
            if($istable == 1){
                $tables .= $row.",";
            }
        }
        $tables = rtrim($tables, ",");
        $form = rtrim($form, ",");

        Artisan::call('crud:generate '.$model.' --table='.$table.' --schema='.$schema.' --form='.$form.' --datatable='.$tables);

        return redirect()
            ->back()
            ->with([
                'success' => 'Crud Berhasil'
            ]);

    }

}
