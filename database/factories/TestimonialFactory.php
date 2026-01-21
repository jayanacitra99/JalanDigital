<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_name' => $this->faker->name(),
            'client_position' => $this->faker->jobTitle(),
            'client_photo' => null, // keeping it null for simplicity
            'message' => $this->faker->paragraph(),
            'rating' => $this->faker->numberBetween(4, 5), // Mostly good ratings
            'is_featured' => $this->faker->boolean(20), // 20% chance to be on homepage
        ];
    }
}
