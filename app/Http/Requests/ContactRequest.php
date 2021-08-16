<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'subject' => 'required|min:5|max:50]',
            'name' => 'required',
            'email' => 'required'
        ];
    }

    public function attributes()
    {
        return[
         'name' => 'Ваше имя'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Ваше имя обязательно',
            'email.required' => 'Ваш емаил обязателен',
            'subject.required' => 'Тема сообщения обязательна'
        ];
    }
}
