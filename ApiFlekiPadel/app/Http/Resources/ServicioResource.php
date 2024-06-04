<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicioResource extends JsonResource
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
            'Id_servicio' => $this->Id_servicio,
            'Fecha_evento' => $this->Fecha_evento,
            'Tipo_servicio' => new TipoServicioResource($this->whenLoaded('tipoServicio')),
        ];
    }
}
