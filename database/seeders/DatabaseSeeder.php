<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\chat;
use App\Models\extracurricular;
use App\Models\member;
use App\Models\state;
use App\Models\userXmas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        userXmas::create([
            'NIP'=>'0000',
            'name'=>'admin',
            'program'=>'PPTI',
            'phoneNumber'=>"08192292991",
            'password'=> bcrypt('12,34'),
            'photo'=>'1.png'
        ]);

        state::create([
            'kdState'=>1,
            'currstate'=>'Member'
        ]);

        extracurricular::create([
            'kdExtracurricular'=>1,
            'name'=>'Running',
            'logo'=>'1.png',
            'description'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam sapiente eligendi nostrum laboriosam ipsam adipisci nisi impedit ea accusamus explicabo culpa itaque alias pariatur quisquam illum, sint iusto rerum corporis quos excepturi.</p><p>Commodi officiis minima rerum aspernatur aperiam sed unde suscipit est sunt deleniti! Repellat temporibus, fuga excepturi voluptatibus atque voluptas natus et optio exercitationem odit officiis delectus quia quos autem iste ullam eaque libero repellendus ratione molestiae nam dolores.</p>',
            'category'=>'Phsyical'
        ]);

        member::create([
            'kdMember'=>1,
            'NIP'=>'0000',
            'kdExtracurricular'=>1,
            'kdState'=>1,
            'reason'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam sapiente eligendi nostrum laboriosam ipsam adipisci nisi impedit ea accusamus explicabo culpa itaque alias pariatur quisquam illum, sint iusto rerum corporis quos excepturi.</p><p>Commodi officiis minima rerum aspernatur aperiam sed unde suscipit est sunt deleniti! Repellat temporibus, fuga excepturi voluptatibus atque voluptas natus et optio exercitationem odit officiis delectus quia quos autem iste ullam eaque libero repellendus ratione molestiae nam dolores.</p>'
        ]);

        chat::create([
            'kdChat'=>1,
            'kdMember'=>1,
            'date'=>now()->toDateString(),
            'time'=>now()->toTimeString(),
            // 'date'=>'2022-03-03',
            // 'time'=>'12:59',
            'message'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam sapiente eligendi nostrum laboriosam ipsam adipisci nisi impedit ea accusamus explicabo culpa itaque alias pariatur quisquam illum, sint iusto rerum corporis quos excepturi.</p><p>Commodi officiis minima rerum aspernatur aperiam sed unde suscipit est sunt deleniti! Repellat temporibus, fuga excepturi voluptatibus atque voluptas natus et optio exercitationem odit officiis delectus quia quos autem iste ullam eaque libero repellendus ratione molestiae nam dolores.</p>',
            'photo'=>'1.png'
        ]);
    }
}
