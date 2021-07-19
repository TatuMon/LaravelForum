<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use \App\Models\Post;
use \App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function found(User $user){
        return view('user', [
            'user' => $user,
            'posts' => $user->posts,
            'comms' => Community::select('name', 'slug')->get()
        ]);
    }

    public function changer(){
        return view('session.pic-changer');
    }

    public function changePic(){
        request()->validate([
            'image' => 'image|required'
        ]);

        if(!auth()->user()->pic == "default.png"){
            Storage::disk('public')->delete('/profile-pics/' . auth()->user()->pic);
        }

        $path = request()->file('image')->store('/profile-pics');
        User::where('id', auth()->user()->id)->update(['pic' => request()->file('image')->hashName()]);

        return redirect('/')->with('success', 'Profile picture successfuly updated');
    }
}
