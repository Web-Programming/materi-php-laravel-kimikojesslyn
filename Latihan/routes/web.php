<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\MateriController;
//use App\Http\Controllers\ProdiController;


use App\Http\Controllers\TugasLaravelController\MateriController;
use App\Http\Controllers\TugasLaravelController\MahasiswaController;
use App\Http\Controllers\TugasLaravelController\ProdiController;
use App\Http\Controllers\TugasLaravelController\DosenController;
use App\Http\Controllers\TugasLaravelController\FakultasController;


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


//Route::get('/materi/index', [MateriController::class,'index']);
//Route::get('/materi/detail/{id}', [MateriController::class,'detail']);

//Route::resource('prodi', ProdiController::class);
//Route::apiResource('api/mhs', MhsApiController::class);


// (Tugas no.2) ------------------ 
Route::resource('materi', MateriController::class);
Route::resource('prodi', ProdiController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('mhs', MahasiswaController::class);
Route::resource('dosen', DosenController::class);

Route::get('/master', function(){
    return view('TugasLaravel.master');
});

Route::get('/master', function(){
    return view('TugasLaravel.masterisi');
});


