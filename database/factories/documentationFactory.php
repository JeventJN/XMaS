<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\documentation>
 */
class documentationFactory extends Factory
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
            'Photo' => fake()->randomElement(['1.png', '2.png', '3.png'])
        ];
    }
}
