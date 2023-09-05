<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8',
            'mobile_number' => 'required|digits:10',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Please enter E-Mail Address',
            'password.required' => 'Please enter Password',
            'mobile_number.required' => 'Please enter Mobile Number',
        ];
    }
}
