<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
            'email' => 'required|email|unique:admin,email,'. $this->request->get('id'),
            'name' => 'required',
            'role_type' => 'required|in:'. getConstant('ROLE_TYPE_SUPER_ADMIN') .','. getConstant('ROLE_TYPE_ADMIN'),
            'password' => 'nullable|min:6|max:25',
            'confirm_password' => 'nullable|same:password|min:6|max:25',
        ];
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
