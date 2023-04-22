<?php

namespace App\Http\Requests\admin\news;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class news_cat_request extends FormRequest
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
            'description'=>['required'],
            'slug'=>['unique:news_cats','required']
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'slug'=>Str::slug($this->slug),
        ]);
    }
}
