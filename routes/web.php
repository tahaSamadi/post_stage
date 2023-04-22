<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//news_cats_route
Route::get('/news/cats/create',[\App\Http\Controllers\admin\news_cats_controller::class,'create'])->name('news_cats.cats.create');
Route::post('/news/cats/create',[\App\Http\Controllers\admin\news_cats_controller::class,'store'])->name('news_cats.cats.store');
Route::get('/news/cats',[\App\Http\Controllers\admin\news_cats_controller::class,'index'])->name('news_cats.cats.index');
