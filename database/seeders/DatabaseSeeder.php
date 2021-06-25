<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Community;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Post::factory(3)->create();
        Community::factory(3)->create();
        Comment::factory(3)->create();
    }
}
