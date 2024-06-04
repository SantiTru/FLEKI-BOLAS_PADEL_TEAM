<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TipoServicioResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'Id_tipo_servicio' => $this->Id_tipo_servicio,
            'Nombre_tipo' => $this->Nombre_tipo,
            'Descripción_tipo' => $this->Descripción_tipo,
            'Precio' => $this->Precio,
        ];
    }
}
