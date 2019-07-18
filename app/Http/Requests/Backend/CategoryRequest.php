<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category_name' => 'required',
            'category_slug' => 'required|unique:categories,category_slug',
        ];
    }

    public function attributes() 
    {
        return [
            'category_name' => transm('categories.category_name'), 
            'category_slug' => transm('categories.category_slug'),
        ];
    }
}
