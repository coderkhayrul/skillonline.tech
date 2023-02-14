<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand_name' => $name = fake()->company,
            'brand_url' => Str::slug($name, '-'),
            'brand_slug' => uniqid(),
            'brand_image' => fake()->imageUrl(220, 120, 'Brand', true),
        ];
    }
}
