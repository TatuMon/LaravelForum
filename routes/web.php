<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Community;
use \App\Models\Post;
use \App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'search'])->name('home');

Route::get('post/{post:slug}', [PostController::class, 'found'])->name('post');

Route::get('comm/{community:slug}', [CommunityController::class, 'found'])->name('comm');

Route::get('usr/{user:slug}', [UserController::class, 'found'])->name('usr');