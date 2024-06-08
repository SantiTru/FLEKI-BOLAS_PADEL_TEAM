<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'nombre_usuario' => $this->faker->name,
            'apellidos' => $this->faker->lastName,
            'mail' => $this->faker->unique()->safeEmail,
            'contraseña' => bcrypt('password'),
        ];
    }
}
