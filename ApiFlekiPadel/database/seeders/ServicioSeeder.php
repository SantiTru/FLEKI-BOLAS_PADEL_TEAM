<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
                'fecha_evento' => '2024-06-01',
                'id_tipo_servicio' => 1, // Torneo
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha_evento' => '2024-09-01',
                'id_tipo_servicio' => 2, // Liga
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
