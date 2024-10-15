<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
    });
Route::resource('dashboard/post', PostController::class);
Route::resource('dashboard/category', CategoryController::class);


