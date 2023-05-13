<?php

namespace App\Http\Requests\admin\menu;

use Illuminate\Foundation\Http\FormRequest;

class menu_new_request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>['required'],
            'menu_type'=>['required','integer'],
            'menu_type_open'=>['required','integer'],
        ];
    }
}
