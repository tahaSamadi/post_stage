<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class news_controller extends Controller
{
    public function create(){
        return view("dashboard.admin.module.create_news");
    }
}
