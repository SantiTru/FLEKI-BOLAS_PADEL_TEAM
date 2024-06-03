<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuario_servicio')->insert([
            [
                'Id_usuario' => 1, // Fleki
                'Id_servicio' => 1, // Torneo
                'Fecha_contratación' => '2024-04-01'
            ],
            [
                'Id_usuario' => 2, // Cristi
                'Id_servicio' => 2, // Liga
                'Fecha_contratación' => '2024-03-01'
            ],
        ]);
    }
}
