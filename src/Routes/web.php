<?php

use Illuminate\Support\Facades\Route;

// Routes
Route::controller(\Rembon\LaravelCrudGenerator\Http\Controllers\CrudGeneratorController::class)->group(function () {
    Route::get('/crud', 'index')->name('index');
});

// Utility Routes
Route::get('/resource/{path}', function (string $path) {
    $path = base_path('packages/rembon/laravel-crud-generator/dist/assets/' . $path);
    if (file_exists($path)) {
        return response()->file($path);
    }
    abort(404);
})->name('resource.links');
