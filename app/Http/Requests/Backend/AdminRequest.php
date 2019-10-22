<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'email' => 'required|email|max:255|unique:admin,email,NULL,id,deleted_at,NULL',
            'name' => 'required|max:64',
            'role_type' => 'required|in:'. getConstant('ROLE_TYPE_SUPER_ADMIN') .','. getConstant('ROLE_TYPE_ADMIN'),
            'password' => 'required|min:6|max:25',
            'confirm_password' => 'required|same:password|min:6|max:25',
        ];

        if (!empty($this->request->get('id'))) {
            $rules['email'] = 'required|email|max:255|unique:admin,email,'. $this->request->get('id') .',id,deleted_at,NULL';
            $rules['password'] = 'nullable|min:6|max:25';
            $rules['confirm_password'] = 'nullable|same:password|min:6|max:25';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'email' => transm('admin.email'),
            'name' => transm('admin.name'),
            'role_type' => transm('admin.role_type'),
            'password' => transm('admin.password'),
            'confirm_password' => transm('admin.confirm_password'),
        ];
    }
}
