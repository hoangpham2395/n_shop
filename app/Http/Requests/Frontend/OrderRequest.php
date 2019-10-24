<?php
namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ContactRequest
 * @package App\Http\Requests\Frontend
 */
class OrderRequest extends FormRequest
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
            'user_name' => 'required|max:256',
            'user_tel' => 'required|max:12',
            'user_email' => 'nullable|email|max:256',
            'user_address' => 'required|max:256',
        ];

        return $rules;
    }

    public function attributes()
    {
        return [
            'user_name' => transm('orders.user_name'),
            'user_tel' => transm('orders.user_tel'),
            'user_email' => transm('orders.user_email'),
            'user_address' => transm('orders.user_address'),
        ];
    }
}
