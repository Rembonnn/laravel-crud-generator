<?php

namespace Rembon\LaravelCrudGenerator;

use Illuminate\Support\ServiceProvider;

class LaravelCrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__. '/Routes/web.php');
        $this->loadViewsFrom(__DIR__. '/Views/', 'crud-generator');
        $this->mergeConfigFrom(
            __DIR__. '/Config/crud-generator.php',
            'crud-generator'
        );

        $this->publishes([
            __DIR__. '/Config/crud-generator.php' => config_path('crud-generator.php'),
            __DIR__. '/Views' => resource_path('views/vendor/crud-generator'),
        ]);

        $this->publishes([
            __DIR__ . '/../dist/assets' => public_path('vendor/laravel-crud-generator')
        ], 'public');
    }
}
