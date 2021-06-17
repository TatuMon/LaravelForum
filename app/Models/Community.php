<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        $query->when($filters['search_posts'] ?? false, fn() => $query->posts->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('body', 'like', '%' . request('search') . '%'));
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
