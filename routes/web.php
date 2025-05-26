<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function(){
    return view('product');
});

Route::get('/about-us', function(){
    return view("about-us");
});

Route::get('/user/profile', function(){
    return view('user-profile');
});