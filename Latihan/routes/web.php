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

Route::get('/fakultas', function () {
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer dan Rekayasa"]);
    // return view('fakultas.index', ["fakultas" => "Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]);
    // return view('fakultas.index')->with()"fakultas",["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]);

    $kampus = "Univeritas Multi Data Palembang";
    // $fakultas = [];
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];
    return view('fakultas.index', compact('fakultas','kampus'));
});