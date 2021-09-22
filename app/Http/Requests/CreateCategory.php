<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategory extends FormRequest
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
            'category_nm' => 'required|unique:meal_categories'
        ];
    }

    public function messages()
    {
        return [
            'category_nm.required' => 'Please Enter Category Name',
            'category_nm.unique' => 'Category Already Exists',
        ];
    }
}
