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


//news_route
Route::get('/news/cats/create',[\App\Http\Controllers\admin\news_cats_controller::class,'create'])->name('news.cats.create');
Route::post('/news/cats/create',[\App\Http\Controllers\admin\news_cats_controller::class,'store'])->name('news.cats.store');
