<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class,'index']);

Route::get('/about-us', AboutUsController::class){
    //return view("about-us");
};

Route::get('/user/profile', [UserController::class, 'getUserProfilePage']{
    //return view('user-profile');
};