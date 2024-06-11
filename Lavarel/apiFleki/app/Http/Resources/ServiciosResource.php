<?php
namespace App\Http\Resources;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class ServicioResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'titulo' => 'Título: ' . $this->titulo,
            'descripcion' => 'Descripción: ' . $this->descripcion,
            'etiquetas' => $this->etiquetas->pluck('nombre')
        ];
    }
}
