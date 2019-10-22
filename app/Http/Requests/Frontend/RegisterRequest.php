<?php

namespace App\Http\Requests\Frontend;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $typeLogin = $this->request->get('type_login');
        $rules = [
            'login_id' => 'required',
            'type_login' => 'required|in:' . implode(',', array_keys(getConfig('frontend_type_login'))),
            'password' => 'required|min:6|max:25',
            'confirm_password' => 'required|same:password|min:6|max:25',
        ];

        $ruleLoginId = $typeLogin == getConstant('FRONTEND_LOGIN_TYPE_EMAIL') ? '|email|max:255|unique:users,email,NULL,id,deleted_at,NULL' : '|max:12|unique:users,tel,NULL,id,deleted_at,NULL';
        $rules['login_id'] .= $ruleLoginId;

        return $rules;
    }

    public function attributes()
    {
        return [
            'login_id' => transm('users.login_id'),
            'type_login' => transm('users.type_login'),
            'password' => transm('users.password'),
            'confirm_password' => transm('users.confirm_password'),
        ];
    }
}
