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
            'Id_usuario_servicio' => $this->Id_usuario_servicio,
            'Usuario' => new UsuarioResource($this->whenLoaded('usuario')),
            'Servicio' => new ServicioResource($this->whenLoaded('servicio')),
            'Fecha_contratacion' => $this->Fecha_contratacion,
        ];
    }
}