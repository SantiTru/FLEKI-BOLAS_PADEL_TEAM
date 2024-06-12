<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiciosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id_servicios' => $this->id_servicios,
            'fecha_evento' => $this->fecha_evento,
            'id_tipo_servicios' => $this->id_tipo_servicios,
            'tipo_servicio' => new TipoServiciosResource($this->whenLoaded('tipoServicio')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
