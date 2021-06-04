<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Post;
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
        // \App\Models\User::factory(10)->create();
        Community::truncate();

        Community::create([
            'name' => 'Metro',
            'slug' => 'metro',
            'description' => 'We love the Metro saga'
        ]);

        Community::create([
            'name' => 'Dishonored',
            'slug' => 'dishonored',
            'description' => 'We love the Dishonored saga'
        ]);

        Community::create([
            'name' => 'Dark Souls',
            'slug' => 'dark-souls',
            'description' => 'We love to get beaten again and again'
        ]);

        Post::create([
            'title' => 'Should u play any Metro game?',
            'slug' => 'should-u-play-any-metro-game',
            'community_id' => 1,
            'excerpt' => 'Yes.',
            'body' => 'Yes.'
        ]);

        Post::create([
            'title' => 'Should u play any Dishonored game?',
            'slug' => 'should-u-play-any-dishonored-game',
            'community_id' => 2,
            'excerpt' => 'Yes.',
            'body' => 'Yes.'
        ]);

        Post::create([
            'title' => 'Should u play any Dark Souls game?',
            'slug' => 'should-u-play-any-dark-souls-game',
            'community_id' => 3,
            'excerpt' => 'If u want to suffer, yes.',
            'body' => 'If u want to suffer, yes.'
        ]);
    }
}
