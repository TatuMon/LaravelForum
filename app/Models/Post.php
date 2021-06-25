<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, fn() => $query->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('body', 'like', '%' . request('search') . '%'));
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function community(){
        return $this->belongsTo(Community::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }


}
