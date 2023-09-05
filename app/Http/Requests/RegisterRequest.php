<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'mobile_number' => 'required|digits:10'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter Name',
            'password.required' => 'Please enter Password',
            'email.required' => 'Please enter E-Mail Address',
            'mobile_number.required' => 'Please enter Mobile Number',
        ];
    }
}
