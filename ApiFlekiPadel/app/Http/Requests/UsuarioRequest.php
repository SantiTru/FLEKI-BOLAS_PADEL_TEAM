<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre_usuario' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'mail' => 'required|string|email|max:255|unique:usuario,mail',
            'contraseña' => 'required|string|min:8',
        ];
    }
}
