<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\menu;
use App\Models\admin\menu_type;
use App\Models\admin\menu_type_open;
use Illuminate\Http\Request;

class menu_controller extends Controller
{
    protected string $address_view = 'dashboard.admin.module.menu.';
    protected $menu_type;
    protected $menu_type_open;
    public function __construct()
    {
        $this->menu_type=menu_type::all();
        $this->menu_type_open=menu_type_open::all();

    }

    public function create(){
        $menu_type=$this->menu_type;
        $menu_type_open=$this->menu_type_open;
        $menu=menu::all();
        return view($this->address_view.'create_menu',compact('menu_type','menu_type_open','menu'));
    }
    public function store(Request $request){
        menu::create($request->all());
    }
}
