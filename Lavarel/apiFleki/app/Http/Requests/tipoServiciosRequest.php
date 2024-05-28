<?php
namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;


class TipoServicioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'nombre' => 'required|max:17|min:5',
        ];
    }
}
