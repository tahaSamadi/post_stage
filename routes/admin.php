<?php

use App\Http\Controllers\admin\Auth\change_password;
use App\Http\Controllers\admin\config_controller;
use App\Http\Controllers\admin\contact_controller;
use App\Http\Controllers\admin\menu_controller;
use App\Http\Controllers\admin\news_cats_controller;
use App\Http\Controllers\admin\news_controller;
use App\Http\Controllers\admin\pages_controller;
use App\Models\admin\news_cats;
use Illuminate\Support\Facades\Route;



Route::get('login',[\App\Http\Controllers\admin\Auth\AuthenticateSessionController::class,'create'])->name('admin.login');
Route::post('login',[\App\Http\Controllers\admin\Auth\AuthenticateSessionController::class,'store'])->name('admin.login');

//news_cats_route
Route::middleware('auth:admin')->group(function (){
    //setting_route
    Route::get('/config_main',[config_controller::class,'index'])->name('config_main.index');
    Route::post('/config_main',[config_controller::class,'store'])->name('config_main.store');


    Route::get('/',function (){
        $news_cats = news_cats::where('parent_id', null)
            ->get(['id', 'title', 'state', 'state_main', 'state_header', 'slug']);
        return view('dashboard.admin.module.news_cats.create_news-cats', compact('news_cats'));
    })->name('base');

    Route::get('/news/cats/create', [news_cats_controller::class, 'create'])
        ->name('news.cats.create');
    Route::post('/news/cats/create', [news_cats_controller::class, 'store'])
        ->name('news_cats.cats.store');

    Route::get('/news/cats', [news_cats_controller::class, 'index'])
        ->name('news.cats.index');

    Route::get('/news/cats/edit/{news_cat:slug}', [news_cats_controller::class, 'edit'])
        ->name('news.cats.edit');
    Route::post('/news/cats/update/{news_cat:slug}', [news_cats_controller::class, 'update'])
        ->name('news.cats.update');

    Route::post('/news/cats/delete', [news_cats_controller::class, 'delete'])
        ->name('news.cats.delete');
    Route::post('/news/cats/delete_all',[news_cats_controller::class,'delete_all'])
        ->name('news.cats.delete_all');

    Route::get('news_cat/crud',[news_cats_controller::class,'change_states_or_delete'])->name('change.state.or.delete.news_cat');

    //news_routes
    Route::get('/news/create',[news_controller::class,'create'])->name('news.create');
    Route::post('/news/create', [news_controller::class, 'store'])
        ->name('news.store');

    Route::get('/news_list/{news_cat:slug?}',[news_controller::class,'index'])->name('news.index');


    Route::post('/news/delete', [news_controller::class, 'delete'])
        ->name('news.delete');
    Route::get('/news/edit/{news:slug}', [news_controller::class, 'edit'])
        ->name('news.edit');
    Route::post('/news/update/{news:slug}',[news_controller::class,'update'])->name('news.update');
    Route::get('news/crud',[news_controller::class,'change_states_or_delete'])->name('change.state.or.delete.news');



    //menu_routes
    Route::get('/menu/new',[menu_controller::class,'create'])->name('menu.create');
    Route::post('/menu/new',[menu_controller::class,'store'])->name('menu.store');


    Route::get('/menu_list',[menu_controller::class,'index'])->name('menu.index');

    Route::post('/menu/delete', [menu_controller::class, 'delete'])
        ->name('menu.delete');

    Route::get('menu/crud',[menu_controller::class,'change_states_or_delete'])->name('change.state.or.delete.menu');

    Route::get('/menu/edit/{menu:id}', [menu_controller::class, 'edit'])
        ->name('menu.edit');
    Route::post('/menu/update/{menu:id}',[menu_controller::class,'update'])->name('menu.update');



    //pages_route
    Route::get('/page/create',[pages_controller::class,'create'])->name('page.create');
    Route::post('/page/create',[pages_controller::class,'store'])->name('page.store');


    Route::get('/page_list',[pages_controller::class,'index'])->name('page.index');
    Route::post('/page/delete', [pages_controller::class, 'delete'])
        ->name('page.delete');


    Route::get('page/crud',[pages_controller::class,'change_states_or_delete'])->name('change.state.or.delete.page');


    Route::get('/page/edit/{page:id}', [pages_controller::class, 'edit'])
        ->name('page.edit');
    Route::post('/page/update/{page:id}',[pages_controller::class,'update'])->name('page.update');



    Route::get('/change_password',[change_password::class,'index'])->name('change.password.index');
    Route::post('/change_password',[change_password::class,'store'])->name('change.password.store');


    Route::get('/contact/create',[contact_controller::class,'create'])->name('contact.create');
    Route::post('/contact/store',[contact_controller::class,'store'])->name('contact.store');
});
