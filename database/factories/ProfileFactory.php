<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'website_url' => $this->faker->url,
            'github_url' => $this->faker->url,
            'twitter_url' => $this->faker->url,
            'linkedin_url' => $this->faker->url,
        ];
    }
}
