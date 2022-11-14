<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        $title=$this->faker->realText(40);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
