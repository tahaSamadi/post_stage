<?php

namespace App\Http\Requests\admin\news_cat;

use Illuminate\Validation\Rule;

class edit_news_cat_request extends news_cat_request
{

    public function rules(): array
    {
        return array_merge(parent::rules(), [
            'title' => ['required',Rule::unique('news_cats','title')->ignore($this->news_cat)],
        ]);
    }
}
