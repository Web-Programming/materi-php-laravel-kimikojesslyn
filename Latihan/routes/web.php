<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/berita/{id}/{title?}', function ($id, $title = NULL) {
    return view('berita', ['id' => $id, 'title' => $title]);
});

Route::get('/total/{num1}/{num2}/{num3?}', function ($num1, $num2,  $num3 = 0) {
    return view('hasil', ['num1' => $num1, 'num2' => $num2, 'num3' => $num3]);
});