<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use \App\Models\Comment;
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

    public function delete(){
        $comment = Comment::where('id', request()->input('comment'))->where('user_id', request()->user()->id);

        if($comment->delete()){
            echo json_encode(['deleted' => 1, 'message' => 'Post deleted']);
        } else {
            echo json_encode(['deleted' => 0, 'message' => 'An error occurred: self-destruct in 10 seconds']);
        }
    }
}
