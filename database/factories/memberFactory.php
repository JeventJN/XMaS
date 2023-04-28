<?php

namespace Database\Factories;

use App\Models\userXmas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\member>
 */
class memberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nip' =>  userXmas::pluck('nip')->random(),
            'kdExtracurricular' =>  mt_rand(1,5),
            'kdState' => mt_rand(1,2),
            'Reason' => collect(fake()->paragraphs(mt_rand(0,2)))->map(fn($p) => "<p>$p</p>")->implode('')
        ];
    }
}
