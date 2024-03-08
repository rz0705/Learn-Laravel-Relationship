<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "image"=> "https://www.w3schools.com/html/pic_trulli.jpg",
            "title"=> $this->faker->sentence,
            "description"=> $this->faker->paragraph,
        ];
    }
}
