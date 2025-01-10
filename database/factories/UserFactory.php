<?php

namespace Database\Factories;

use App\Models\Affiliation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => fake()->password(),
            'remember_token' => Str::random(10),
            'experience_points' => fake()->numberBetween(0, 1000),
            'affiliation_id' => fake()->numberBetween(1, 5),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function user(): static
    {
        return $this->state(fn(array $attributes) => [
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'experience_points' => fake()->numberBetween(0, 1000),
            'affiliation_id' => fake()->numberBetween(1, 5),
        ]);
    }
}
