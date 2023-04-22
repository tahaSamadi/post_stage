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
            $news_cats=news_cats::where('parent_id',null)->with('sub_cats')->get(['id','title']);
            $view->with('news_cats',$news_cats);
        });
    }
}
