<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogCategory>
 */
class BlogCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bc_name' => $name = fake()->company,
            'bc_url' => $name,
            'bc_slug' => uniqid(),
            'bc_image' => fake()->imageUrl(220, 120, 'Category', true),
        ];
    }
}
