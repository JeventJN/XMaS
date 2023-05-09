<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\userXmas>
 */
class userXmasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'nip' => fake()->unique()->randomNumber(4, true),
            'name' => fake()->name(),
            'program' => fake()->randomElement(['PPTI', 'PPBP']),
            'phoneNumber' => str_replace('+', '62', fake()->unique()->e164PhoneNumber()),
            'password' => bcrypt('123456'),
            'photo' => 'https://source.unsplash.com/500x500?human'
        ];
    }
}
