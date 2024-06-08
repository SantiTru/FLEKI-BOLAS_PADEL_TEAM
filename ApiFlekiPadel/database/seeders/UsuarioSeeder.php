<?php

namespace Database\Seeders;

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
                'nombre_usuario' => 'Santi',
                'apellidos' => 'Truji',
                'mail' => 'Fleki.truji@padeltour.com',
                'contraseña' => Hash::make('password1234')
            ],
            [
                'nombre_usuario' => 'Cristi',
                'apellidos' => 'LaConde',
                'mail' => 'Cris.Laconde@quebola.com',
                'contraseña' => Hash::make('password1234')
            ],
        ]);
    }
}