<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoServiciosRequest extends FormRequest
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
            'nombre_tipo' => 'required|string|max:255',
            'descripcion_tipo' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
        ];
    }
}
