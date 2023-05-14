<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\menu\menu_new_request;
use App\Models\admin\menu;
use App\Models\admin\menu_type;
use App\Models\admin\menu_type_open;
use App\Models\admin\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
    public function index(){
        $parent_id=(request()->get('parent_id') == null) ? null : request()->get('parent_id');
        $menu=menu::where('parent_id',$parent_id)->filter(request()->get('title'))->paginate(10);
        return view($this->address_view.'index_menu',compact('menu'));
    }
    public function delete(){
        $redirect=route('menu.index');
        $id=request()->get('id');
        $news=menu::find($id);
        $news->delete();

        Session::flash('success','ایتم با موفقیت حذف شد');
        return response()->json($redirect);

    }
    public function change_states_or_delete(Request $request){
        $params= $request->all();
        return (new menu())->crud($params);
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
