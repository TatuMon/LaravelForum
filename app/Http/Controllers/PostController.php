<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use \App\Models\Post;
use \App\Models\User;

class PostController extends Controller
{
    public function search(){
        return view('posts', [
            'posts' => Post::latest('published_at')->filter(request(['search']))->get(),
            'comms' => Community::select('name', 'slug')->get(),
            'usrs' => User::filter(request(['search']))->get()
        ]);
    }
}
