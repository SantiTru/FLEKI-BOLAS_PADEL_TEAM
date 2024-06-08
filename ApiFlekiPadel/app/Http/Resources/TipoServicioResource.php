<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TipoServicioResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_tipo_servicio' => $this->id_tipo_servicio,
            'nombre_tipo' => $this->nombre_tipo,
            'descripcion_tipo' => $this->descripcion_tipo,
            'precio' => $this->precio,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}