<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TipoServicioResource extends JsonResource
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
            'Id_tipo_servicio' => $this->Id_tipo_servicio,
            'Nombre_tipo' => $this->Nombre_tipo,
            'Descripcion_tipo' => $this->Descripcion_tipo,
            'Precio' => $this->Precio,
        ];
    }
}
