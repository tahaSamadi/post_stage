<?php

namespace App\Providers;

use App\Models\admin\news_cats;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['dashboard.admin.module.news_cats.*'], function($view){
            $news_cats=news_cats::where('parent_id',null)->with('sub_cats')->get(['id','title','state','state_main','state_header']);
            $view->with('news_cats',$news_cats);
        });
        View::composer(['components.form.table'],function ($view){
            $lang_state[0]="عدم نمایش";
            $lang_state[1]="نمایش";
            $view->with('lang_state',$lang_state);
        });
    }
}
