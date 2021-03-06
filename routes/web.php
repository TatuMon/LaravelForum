<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Services\newsletter;
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


Route::get('/', [PostController::class, 'main'])->name('home');

Route::get('/post/{post:slug}', [PostController::class, 'found'])->name('post');
Route::get('/create-post', [PostController::class, 'creator'])->middleware('auth');
Route::get('/post/{post:slug}/editor', [PostController::class, 'editor'])->middleware('auth');
Route::post('/post/{post:slug}/edit', [PostController::class, 'edit'])->middleware('auth');
Route::post('/create', [PostController::class, 'create'])->middleware('auth');
Route::post('/delete', [PostController::class, 'delete'])->middleware('auth');

Route::get('/comm/{community:slug}', [CommunityController::class, 'search'])->name('comm');

Route::get('/usr/{user:username}', [UserController::class, 'found'])->name('usr');
Route::get('/change-pic', [UserController::class, 'changer']);
Route::post('/changePic', [UserController::class, 'changePic']);
Route::post('/giveRol', [UserController::class, 'giveRol'])->middleware('admin');
Route::post('/ban', [UserController::class, 'ban'])->middleware('admin');
Route::post('/unban', [UserController::class, 'unban'])->middleware('admin');

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'submitData'])->middleware('guest');

Route::get('/login', [SessionController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [SessionController::class, 'login'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::post('post/{post:slug}/comment', [CommentController::class, 'store'])->middleware('auth');
Route::post('/comment/delete', [CommentController::class, 'delete']);