<?php

use App\Models\Community;
use \App\Models\Post;
use \App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::latest('published_at')->with('community', 'user');

    if(request('search')){
        $posts->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('body', 'like', '%' . request('search') . '%');
    }

    return view('posts', [
        'posts' => $posts->get(),
        'comms' => Community::select('name', 'slug')->get()
    ]);
})->name('home');

Route::get('post/{post:slug}', function(Post $post){
    return view('post', [
        'post' => $post,
        'comms' => Community::select('name', 'slug')->get()
    ]);
})->name('post');

Route::get('comm/{community:slug}', function(Community $community){
    return view('community', [
        'name' => $community->name,
        'posts' => $community->posts->load(['community', 'user']),
        'comms' => Community::select('name', 'slug')->get()
    ]);
})->name('comm');

Route::get('usr/{user:slug}', function(User $user){
    return view('user', [
        'user' => $user,
        'posts' => $user->posts,
        'comms' => Community::select('name', 'slug')->get()
    ]);
})->name('usr');