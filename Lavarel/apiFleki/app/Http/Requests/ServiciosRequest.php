<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiciosRequest extends FormRequest
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
            'fecha_evento' => 'required|date',
            'id_tipo_servicios' => 'required|exists:tipo_servicios,id_tipo_servicios',
        ];
    }
}