<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioServicioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Id_usuario' => 'required|exists:usuario,Id_usuario',
            'Id_servicio' => 'required|exists:servicio,Id_servicio',
            'Fecha_contratacion' => 'required|date'
        ];
    }
}
