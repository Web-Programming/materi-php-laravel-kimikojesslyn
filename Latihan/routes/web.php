<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProdiController;


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


Route::get('/materi/index', [MateriController::class,'index']);
Route::get('/materi/detail/{id}', [MateriController::class,'detail']);

Route::resource('prodi', ProdiController::class);
Route::apiResource('api/mhs', MhsApiController::class);


// (Tugas no.2) ------------------ 
Route::resource('materi', Materi::class);
Route::resource('prodi', Prodi::class);
Route::resource('fakultas', Fakultas::class);
Route::resource('mhs', Mahasiswa::class);
Route::resource('dosen', Dosen::class);

Route::get('/master', function(){
    $kampus = "Universitas Multi Data Palembang";
    $dosen = "Dosen";
    $fakultas = "Fakultas";
    $prodi = "Prodi";
    $mahasiswa = "Mahasiswa";
    $materi = "Materi";
    return view('latihanLayout.master', compact('kampus', 'dosen', 'fakultas', 'prodi', 'mahasiswa','materi'));
});


