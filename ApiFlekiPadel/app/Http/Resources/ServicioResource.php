<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicioResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_servicio' => $this->id_servicio,
            'fecha_evento' => $this->fecha_evento,
            'id_tipo_servicio' => $this->id_tipo_servicio,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
