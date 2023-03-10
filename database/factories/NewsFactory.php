<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ncat_id' => 1,
            'news_author_id' => 1,
            'news_title' => $title =fake()->sentence(3),
            'news_url' => Str::slug($title, '-'),
            'news_slug' => uniqid(),
            'news_thumbnail' => fake()->imageUrl(220, 120, 'News', true),
        ];
    }
}
