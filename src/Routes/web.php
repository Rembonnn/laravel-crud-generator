<?php

use Illuminate\Support\Facades\Route;

// Routes
Route::group([
    'middleware' => 'web',
    'controller' => \Rembon\LaravelCrudGenerator\Http\Controllers\CrudGeneratorController::class
], function () {
    Route::get('/crud', 'index')->name('crud.form');
    Route::post('/crud', 'store')->name('crud.store');
    Route::get('/crud/{modelName}/getFillable', 'getFillable')->name('crud.get.fillable');
});
