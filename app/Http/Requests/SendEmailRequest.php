<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailRequest extends FormRequest
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
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email'],
            'message' => ['required', 'min:10', 'max:1000']
        ];
    }

    function messages()
    {
        return [
            'name.required' => 'Debe ingresar un nombre',
            'name.min' => 'El nombre debe contener más de 3 caracteres',
            'name.max' => 'El nombre debe contener menos de 255 caracteres',
            'email.required' => 'Debe ingresar una dirección de correo',
            'email.email' => 'Debe ingresar una dirección de correo válida',
            'message.required' => 'Debe enviar un mensaje',
            'message.min' => 'El mensaje debe contener mas de 10 caracteres',
            'message.max' => 'El mensaje debe contener menos de 1000 caracteres'
        ];
    }
}
