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
        Community::create([
            'name' => 'General',
            'slug' => 'general',
            'description' => 'Where all the communities gather togheter',
            'created_by' => 1
        ]);
    }
}
