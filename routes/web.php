<?php

use Illuminate\Support\Facades\Route;


//news_cats_route
Route::get('/news/cats/create', [\App\Http\Controllers\admin\news_cats_controller::class, 'create'])
    ->name('news.cats.create');
Route::post('/news/cats/create', [\App\Http\Controllers\admin\news_cats_controller::class, 'store'])
    ->name('news_cats.cats.store');
Route::get('/news/cats', [\App\Http\Controllers\admin\news_cats_controller::class, 'index'])
    ->name('news.cats.index');
Route::get('/news/cats/edit/{news_cat:slug}', [\App\Http\Controllers\admin\news_cats_controller::class, 'edit'])
    ->name('news.cats.edit');
Route::post('/news/cats/update/{news_cat:slug}', [\App\Http\Controllers\admin\news_cats_controller::class, 'update'])
    ->name('news.cats.update');
Route::post('/news/cats/delete', [\App\Http\Controllers\admin\news_cats_controller::class, 'delete'])
    ->name('news.cats.delete');
