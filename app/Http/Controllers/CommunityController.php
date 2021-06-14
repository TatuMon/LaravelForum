<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function found(Community $community){
        return view('community', [
            'name' => $community->name,
            'posts' => $community->posts->load(['community', 'user']),
            'comms' => Community::select('name', 'slug')->get()
        ]);
    }
}
