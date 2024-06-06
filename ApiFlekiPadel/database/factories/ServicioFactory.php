<?php

namespace Database\Factories;

use App\Models\Servicio;
use App\Models\TipoServicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicioFactory extends Factory
{
    protected $model = Servicio::class;

    public function definition()
    {
        return [
            'fecha_evento' => $this->faker->date,
            'id_tipo_servicio' => TipoServicio::factory(),
        ];
    }
}
