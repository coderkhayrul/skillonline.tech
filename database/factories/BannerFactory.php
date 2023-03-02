<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'banner_title' => $name =fake()->sentence(4),
            'banner_url' => Str::slug($name, '-'),
            'banner_slug' => uniqid(),
            'banner_image' => fake()->imageUrl(220, 120, 'Banner', true),
        ];
    }
}
