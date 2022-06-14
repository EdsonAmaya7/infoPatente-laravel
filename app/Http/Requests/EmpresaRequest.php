<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            "nombre" => "required",
            "nombre_rl" => "required",
            "direccion1_rl" => "required",
            "direccion2_rl" => "nullable",
            "email_rl" => "required",
            "telefono" => "required",
            "nombre_sol" => "required",
            "email_sol" => "required",
            "telefono_sol" => "required",
        ];
    }
}
