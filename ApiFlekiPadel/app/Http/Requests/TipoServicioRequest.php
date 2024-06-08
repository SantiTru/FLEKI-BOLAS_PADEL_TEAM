<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoServicioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre_tipo' => 'required|string|max:255',
            'descripcion_tipo' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
        ];
    }
}
