<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;


class AuthController extends Controller
{

    public function login(){
        return View ('login');
    }


    public function loginproses(){
        if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('admin')->with('primary', 'Anda Berhasil Log In');
        }

        return redirect('login');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }

     function test(){
		$user= new User;
		$user->nama= 'Admin';
		$user->username= 'admin';
		$user->password=bcrypt('admin');
		$user->save();

		return "Berhasil";


	}
   
}