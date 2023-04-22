<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\news_cats;
use Illuminate\Http\Request;

class news_cats_controller extends Controller
{
    public function create(){
        $news_cats=news_cats::where('parent_id',null)->get();
        return view("dashboard.admin.module.news.create_news",compact('news_cats'));
    }
}
