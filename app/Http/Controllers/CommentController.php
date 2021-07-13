<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class CommentController extends Controller
{
    public function store(Post $post){
        request()->validate([
            'content' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'content' => request('content')
        ]);

        return back();
    }
}
