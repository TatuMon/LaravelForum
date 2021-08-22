<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use App\Http\Helpers\FormatStr;

class CommentController extends Controller
{
    public function store(Post $post){
        $data = request()->validate([
            'content' => 'required'
        ]);

        $data['content'] = FormatStr::keepEnters($data['content']);

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'content' => $data['content']
        ]);

        return back();
    }
}
