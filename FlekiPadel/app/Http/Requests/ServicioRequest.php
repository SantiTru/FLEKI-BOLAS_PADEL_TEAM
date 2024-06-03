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
            'Fecha_evento' => 'required|date',
            'Id_tipo_servicio' => 'required|exists:tipo_servicio,Id_tipo_servicio'
        ];
    }
}
