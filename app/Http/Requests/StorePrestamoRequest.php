<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrestamoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'fecha_prestamo' => 'required|string|max:150',
            'fecha_devolucion_esperada' => 'required|string|max:100',
            'usuario_id' => 'required|integer|exists:usuarios,usuario_id',
            'libro_id' => 'required|integer|exists:libros,libro_id',
            'estado' => 'required|string|max:32',
        ];
    }
}
