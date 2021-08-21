<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeFilter($query, array $filters){
        
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
