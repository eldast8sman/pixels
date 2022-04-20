<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $title = $this->faker->sentence(),
            'slug' => Str::slug($title),
            'file' => $this->faker->ImageUrl($width = 1920, $height = 1200),
            'dimension' => $width.'x'.$height,
            'views_count' => $this->faker->randomNumber(5),
            'downloads_count' => $this->faker->randomNumber(5),
            'is_published' => true,
            'user_id' => User::factory()
        ];
    }
}
