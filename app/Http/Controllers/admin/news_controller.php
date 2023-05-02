<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\news\new_news_request;
use App\Http\Requests\admin\news_cat\news_cat_request;
use App\Models\admin\news_cats;
use App\Models\news;
use App\Services\resize_save_image\resize_image;
use Buglinjo\LaravelWebp\Webp;
use Illuminate\Http\Request;

class news_controller extends Controller
{
    public $module='news';
    public function create(){
        $news_cats = news_cats::where('parent_id', null)
            ->get(['id', 'title', 'state', 'state_main', 'state_header', 'slug']);
        return view("dashboard.admin.module.news.create_news",compact('news_cats'));
    }
    public function store(new_news_request $request){
        $image_sizes=[['width'=>300,'height'=>100,'module'=>$this->module,'thumb_name'=>'thumb1']];
        $image=new resize_image($request->pic);
        $image->resize_image($image_sizes);
        $data=array_merge($request->all(),[
           'pic'=>$this->module.'/'.$image->getImageNamePath()
        ]);
        news::create($data);
        return back()->with('success','خبر با موفقیت ساخته شد');
    }
}
