<?php

namespace App\Http\Requests\admin\news;

use Illuminate\Foundation\Http\FormRequest;

class new_news_request extends FormRequest
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
            'short_note'=>['required','string','max:280'],
            'tags'=>['required'],
            'pic'=>['required','mimes:jpg,png,webp,jpeg,gif','max:2048'],
            'long_note'=>['required']
        ];
    }
    protected function passedValidation():void
    {
//        $this->merge([
//            'tags'=>implode(',',$this->tags->value)
//        ]);
    }
}
