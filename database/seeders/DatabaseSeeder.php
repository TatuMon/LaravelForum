<?php

namespace Database\Seeders;

use App\Models\Community;
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
    }
}
