<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuario')->insert([
            [
                'Nombre_usuario' => 'Fleki',
                'Apellidos' => 'Bola',
                'Mail' => 'Fleki.bola@padeltour.com',
                'Contraseña' => Hash::make('password1234')
            ],
            [
                'Nombre_usuario' => 'Cristi',
                'Apellidos' => 'LaConde',
                'Mail' => 'Cris.Laconde@quebola.com',
                'Contraseña' => Hash::make('password1234')
            ],
        ]);
    }
}
