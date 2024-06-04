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
            'Nombre_tipo' => 'required|string|max:255',
            'Descripción_tipo' => 'nullable|string',
            'Precio' => 'required|numeric|min:0'
        ];
    }
}
