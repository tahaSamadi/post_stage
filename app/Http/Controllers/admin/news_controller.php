<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\news\new_news_request;
use App\Models\admin\news;
use App\Models\admin\news_cats;
use App\Services\resize_save_image\resize_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class news_controller extends Controller
{
    protected string $module='news';
    protected string $address_view = 'dashboard.admin.module.news.';
    public function create(){
        $news_cats = news_cats::where('parent_id', null)
            ->get(['id', 'title', 'state', 'state_main', 'state_header', 'slug']);
        return view($this->address_view."create_news",compact('news_cats'));
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
    public function index(){
        $news=news::paginate(5);
        return view($this->address_view.'index_news',compact('news'));
    }

    public function delete(){
        $redirect=route('news.index');
        $id=request()->get('id');
        $news=news::find($id);
        $news->delete();

        Session::flash('success','ایتم با موفقیت حذف شد');
        return response()->json($redirect);

    }

    public function edit(news $news){
        $news_cats = news_cats::where('parent_id', null)
            ->get(['id', 'title', 'state', 'state_main', 'state_header', 'slug']);
        return view($this->address_view.'edit_news',compact('news','news_cats'));
    }
    public function update(Request $request,news $news){
        $data=$request->all();
        if(gettype($request->pic)=='object'){
            $image_sizes=[['width'=>300,'height'=>100,'module'=>$this->module,'thumb_name'=>'thumb1']];
            $image=new resize_image($request->pic);
            $image->resize_image($image_sizes);
            $data=array_merge($data,[
                'pic'=>$this->module.'/'.$image->getImageNamePath()
            ]);
        }
        $news->update($data);
        return back()->with('success', 'تغییرات انجام شد');
    }
}
