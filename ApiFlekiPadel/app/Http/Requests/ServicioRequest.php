<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fecha_evento' => 'required|date',
            'id_tipo_servicio' => 'nullable|exists:tipo_servicio,id_tipo_servicio',
        ];
    }
}
