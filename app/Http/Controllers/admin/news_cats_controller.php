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
    protected string $address_view='dashboard.admin.module.news_cats.';
    //check app service provider if you don't understand news_cats concept
    public function create(){
        $news_cats=news_cats::where('parent_id',null)->with('sub_cats')->get(['id','title','state','state_main','state_header','slug']);
        return view($this->address_view.'create_news-cats',compact('news_cats'));
    }
    public function store(news_cat_request $request){
        news_cats::create($request->all());
        return back()->with(['success'=>'دسته بندی خبر ایجاد شد']);
    }
    public function index(Request $request){
        $news_cats=news_cats::where('parent_id',null)->with('sub_cats')->get(['id','title','state','state_main','state_header','slug']);
        if ($request->ajax()){
            $news_cats=news_cats::where('parent_id',$request->get('parent_id'))->get();
        }
        return view($this->address_view.'index_news-cats',compact('news_cats'));
    }
    public function edit(news_cats $news_cat){
        $news_cats=news_cats::where('parent_id',null)->with('sub_cats')->get(['id','title','state','state_main','state_header','slug']);
        return view($this->address_view.'edit_news-cats',compact('news_cat','news_cats'));
    }
    public function update(edit_news_cat_request $request,news_cats $news_cat){
        $news_cat->update($request->all());
        return redirect()->route('news.cats.edit',['news_cat'=>$request->slug]);
    }
    public function delete(){
        news_cats::destroy(request()->get('id'));
        echo json_encode('success');
    }
}
