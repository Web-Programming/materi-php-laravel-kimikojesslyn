<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function login(){
        $user = Auth::user();

        //Jika user sudah login
        if($user){
            //Cek Level
            if($user->level == 'admin'){
                return redirect()->intended('admin');
            }else if($user->level == 'user'){
                return redirect()->intended('user');
            }
        }

        return view("laravel.login");
    }

    function do_login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        //Menyiapkan variabel cridentials
        $credentials = $request->only('email', 'password');

        //Mengecek cridentials ke tabel users meggunakan Auth
        if(Auth::attempt($credentials)){
            //Jika berhasil login
            //Cek level user
            $user = Auth::user();
            if($user->level == 'admin'){
                return redirect()->intended('admin');
            }else if($user->level == 'user'){
                return redirect()->intended('user');
            }
            return redirect()->intended('/');
        }

        //Login gagal
        return redirect('login')
            ->withErrors([
                'failed' => 'User tidak ditemukan atau password yang anda masukkan salah'
            ])
            ->withInput();
    }

    function register(){
        return view("laravel.register");
    }

    function do_register(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
                'level' => 'required|in:user,mahasiswa,dosen'
            ]
        );
        if($validator->fails()){
            return redirect("register")
            ->withErrors($validator)
            ->withInput();    
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;
        $user->save();

        return redirect('login');
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }

}