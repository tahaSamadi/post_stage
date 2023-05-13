<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\menu\menu_new_request;
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
        $this->menu_type=menu_type::select('id','title','type')->get();
        $this->menu_type_open=menu_type_open::select('id','title')->get();

    }

    public function create(){
        $menu_type=$this->menu_type;
        $menu_type_open=$this->menu_type_open;
        $menu=menu::where('parent_id',null)->get();
        return view($this->address_view.'create_menu',compact('menu_type','menu_type_open','menu'));
    }
    public function store(menu_new_request $request){
        $data=self::set_parent_id($request->all());
        menu::create($data);
        return back()->with('success', 'منو ایجاد شد');
    }


    public function set_parent_id(array $params){
        $menu_type=$this->menu_type;
        foreach ($menu_type as $item) {
            if($params['menu_type'] == $item['id']){
                $params['parent_id']=$params['parent_id_'.$item['type']];
            }
        }
        return $params;
    }
}
