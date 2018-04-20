<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDoctorRequest extends FormRequest
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
            'last_name_one' => 'required',
            'last_name_two' => 'required',
            'img_name'      => 'mimes:jpeg,jpg,png',
            //'age'           => 'numeric',
            //'cell_phone'    => 'numeric',
            //'home_phone'    => 'numeric',
        ];
    }

    public function messages(){
        return [
            'name.required'          => 'Nombre',
            'last_name_one.required' => 'Apellido paterno',
            'last_name_two.required' => 'Apellido paterno',
            'img_name.mimes'         => 'La extension de la imagén debe ser: jpeg,jpg,png',
            //'age.numeric'            => 'Edad debe contener solo numeros',
            //'cell_phone.numeric'     => 'Telefono celular debe contener solo numeros',
            //'home_phone.numeric'     => 'Telefono de casa debe contener solo numeros'
        ];
    }
}
