<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecruitmentRequest extends FormRequest
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
            "name" => 'required|min:3|max:60|regex:/^[A-ZÀ-úa-z\s]+$/',
            "phone" => 'required',
            "email" => 'required|regex:/^.+@.+$/i',
            "cv" => 'required|mimes:pdf,jpeg,png|max:1999',
            "observation" => 'required'
        ];
    }
    public function messages()
    {
        return [
        'required' => 'Preenche os campos'
        ];
    }
}
