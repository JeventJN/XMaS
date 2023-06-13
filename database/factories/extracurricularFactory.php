<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\extracurricular>
 */
class extracurricularFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->unique()->randomElement(['Running', 'Badminton', 'Chess', 'Volly', 'Soccer']),
            // 'logo' => 'https://source.unsplash.com/500x500?extracurricular',
            'logo' => 'RunningLogo.png',
            'backgroundImage' => 'image_jumbo.png',
            'Description' => collect(fake()->paragraphs(mt_rand(1,3)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'category' => fake()->randomElement(['Physique', 'Non-Physique'])
        ];
    }
}
