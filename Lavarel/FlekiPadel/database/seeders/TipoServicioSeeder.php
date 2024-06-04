<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_servicio')->insert([
            [
                'Nombre_tipo' => 'Torneo',
                'Descripción_tipo' => 'Torneo Express',
                'Precio' => 50.00
            ],
            [
                'Nombre_tipo' => 'Liga',
                'Descripción_tipo' => 'Fase Regular',
                'Precio' => 200.00
            ],
        ]);
    }
}
