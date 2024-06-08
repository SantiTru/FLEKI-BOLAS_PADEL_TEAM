<?php

namespace Database\Factories;

use App\Models\TipoServicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoServicioFactory extends Factory
{
    protected $model = TipoServicio::class;

    public function definition()
    {
        return [
            'nombre_tipo' => $this->faker->word,
            'descripcion_tipo' => $this->faker->sentence,
            'precio' => $this->faker->randomFloat(2, 10, 100),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}