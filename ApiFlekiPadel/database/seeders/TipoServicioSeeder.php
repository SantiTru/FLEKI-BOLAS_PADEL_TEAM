<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_servicio')->insert([
            [
                'nombre_tipo' => 'Clase Basica',
                'descripcion_tipo' => 'Clase basica de padel.',
                'precio' => 20.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_tipo' => 'Clase Avanzada',
                'descripcion_tipo' => 'Clase avanzada de padel.',
                'precio' => 40.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}