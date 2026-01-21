<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectImage>
 */
class ProjectImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // We don't need to define project_id here; the seeder will handle the relationship
            'image_path' => 'projects/detail-' . $this->faker->numberBetween(1, 10) . '.jpg',
        ];
    }
}
