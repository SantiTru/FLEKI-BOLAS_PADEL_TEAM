<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioServicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'id_usuario' => 'required|exists:users,id',
            'id_servicios' => 'required|exists:servicios,id_servicios',
            'fecha_contratacion' => 'required|date',
        ];
    }
}
