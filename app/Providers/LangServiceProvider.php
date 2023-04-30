<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LangServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('dashboard.admin.module.*', function($view){
            $full_view_name = $view->getName();
            $full_name_view=preg_split('/module\.[^\.]{1,}\./', $full_view_name);
            $view_name=$full_name_view[1];
            $explode_module_name=explode('_',$view_name);
            $module_crud_type=[
                'type'=>$explode_module_name[0],
                'module'=>$explode_module_name[1],
            ];
            $view->with('module_crud_type',$module_crud_type);
        });

        View::composer('*', function($view){
            $crud_names=[
                'create'=>'ایجاد',
                'edit'=>'ویرایش',
                'index'=>'لیست',
            ];
            $view->with('crud_names',$crud_names);
        });
        View::composer('*', function($view){
            $lang_state=[
                0=>'عدم نمایش',
                1=>'نمایش',
            ];
            $view->with('lang_state',$lang_state);
        });
    }
}
