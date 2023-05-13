<?php

namespace App\Models\admin\crud\operations;

use App\Models\admin\news_cats;
use Illuminate\Support\Facades\Session;

class operations
{
    public function __construct()
    {
        Session::forget(['success','error']);
    }

    public function change_states(array $items,$class,string $state_type){
        if($items){
            foreach ($items as $item){
                $_item=$class->find($item);
               if($_item->$state_type == '1'){
                   $_item->$state_type='0';
                   $_item->save();
               }
                else if($_item->$state_type == '0'){
                    $_item->$state_type='1';
                    $_item->save();
                }
            }
            return back()->with('success','وضعیت آیتم های مورد نظر تغییر کرد');
        }
        else{
            return back()->with('error','لطفا آیتمی را برای تغییر انتخاب کنید');
        }
    }
    public function delete_items(array $items,$class){
        if($items){
            $class->whereIn('id',$items)->delete();
            return back()->with('success','آیتم های مورد نظر حذف شد');
        }
        else{
            return back()->with('error','لطفا آیتمی را برای حذف انتخاب کنید');
        }
    }
    public function change_state_type(array $items,$class,string $state_type,string $type){
        $allow_types=['state_main','state_header'];
        if($items){
            if(!empty($type) || $type == '0'){
                if(in_array($state_type,$allow_types)){
                    foreach ($items as $item) {
                        $class->find($item)->update([$state_type=>$type]);
                    }
                    return back()->with('success','وضعیت آیتم های مورد نظر تغییر کرد');
                }
                else{
                    throw new \Exception('the value isnt allowed for operation');
                }
            }
            else{
                return back()->with('error','لطفا وضعیت مورد نظر را انتخاب کنید');
            }
        }
        else{
            return back()->with('error','لطفا آیتمی را برای تغییر انتخاب کنید');
        }
    }
}
