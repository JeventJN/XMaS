<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\schedule>
 */
class scheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kdExtracurricular' => mt_rand(1,5),
            'Date' => fake()->date(),
            'TimeStart' => fake()->time(),
            'TimeEnd' => fake()->time(),
            'Location' => fake()->randomElement(['Dorm', 'BLI', 'lapangan']),
            'Explanation' => collect(fake()->paragraphs(mt_rand(2,8)))->map(fn($p) => "<p>$p</p>")->implode('')
        ];
    }
}
