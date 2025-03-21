<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(20)->create();

        Job::factory(30)
            ->create()
            ->each(function ($job) use ($tags) {
                // Assign each job 2 to 4 random tags
                $randomTags = $tags->random(rand(2, 4));
                $job->tags()->attach($randomTags);

                // Update schedule and featured field
                $job->update([
                    'featured' => fake()->boolean(),
                    'schedule' => fake()->randomElement([
                        'Full-time', 'Part-time', 'Contract', 'Freelance', 'Internship'
                    ]),
                ]);
            });
    }
}
