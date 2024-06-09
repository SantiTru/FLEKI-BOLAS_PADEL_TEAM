<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Usuario')->insert([
            [
                'nombre_usuario' => 'Santi',
                'apellidos' => 'Truji',
                'mail' => 'Fleki.truji@padeltour.com',
                'contraseña' => bcrypt('password1'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_usuario' => 'Cristi',
                'apellidos' => 'LaConde',
                'mail' => 'Cris.Laconde@quebola.com',
                'contraseña' => bcrypt('password2'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}