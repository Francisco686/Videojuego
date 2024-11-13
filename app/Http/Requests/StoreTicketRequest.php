<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Puedes ajustar la lógica de autorización según sea necesario
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_empleado' => ['required', 'exists:empleados,id'],
            'id_fecha' => ['required', 'exists:fechas,id'],
            'total' => ['required', 'numeric', 'min:0'],
            // Agrega reglas de validación para otros campos según sea necesario
        ];
    }
}
