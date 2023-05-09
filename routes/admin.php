<?php

use App\Http\Controllers\admin\menu_controller;
use App\Http\Controllers\admin\news_cats_controller;
use App\Http\Controllers\admin\news_controller;
use App\Models\admin\news_cats;
use Illuminate\Support\Facades\Route;

Route::get('/',function (){
    $news_cats = news_cats::where('parent_id', null)
        ->get(['id', 'title', 'state', 'state_main', 'state_header', 'slug']);
    return view('dashboard.admin.module.news_cats.create_news-cats', compact('news_cats'));
})->name('base');
//news_cats_route
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
