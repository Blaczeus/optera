<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => '$' . number_format(fake()->numberBetween(20000, 120000)) . ' USD',
            'location' => fake()->randomElement(['Remote', 'Hybrid', 'On-site']),
            'schedule' => fake()->randomElement(['Full-time', 'Part-time', 'Contract', 'Freelance', 'Internship']),
            'url' => fake()->url(),
            'featured' => fake()->boolean(),
        ];
    }
}
