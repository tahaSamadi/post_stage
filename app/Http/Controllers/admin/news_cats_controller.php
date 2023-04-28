<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\news_cat\edit_news_cat_request;
use App\Http\Requests\admin\news_cat\news_cat_request;
use App\Models\admin\news_cats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class news_cats_controller extends Controller
{
    protected string $address_view = 'dashboard.admin.module.news_cats.';

    public function create()
    {
        $news_cats = news_cats::where('parent_id', null)
            ->get(['id', 'title', 'state', 'state_main', 'state_header', 'slug']);
        return view($this->address_view . 'create_news-cats', compact('news_cats'));
    }

    public function store(news_cat_request $request)
    {
        news_cats::create($request->all());
        return back()->with(['success' => 'دسته بندی خبر ایجاد شد']);
    }

    public function index(Request $request)
    {
        $news_cats_without_paginate = news_cats::where('parent_id', null)
            ->select(['id', 'title', 'state', 'state_main', 'state_header', 'slug'])->get();

        $news_cats = news_cats::where('parent_id', null)
            ->select(['id', 'title', 'state', 'state_main', 'state_header', 'slug'])
            ->paginate(1);
        if ($request->get('parent_id')) {
            $news_cats = news_cats::where('id', $request->get('parent_id'))
                ->select(['id', 'title', 'state', 'state_main'
                    , 'state_header', 'slug'])->paginate(1);
        }

        //ajax data
        if ($request->ajax()) {
            $news_cats = news_cats::where('parent_id', $request->get('parent_id'))
                ->filter($request->get('title'))
                ->filtertype($request->get('parent_id'))
                ->paginate(1);
            return view('components.form.table', ['data' => $news_cats, 'edit_route' => 'news.cats.edit'
                , 'columns' => ['عنوان', 'اخبار', 'نمایش', 'نمایش در صفحه اصلی', 'نمایش در منو بالا', 'عملیات']
                , 'column_en' => ['title', 'News_Num', 'state', 'state_header', 'state_main']]);
        }
        return view($this->address_view . 'index_news-cats'
            , compact('news_cats', 'news_cats_without_paginate'));
    }

    public function edit(news_cats $news_cat)
    {
        $news_cats = news_cats::where('parent_id', null)->where('id', '!=', $news_cat["id"])
            ->get(['id', 'title', 'state', 'state_main', 'state_header', 'slug']);
        return view($this->address_view . 'edit_news-cats', compact('news_cat', 'news_cats'));
    }

    public function update(edit_news_cat_request $request, news_cats $news_cat)
    {
        $news_cat->update($request->all());
        return redirect()
            ->route('news.cats.edit', ['news_cat' => $request->slug])->with('success', 'تغییرات انجام شد');
    }

    public function delete()
    {
        $news_cats = news_cats::find(request()->get('id'));
        $redirect = route('news.cats.index');

        if ($news_cats["parent_id"] !== null) {
            $redirect = route('news.cats.index', ['parent_id' => $news_cats["parent_id"]]);
        }
        $news_cats->delete();
        echo json_encode($redirect);
    }
}
