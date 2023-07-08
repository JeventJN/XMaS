<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\member;
use App\Models\schedule;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\presence>
 */
class presenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $sched = mt_rand(1,26);
        $xtra = schedule::find($sched)->pluck('kdExtracurricular')->first();
        $member = member::where('kdExtracurricular', $xtra)->inRandomOrder()->value('kdMember');

        return [
            'kdSchedule' => $sched,
            'kdMember' => $member,
        ];
        // return [
        //     'kdSchedule' => mt_rand(1,26),
        //     'kdMember' => mt_rand(1,30),
        // ];
    }
}
