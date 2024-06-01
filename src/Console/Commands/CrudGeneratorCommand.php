<?php

namespace Rembon\LaravelCrudGenerator\Console\Commands;

use Illuminate\Console\Command;

class CrudGeneratorCommand extends BaseCommand
{
    /**
     * @var string
     */
    protected $signature = 'crud:generate {name} {--table= : Table} {--schema= : Schema} {--form= : Form} {--datatable= : Table}';

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
        $this->schema = $this->option('schema');
        $this->form = $this->parseColumns($this->option('form'));
        $this->datatable = $this->option('datatable');

        $this->model();
        $this->controller();
        $this->route();
        $this->views();
        $this->form();

        return Command::SUCCESS;
    }
}
