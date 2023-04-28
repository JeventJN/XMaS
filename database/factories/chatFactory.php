<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\chat>
 */
class chatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kdMember' => mt_rand(1,20),
            'Date' => fake()->date(),
            'Time' => fake()->time(),
            'Message' => fake()->sentence(mt_rand(1,5)),
            'Photo' => 'https://source.unsplash.com/500x500?random=true'
        ];
    }
}
