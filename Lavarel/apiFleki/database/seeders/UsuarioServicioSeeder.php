<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuario_servicio')->insert([
            [
                'id_usuario' => 1,
                'id_servicios' => 1,
                'fecha_contratacion' => '2024-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_usuario' => 2,
                'id_servicios' => 2,
                'fecha_contratacion' => '2024-02-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
