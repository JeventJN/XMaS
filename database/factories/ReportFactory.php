<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kdSchedule' => mt_rand(1,20),
            'kdState' => mt_rand(3,5),
            'Title' => fake()->sentence(mt_rand(1,5)),
            'Explanation' => collect(fake()->paragraphs(mt_rand(2,8)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'Photo' => 'https://source.unsplash.com/500x500?group'
        ];
    }
}
