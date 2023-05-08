<?php

namespace App\Http\Requests\admin\news;

use Illuminate\Validation\Rule;

class edit_news_request extends new_news_request
{
    public function rules(): array
    {
        return array_merge(parent::rules(),[
            'title' => ['required',Rule::unique('news_cats','title')->ignore($this->news_cat)],
        ]);
    }
}
