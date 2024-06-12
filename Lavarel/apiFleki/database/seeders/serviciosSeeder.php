<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios')->insert([
            [
                'fecha_evento' => '2024-06-01',
                'id_tipo_servicios' => 1, // Torneo
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha_evento' => '2024-09-01',
                'id_tipo_servicios' => 2, // Liga
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
