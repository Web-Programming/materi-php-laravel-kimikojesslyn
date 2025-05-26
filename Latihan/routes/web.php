<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\MateriController;
//use App\Http\Controllers\ProdiController;


use App\Http\Controllers\Controller\MateriController;
use App\Http\Controllers\Controller\MahasiswaController;
use App\Http\Controllers\Controller\ProdiController;
use App\Http\Controllers\Controller\DosenController;
use App\Http\Controllers\Controller\FakultasController;


use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller\UserController;
use App\Http\Middleware\CekLogin;


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
    return view('laravel.master');
});

Route::get('/master', function(){
    return view('laravel.masterisi');
});

//Authentication
Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::post("/login", [AuthController::class, 'do_login']);
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'do_register']);
Route::get("/logout", [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => [CekLogin::class.':admin']], function(){
        Route::get("/admin", [AdminController::class, 'index']);
        Route::resource('prodi', ProdiController::class);
        Route::resource('fakultas', FakultasController::class);
    });

    Route::group(['middleware' => [CekLogin::class.':user']], function(){
        Route::get("/user", [UserController::class, 'index']);
    });

  /* Route::group(['middleware' => ['level:mahasiswa']], function () {
        Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
        Route::get('/materi', [MahasiswaController::class, 'materi']);
    });
    Route::group(['middleware' => ['level:dosen']], function () {
        Route::get('/dosen', [DosenController::class, 'index']);
        Route::get('/materi', [DosenController::class, 'materi']);
    }); */
});

