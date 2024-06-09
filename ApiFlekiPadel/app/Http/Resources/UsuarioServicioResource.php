<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioServicioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_usuario_servicio' => $this->id_usuario_servicio,
            'Usuario' => new UsuarioResource($this->whenLoaded('Usuario')),
            'servicio' => new ServicioResource($this->whenLoaded('servicio')),
            'fecha_contratacion' => $this->fecha_contratacion,
        ];
    }
}