<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOpinionRequest extends FormRequest
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
          "name" => 'required|min:3|max:100|regex:/^[A-ZÀ-úa-z\s]+$/',
          'email' => 'required|email',
          "opinion" => 'required|min:3|max:100|regex:/^[A-ZÀ-úa-z\s]+$/',
        ];
    }
    public function messages()
    {
    return [
    'name.regex' => 'Nome deve conter letras e espaços'
    ];
    }
}
