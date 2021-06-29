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
            'username' => 'required|max:20|min:3|regex:/^[A-Za-z]-*[\w]/',
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ]));
 
        return redirect('/');
    }
}
