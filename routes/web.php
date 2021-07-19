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


Route::get('/', [PostController::class, 'search'])->name('home');

Route::get('/post/{post:slug}', [PostController::class, 'found'])->name('post');
Route::get('/comm/{community:slug}', [CommunityController::class, 'search'])->name('comm');

Route::get('/newsletter', NewsletterController::class);

Route::get('/usr/{user:username}', [UserController::class, 'found'])->name('usr');
Route::get('/change-pic', [UserController::class, 'changer']);
Route::post('/changePic', [UserController::class, 'changePic']);
Route::post('/ban', [UserController::class, 'ban']);
Route::post('/unban', [UserController::class, 'unban']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'submitData'])->middleware('guest');

Route::get('/login', [SessionController::class, 'index'])->middleware('guest');
Route::post('/login', [SessionController::class, 'login'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::post('post/{post:slug}/comment', [CommentController::class, 'store']);