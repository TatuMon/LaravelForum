<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use \App\Models\Post;
use \App\Models\User;

class UserController extends Controller
{
    public function found(User $user){
        return view('user', [
            'user' => $user,
            'posts' => $user->posts,
            'comms' => Community::select('name', 'slug')->get()
        ]);
    }
}
