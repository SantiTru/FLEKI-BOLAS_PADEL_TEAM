<?php
namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;


class ServicioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'titulo' => 'required|max:30|min:3',
            'descripcion' => 'nullable|max:30|min:3',
        ];
    }
}
