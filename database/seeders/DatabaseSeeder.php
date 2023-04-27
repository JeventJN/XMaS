<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\chat;
use App\Models\documentation;
use App\Models\extracurricular;
use App\Models\member;
use App\Models\presence;
use App\Models\report;
use App\Models\schedule;
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

        // USER
        userXmas::create([
            'NIP'=>'0000',
            'name'=>'admin',
            'program'=>'DPP',
            'phoneNumber'=>'62812780191',
            'password'=> bcrypt('12.34'),
            'photo'=>'1.png'
        ]);

        // STATE
        $states = [
            ['currstate'=>'Member'],
            ['currstate'=>'Leader'],
            ['currstate'=>'Ongoing'],
            ['currstate'=>'Done'],
            ['currstate'=>'Deleted']
        ];

        foreach($states as $state){
            state::create($state);
        }

        // state::create([
        //     'currstate'=>'Member'
        // ]);

        // state::create([
        //     'currstate'=>'Leader'
        // ]);

        // state::create([
        //     'currstate'=>'Ongoing'
        // ]);

        // state::create([
        //     'currstate'=>'Done'
        // ]);

        // state::create([
        //     'currstate'=>'Deleted'
        // ]);

        
        // FACTORY
        userXmas::factory(10)->create();
        extracurricular::factory(5)->create();
        member::factory(20)->create();
        schedule::factory(20)->create();
        report::factory(20)->create();
        presence::factory(20)->create();
        documentation::factory(20)->create();
        chat::factory(20)->create();


        // extracurricular::create([
        //     'kdExtracurricular'=>1,
        //     'name'=>'Running',
        //     'logo'=>'1.png',
        //     'description'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam sapiente eligendi nostrum laboriosam ipsam adipisci nisi impedit ea accusamus explicabo culpa itaque alias pariatur quisquam illum, sint iusto rerum corporis quos excepturi.</p><p>Commodi officiis minima rerum aspernatur aperiam sed unde suscipit est sunt deleniti! Repellat temporibus, fuga excepturi voluptatibus atque voluptas natus et optio exercitationem odit officiis delectus quia quos autem iste ullam eaque libero repellendus ratione molestiae nam dolores.</p>',
        //     'category'=>'Phsyical'
        // ]);

        // member::create([
        //     'kdMember'=>1,
        //     'NIP'=>'0000',
        //     'kdExtracurricular'=>1,
        //     'kdState'=>1,
        //     'reason'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam sapiente eligendi nostrum laboriosam ipsam adipisci nisi impedit ea accusamus explicabo culpa itaque alias pariatur quisquam illum, sint iusto rerum corporis quos excepturi.</p><p>Commodi officiis minima rerum aspernatur aperiam sed unde suscipit est sunt deleniti! Repellat temporibus, fuga excepturi voluptatibus atque voluptas natus et optio exercitationem odit officiis delectus quia quos autem iste ullam eaque libero repellendus ratione molestiae nam dolores.</p>'
        // ]);

        // chat::create([
        //     'kdChat'=>1,
        //     'kdMember'=>1,
        //     'date'=>now()->toDateString(),
        //     'time'=>now()->toTimeString(),
        //     // 'date'=>'2022-03-03',
        //     // 'time'=>'12:59',
        //     'message'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam sapiente eligendi nostrum laboriosam ipsam adipisci nisi impedit ea accusamus explicabo culpa itaque alias pariatur quisquam illum, sint iusto rerum corporis quos excepturi.</p><p>Commodi officiis minima rerum aspernatur aperiam sed unde suscipit est sunt deleniti! Repellat temporibus, fuga excepturi voluptatibus atque voluptas natus et optio exercitationem odit officiis delectus quia quos autem iste ullam eaque libero repellendus ratione molestiae nam dolores.</p>',
        //     'photo'=>'1.png'
        // ]);
    }
}
