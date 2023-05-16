<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\page\page_new_request;
use App\Models\admin\news;
use App\Models\admin\page;
use App\Services\resize_save_image\resize_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pages_controller extends Controller
{
    protected string $address_view = 'dashboard.admin.module.pages.';
    protected string $module='pages';


    public function create(){
        return view($this->address_view.'create_page');
    }
    public function store(page_new_request $request){
        $data=$request->all();
        if($request->has('pic')){
            $image=new resize_image($request->pic,'pages');
            $data=array_merge($request->all(),[
                'pic'=>$this->module.'/'.$image->getImageNamePath()
            ]);
        }
        page::create($data);

        return back()->with('success','صفحه با موفقیت ساخته شد');
    }

    public function index(Request $request){
        $pages= page::filter($request->all())->paginate(10);
        return view($this->address_view.'index_page',compact('pages'));
    }

    public function delete(){
        $redirect=route('page.index');
        $id=request()->get('id');
        $page=page::find($id);
        $page->delete();

        Session::flash('success','ایتم با موفقیت حذف شد');
        return response()->json($redirect);
    }

    public function edit(page $page){
        return view($this->address_view.'edit_page',compact('page'));
    }
    public function update(Request $request,page $page){
        $data=$request->all();
        if($request->has('pic')){
            if(gettype($request->pic)=='object'){
                $image_sizes=[['width'=>300,'height'=>100,'module'=>$this->module,'thumb_name'=>'thumb1']];
                $image=new resize_image($request->pic,'news');
                $image->resize_image($image_sizes);
                $data=array_merge($data,[
                    'pic'=>$this->module.'/'.$image->getImageNamePath()
                ]);
            }
        }
        $page->update($data);
        return back()->with('success', 'تغییرات انجام شد');
    }

    public function change_states_or_delete(Request $request){
        $params= $request->all();
        return (new page())->crud($params);
    }
}
