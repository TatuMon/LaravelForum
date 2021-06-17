<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function search(Community $community){
        return view('community', [
            'name' => $community->name,
            'posts' => $community->posts->filter(function($post){
                if(request('search')){
                    if(str_contains(strtolower($post->title), strtolower(request('search')))){
                        return true;
                    } elseif(str_contains(strtolower($post->body), strtolower(request('search')))) {
                        return true;
                    }  else {
                        return false;
                    }
                } else {
                    return true;
                }
            })->load(['community', 'user']),
            'comms' => Community::select('name', 'slug')->get()
        ]);
    }
}
