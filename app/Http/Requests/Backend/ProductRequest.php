<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = [
            'product_code' => 'required|unique:products,product_code,NULL,id,deleted_at,NULL',
            'category_id' => 'required',
            'product_name' => 'required',
            'product_slug' => 'required|unique:products,product_slug,NULL,id,deleted_at,NULL',
            'price' => 'required|numeric',
            'image' => 'nullable|max:5000|mimes:jpeg,png,gif,jpg',
        ];

        if (!empty($this->request->get('id'))) {
            $rules['product_code'] = 'required|unique:products,product_code,'. $this->request->get('id') .',id,deleted_at,NULL';
            $rules['product_slug'] = 'required|unique:products,product_slug,'. $this->request->get('id') .',id,deleted_at,NULL';
        }

        return $rules;
    }

    public function attributes() 
    {
        return [
            'product_code' => transm('products.product_code'),
            'category_id' => transm('products.category_id'),
            'product_name' => transm('products.product_name'),
            'product_slug' => transm('products.product_slug'),
            'price' => transm('products.price'),
        ];
    }
}
