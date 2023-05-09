<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class menu_controller extends Controller
{
    protected string $address_view = 'dashboard.admin.module.menu.';
    public function create(){
        return view($this->address_view.'create_menu');
    }
    public function store(Request $request){
        return $request->all();
    }
}
