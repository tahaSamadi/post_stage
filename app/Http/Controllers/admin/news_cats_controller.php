<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\news\news_cat_request;
use App\Models\admin\news_cats;
use http\Env\Response;
use Illuminate\Http\Request;

class news_cats_controller extends Controller
{
    //check app service provider if you don't understand news_cats concept
    public function create(){
        return view("dashboard.admin.module.news_cats.create_news-cats");
    }
    public function store(news_cat_request $request){
        news_cats::create($request->all());
        return back()->with(['success'=>'دسته بندی خبر ایجاد شد']);
    }
    public function index(){
        return view("dashboard.admin.module.news_cats.index_news-cats");
    }
}
