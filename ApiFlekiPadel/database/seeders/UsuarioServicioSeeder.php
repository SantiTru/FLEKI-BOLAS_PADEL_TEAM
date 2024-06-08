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
                'id_servicio' => 1,
                'fecha_contratacion' => '2024-01-01',
            ],
            [
                'id_usuario' => 2,
                'id_servicio' => 2,
                'fecha_contratacion' => '2024-02-01',
            ],
        ]);
    }
}
