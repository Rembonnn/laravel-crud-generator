<?php

use Illuminate\Support\Facades\Route;

// Routes
Route::controller(\Rembon\LaravelCrudGenerator\Http\Controllers\CrudGeneratorController::class)->group(function () {
    Route::get('/crud', 'index')->name('crud.form');
    Route::post('/crud', 'store')->name('crud.store');
});
