<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\config_main;
use Illuminate\Http\Request;

class config_controller extends Controller
{
    public function index(){
        return view('dashboard.admin.module.setting.config_main');
    }
    public function store(Request $request){
        if(config_main::count()){
            $config_main=config_main::first();
            $config_main->update($request->all());
            return back()->with('success','اطلاعات با موفقیت تغییر کرد');
        }
        config_main::create($request->all());
        return back()->with('success','اطلاعات با موفقیت تغییر کرد');

    }
}
