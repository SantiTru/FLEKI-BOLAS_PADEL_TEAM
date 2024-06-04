<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioServicioResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'Id_usuario_servicio' => $this->Id_usuario_servicio,
            'Id_usuario' => new UsuarioResource($this->usuario),
            'Id_servicio' => new ServicioResource($this->servicio),
            'Fecha_contratación' => $this->Fecha_contratación,
        ];
    }
}
