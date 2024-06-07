<?php

namespace Rembon\LaravelCrudGenerator\Console\Commands;

use Illuminate\Console\Command;

class CrudGeneratorCommand extends BaseCommand
{
    /**
     * @var string
     */
    protected $signature = 'crud:generate {name} {--exists= : Exists} {--table= : Table} {--schema= : Schema} {--field= : Field} {--form= : Form} {--datatable= : Table}';

    /**
     * @var string
     */
    protected $description = 'Command for Generate The Laravel CRUD';

    /**
     * @return Command
     */
    public function handle()
    {
        $this->name = $this->argument('name');
        $this->table = $this->option('table');
        $this->exists = $this->option('exists');
        $this->schema = $this->option('schema');
        $this->form = $this->parseColumns($this->option('form'));

        if($this->option('field') != null){
            $this->field = $this->parseField($this->option('field'));
        }

        $this->datatable = $this->option('datatable');

        if($this->exists == true && $this->field != null){
            $this->migration();
        }

        $this->model();
        $this->controller();
        $this->route();
        $this->views();
        $this->form();

        return Command::SUCCESS;
    }
}
