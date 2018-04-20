<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTreatmentRequest extends FormRequest
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
            'name'          => 'required',
            'amount' => 'required',
            'description' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required'   => 'Nombre',
            'amount.required' => 'Monto',
            'description.required' => 'Descripción',
        ];
    }
}
