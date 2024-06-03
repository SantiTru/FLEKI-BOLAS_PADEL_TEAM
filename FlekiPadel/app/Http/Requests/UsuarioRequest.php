<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsuarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Nombre_usuario' => 'required|string|max:255',
            'Apellidos' => 'required|string|max:255',
            'Mail' => ['required', 'string', 'email', 'max:255', Rule::unique('usuarios')->ignore($this->usuario)],
            'Contraseña' => 'required|string|min:8'
        ];
    }
}
