<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUserRequest extends FormRequest
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
            'email' => 'required|email:rfc,dns',
            'phone_number' => 'required|regex:/(\+[0-9 ])(01)[0-9 ]{9}/'
        ];
    }
    public function messages(){
        return [
            'phone_number.regex' => 'Please put your number in the international format +xxxxxxxxxxxx'
        ];
    }

}
