<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\page\page_new_request;
use App\Models\admin\page;
use App\Services\resize_save_image\resize_image;
use Illuminate\Http\Request;

class pages_controller extends Controller
{
    protected string $address_view = 'dashboard.admin.module.pages.';
    protected string $module='pages';


    public function create(){
        return view($this->address_view.'create_page');
    }
    public function store(page_new_request $request){
        $image=new resize_image($request->pic,'pages');
        $data=array_merge($request->all(),[
            'pic'=>$this->module.'/'.$image->getImageNamePath()
        ]);
        page::create($data);
        return back()->with('success','صفحه با موفقیت ساخته شد');
    }
}
