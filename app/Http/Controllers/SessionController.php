<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index(){
        return view('session.login');
    }

    public function destroy(){
        Auth::logout();

        return redirect('/')->with('loggedout', 'See you soon!');
    }
}
