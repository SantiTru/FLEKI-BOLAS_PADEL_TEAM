<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckDatabaseConnection extends Command
{
    protected $signature = 'db:check-connection';
    protected $description = 'Verifica la conexión a la base de datos';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        try {
            DB::connection()->getPdo();
            $this->info('Conexión a la base de datos establecida correctamente.');
        } catch (\Exception $e) {
            $this->error('No se pudo conectar a la base de datos. Error: ' . $e->getMessage());
        }
    }
}