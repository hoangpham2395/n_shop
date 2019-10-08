<?php
namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ContactRequest
 * @package App\Http\Requests\Frontend
 */
class ContactRequest extends FormRequest
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
            'username' => 'nullable|max:255',
            'tel' => 'required|max:12',
            'email' => 'nullable|email|max:255',
            'content' => 'required',
        ];

        return $rules;
    }

    public function attributes()
    {
        return [
            'username' => transm('contacts.username'),
            'email' => transm('contacts.email'),
            'tel' => transm('contacts.tel'),
            'content' => transm('contacts.content'),
        ];
    }
}
