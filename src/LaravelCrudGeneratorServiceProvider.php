<?php

namespace Rembon\LaravelCrudGenerator;

use Illuminate\Support\ServiceProvider;
use Rembon\LaravelCrudGenerator\Console\Commands\CrudGeneratorCommand;

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

        // Define the path to the stubs
        $this->publishes([
            __DIR__ . '/../stubs' => base_path('stubs/vendor/laravel-crud-generator'),
        ], 'stubs');

        $this->commands([
            CrudGeneratorCommand::class,
        ]);
    }
}
