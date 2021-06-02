<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Post;
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
    $allPostsData = Post::getAllPosts();

    return view('posts', [
        'posts' => $allPostsData
    ]);
});

Route::get('post/{post}', function($slug){
    $postData = Post::getPostData($slug);

    return view('post', [
        'post' => $postData
    ]);
});
