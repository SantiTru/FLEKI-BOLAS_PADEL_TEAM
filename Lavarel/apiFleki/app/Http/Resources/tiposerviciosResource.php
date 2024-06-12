<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TipoServiciosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id_tipo_servicios' => $this->id_tipo_servicios,
            'nombre_tipo' => $this->nombre_tipo,
            'descripcion_tipo' => $this->descripcion_tipo,
            'precio' => $this->precio,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
