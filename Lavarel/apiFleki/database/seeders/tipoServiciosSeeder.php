<?php
namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TipoServiciosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('etiquetas')->insert([
            'nombre' => 'Diseño de interfaz'
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => 'Desarrollo de aplicacion web entorno servidor'
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => 'Despliegue de aplicaciones web'
        ]);
        DB::table('etiquetas')->insert([
            'nombre' => 'Desarrollo de aplicacion web entorno clientes'
        ]);
    }
}
