<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                'Software Development', 'Data Science', 'Cybersecurity', 'Product Management',
                'Finance', 'Marketing', 'Healthcare', 'Sales', 'Graphic Design', 'Content Writing',
                'Customer Support', 'HR & Recruiting', 'UI/UX Design', 'Engineering', 'Education',
                'Legal', 'Operations', 'Consulting', 'Project Management', 'Business Development'
            ]),
        ];
    }
}
