<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UserRequest
 * @package App\Http\Requests\Frontend
 */
class UserRequest extends FormRequest
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
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'required|max:12',
            'address' => 'nullable|max:255',
            'password' => 'required|min:6|max:25',
            'confirm_password' => 'required|same:password|min:6|max:25',
        ];

        if (!empty($this->request->get('id'))) {
            $rules['email'] = 'required|email|unique:users,email,'. $this->request->get('id') .',id,deleted_at,NULL';
            $rules['tel'] = 'required|unique:users,tel,'. $this->request->get('id') .',id,deleted_at,NULL';
            $rules['password'] = 'nullable|min:6|max:25';
            $rules['confirm_password'] = 'nullable|same:password|min:6|max:25';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'login_id' => transm('users.login_id'),
            'email' => transm('users.email'),
            'tel' => transm('users.tel'),
            'password' => transm('users.password'),
            'confirm_password' => transm('users.confirm_password'),
        ];
    }
}
