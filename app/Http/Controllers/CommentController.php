<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class CommentController extends Controller
{
    public function store(Post $post){
        $data = request()->validate([
            'content' => 'required'
        ]);

        $data['content'] = preg_replace('/\r/', '', $data['content']);
        $data['content'] =  preg_replace('/\n{3,}/', '\n\n', preg_replace('/^\s+$/m', '', $data['content']));
        $data['content'] = nl2br(htmlentities($data['content'], ENT_QUOTES));

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'content' => $data['content']
        ]);

        return back();
    }
}
