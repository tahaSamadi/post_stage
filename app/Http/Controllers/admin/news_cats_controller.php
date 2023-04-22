<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\news\news_cat_request;
use App\Models\admin\news_cats;
use Illuminate\Http\Request;

class news_cats_controller extends Controller
{
    public function create(){
        $news_cats=news_cats::where('parent_id',null)->get(['id','title']);
        return view("dashboard.admin.module.news.create_news",compact('news_cats'));
    }
    public function store(news_cat_request $request){
        news_cats::create($request->all());
        return back()->with(['success'=>'دسته بندی خبر ایجاد شد']);
    }
}
