<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOption extends FormRequest
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
            'option_nm' => 'required',
            'category_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'option_nm.required' => 'Please Enter the Meal Option Name',
          'category_id.required' => 'Please select Category That Meal Falls Under',
        ];
    }
}
