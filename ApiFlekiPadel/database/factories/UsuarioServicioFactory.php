<?php

namespace Database\Factories;

use App\Models\Usuario;
use App\Models\Servicio;
use App\Models\UsuarioServicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioServicioFactory extends Factory
{
    protected $model = UsuarioServicio::class;

    public function definition()
    {
        return [
            'id_usuario' => Usuario::factory(),
            'id_servicio' => Servicio::factory(),
            'fecha_contratacion' => $this->faker->date,
        ];
    }
}
