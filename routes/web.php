<?php

use App\Http\Controllers\admin\news_cats_controller;
use App\Http\Controllers\admin\news_controller;
use Illuminate\Support\Facades\Route;


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

Route::get('/crud',[news_cats_controller::class,'change_states_or_delete'])->name('change.state.or.delete');

//news_routes
Route::get('/news/create',[news_controller::class,'create'])->name('news.create');
Route::post('/news/create', [news_controller::class, 'store'])
    ->name('news.store');
Route::get('/news',[news_controller::class,'index'])->name('news.index');
