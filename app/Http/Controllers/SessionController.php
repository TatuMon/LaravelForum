<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index(){
        return view('session.login');
    }

    public function login(){
        $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:7'
        ]);

        if(Auth::attempt($credentials)){
            return redirect('/')->with('success', 'Welcome back!');
        }

        throw ValidationException::withMessages([
            'password' => 'Wrong email or password'
        ]);
    }

    public function destroy(){
        Auth::logout();

        return redirect('/')->with('success', 'See you soon!');
    }
}
