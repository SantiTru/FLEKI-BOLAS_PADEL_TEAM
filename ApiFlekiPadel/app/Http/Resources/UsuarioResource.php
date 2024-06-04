<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
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
            'Id_usuario' => $this->Id_usuario,
            'Nombre_usuario' => $this->Nombre_usuario,
            'Apellidos' => $this->Apellidos,
            'Mail' => $this->Mail,
        ];
    }
}

