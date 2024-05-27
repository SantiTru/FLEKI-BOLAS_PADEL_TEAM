<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipo_serviciosSeeder extends Seeder{
public function run() {
    TipoServicio::create(['name' => 'Entrenamiento']);
    // Agrega más tipos de servicios según sea necesario
}
}


