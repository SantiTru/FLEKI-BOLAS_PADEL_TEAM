<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioServicioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id_usuario_servicio' => $this->id_usuario_servicio,
            'id_usuario' => $this->id_usuario,
            'usuario' => new UserResource($this->whenLoaded('user')),
            'id_servicios' => $this->id_servicios,
            'servicio' => new ServiciosResource($this->whenLoaded('servicio')),
            'fecha_contratacion' => $this->fecha_contratacion,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}