<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsCategory>
 */
class NewsCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ncat_name' => $name = fake()->sentence(2),
            'ncat_url' => Str::slug($name, '-'),
            'ncat_slug' => uniqid(),
            'ncat_thumbnail' => fake()->imageUrl(220, 120, 'NewsCategory', true),
        ];
    }
}
