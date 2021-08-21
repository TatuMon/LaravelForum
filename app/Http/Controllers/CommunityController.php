<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Post;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function search(Community $community){
        return view('community', [
            'name' => $community->name,
            'actualComm' => $community,
            'posts' => Post::whereHas('community', fn($query) => $query->where('name', '=', $community->name))->with('community')->filter(request(['search']))->get(),
            'comms' => Community::select('name', 'slug')->get()
        ]);
    }
}
