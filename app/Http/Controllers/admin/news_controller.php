<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\news\new_news_request;
use App\Http\Requests\admin\news_cat\news_cat_request;
use App\Models\news;
use Buglinjo\LaravelWebp\Webp;
use Illuminate\Http\Request;

class news_controller extends Controller
{
    public function create(){
        return view("dashboard.admin.module.news.create_news");
    }
    public function store(new_news_request $request){
        news::create($request->all());
    }
}
