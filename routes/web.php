<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello world";
});

Route::get('/valami', function () {
    return view("valami");
});

Route::get('/contact', function () {
    return view("contact");
});
