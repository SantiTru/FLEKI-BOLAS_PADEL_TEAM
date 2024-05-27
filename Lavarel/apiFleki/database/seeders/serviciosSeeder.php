<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class serviciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servicio::create(['name' => 'Sesión de Entrenamiento', 'description' => 'Entrenamiento profesional', 'tipo_servicio_id' => 1]);
    }
}
