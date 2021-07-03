<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(){
        return view('register.register');
    }

    public function submitData(){
        $user = User::create(request()->validate([
            'username' => 'required|unique:users,username|max:20|min:3|regex:/^[A-Za-z]-*[\w]/',
            'email' => 'required|unique:users,email|email:rfc,dns',
            'password' => 'required|min:7|confirmed',
            'password_confirmation' => 'required'
        ]));
 
        Auth::login($user);
        return redirect('/')->with('success', 'Bienvenido a las tierras brancanienses!');
    }
}