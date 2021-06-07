<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Community;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            "slug" => $this->faker->slug,
            "title" => $this->faker->sentence,
            "user_id" => rand(1, 3),
            "community_id" => Community::factory(),
            "excerpt" => $this->faker->sentence,
            "body" => $this->faker->text,
            "published_at" => now()
        ];
    }
}
