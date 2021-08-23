<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use \App\Models\Post;
use \App\Models\User;
use Illuminate\Support\Str;
use App\Http\Helpers\FormatStr;

class PostController extends Controller
{
    public function main(){
        return view('posts', [
            'posts' => Post::latest('published_at')->filter(request(['search']))->get()->sortDesc(),
            'usrs' => User::filter(request(['search']))->get()
        ]);
    }

    public function found(Post $post){
        return view('post', [
            'post' => $post,
            'comments' => $post->comments->sortByDesc('created_at')
        ]);
    }

    public function creator(){
        return view('post-creator');
    }

    public function create(){
        $data = request()->validate([
            'comm' => 'required|exists:communities,id',
            'title' => 'required|max:50|regex:/[\w\d\s]/|unique:posts',
            'body' => 'required'
        ]);

        Post::create([
            'slug' => Str::slug($data['title'], '-'),
            'title' => $data['title'],
            'user_id' => auth()->user()->id,
            'community_id' => $data['comm'],
            'excerpt' => substr($data['title'], 0, 150),
            'body' => $data['body']
        ]);

        session()->flash('success', 'Post successfuly created');
        return redirect('/post/' . Str::slug($data['title'], '-'));
    }

    public function editor(Post $post){
        return view('post-editor', [
            'post' => $post
        ]);
    }

    public function edit(Post $post){
        $data = request()->validate([
            'title' => 'required|max:50|regex:/[\w\d\s]/|unique:posts',
            'body' => 'required'
        ]);

        Post::where('slug', $post->slug)->update([
            'title' => $data['title'],
            'slug' => Str::slug($data['title'], '-'),
            'body' => $data['body']
        ]);

        session()->flash('success', 'Post successfuly edited');
        return redirect('/post/' . Str::slug($data['title'], '-'));
    }

    public function delete(){
        $data = request()->validate([
            'post' => 'exists:posts,id'
        ]);

        Post::findOrFail($data['post'])->delete();

        return redirect('/')->with('success', 'Post successfuly deleted');
    }
}
