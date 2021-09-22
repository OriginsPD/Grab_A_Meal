<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages() {
        return [
            'email.required' => 'Email Address is Required',
            'first_name.required' => 'First name is Required',
            'last_name.required' => 'Last name is Required',
            'password.required' => 'Please Create a Password',
            'password.min' => 'Password must be at least 8 Characters',
            'password.confirmed' => 'Password does not match',
        ];
    }
}
