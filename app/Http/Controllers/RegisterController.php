<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('register.register');
    }

    public function submitData(){
        User::create(request()->validate([
            'username' => 'required|unique:users,username|max:20|min:3|regex:/^[A-Za-z]-*[\w]/',
            'email' => 'required|unique:users,email|email:rfc,dns',
            'password' => 'required|min:7'
        ]));
 
        return redirect('/');
    }
}
