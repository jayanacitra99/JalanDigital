<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->words(3, true); // e.g. "Cloud Server Setup"
        return [
            'title' => ucwords($title),
            'slug' => Str::slug($title),
            'icon' => 'fa-solid fa-' . $this->faker->randomElement(['code', 'laptop', 'server', 'mobile', 'paintbrush']),
            'short_description' => $this->faker->sentence(10),
            'content' => $this->faker->paragraphs(3, true),
            'is_active' => $this->faker->boolean(90), // 90% chance of being active
        ];
    }
}
