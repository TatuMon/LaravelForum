<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Community;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        return [
            "slug" => Str::slug($title, '-'),
            "title" => $title,
            "user_id" => rand(1, 3),
            "community_id" => Community::factory(),
            "excerpt" => $this->faker->sentence,
            "body" => $this->faker->realText(),
            "published_at" => now()
        ];
    }
}
