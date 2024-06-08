<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_usuario' => $this->id_usuario,
            'nombre_usuario' => $this->nombre_usuario,
            'apellidos' => $this->apellidos,
            'mail' => $this->mail,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

