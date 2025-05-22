<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController
{
    function login(){
        return view("login");
    }

    function do_login(){

    }

    function register(){
        return view("register");
    }

    function do_register(Request $request){
        $validator = Validator::make(
        $request->all(),
        [
            'name'=>'required',
            'email'=> 'required|email|unique:users',
            'passwords' => 'required|min:8'

        ]
        );

        if ($validator-> fails()){
            return redirect("register")
            ->withErrors($validator)
            ->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = 'user';
        $user->save();

        return redirect('login');
    }
}
