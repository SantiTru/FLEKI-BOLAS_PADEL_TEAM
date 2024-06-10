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
            'id_usuario' => 'required|exists:Usuario,id_usuario',
            'id_servicio' => 'required|exists:servicio,id_servicio',
            'fecha_contratacion' => 'required|date'
        ];
    }
}
