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
    return view('posts', [
        'posts' => Post::latest('published_at')->with('community', 'user')->get()
    ]);
});

Route::get('post/{post:slug}', function(Post $post){
    return view('post', [
        'post' => $post
    ]);
});

Route::get('comm/{community:slug}', function(Community $community){
    return view('community', [
        'name' => $community->name,
        'posts' => $community->posts->load(['community', 'user'])
    ]);
});

Route::get('usr/{user:slug}', function(User $user){
    return view('user', [
        'user' => $user,
    ]);
});