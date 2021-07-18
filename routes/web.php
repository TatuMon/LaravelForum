<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CommentController;
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

Route::get('newsletter', function(){
    $client = new MailchimpMarketing\ApiClient();
    $client->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us6',
    ]);

    $response = $client->lists->addListMember('f61a87042a', [
        'email_address' => auth()->user()->email,
        'status' => 'subscribed'
    ]);
    
    return back()->with('success', "We'll keep you updated from now on");
});

Route::get('/', [PostController::class, 'search'])->name('home');

Route::get('post/{post:slug}', [PostController::class, 'found'])->name('post');

Route::get('comm/{community:slug}', [CommunityController::class, 'search'])->name('comm');

Route::get('usr/{user:username}', [UserController::class, 'found'])->name('usr');

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'submitData'])->middleware('guest');

Route::get('/login', [SessionController::class, 'index'])->middleware('guest');
Route::post('/login', [SessionController::class, 'login'])->middleware('guest');

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::post('post/{post:slug}/comment', [CommentController::class, 'store']);