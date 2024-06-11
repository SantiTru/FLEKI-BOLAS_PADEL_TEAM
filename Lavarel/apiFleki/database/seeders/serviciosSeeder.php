<?php
namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Task;


class ServiciosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tareas')->insert([
            'titulo' => 'PHP project',
            'descripcion' => 'Proyecto en Laravel'
        ]);
        DB::table('tareas')->insert([
            'titulo' => 'JavaScrip',
            'descripcion' => 'Realización carrito de comprar'
        ]);
        DB::table('tareas')->insert([
            'titulo' => 'Figma',
            'descripcion' => 'Creación prototipo página web'
        ]);
    }
}
