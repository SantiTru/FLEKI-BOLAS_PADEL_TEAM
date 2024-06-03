<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServicioResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'Id_servicio' => $this->Id_servicio,
            'Fecha_evento' => $this->Fecha_evento,
            'Id_tipo_servicio' => new TipoServicioResource($this->tipoServicio),
        ];
    }
}
