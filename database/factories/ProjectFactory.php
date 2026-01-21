<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->company() . ' Website';
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'client_name' => $this->faker->company(),
            'website_url' => $this->faker->url(),
            'thumbnail_image' => 'projects/thumbnail-' . $this->faker->numberBetween(1, 5) . '.jpg',
            'description' => $this->faker->paragraphs(2, true),
            'completed_at' => $this->faker->dateTimeBetween('-2 years', 'now'),
        ];
    }
}
