<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicio')->insert([
            [
                'Fecha_evento' => '2024-06-01',
                'Id_tipo_servicio' => 1 // Torneo
            ],
            [
                'Fecha_evento' => '2024-09-01',
                'Id_tipo_servicio' => 2 // Liga
            ],
        ]);
    }
}
