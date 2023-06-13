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
use Illuminate\Support\Carbon;

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
            'password'=> bcrypt('12.345'),
            'photo'=>'userDP.png'
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
        schedule::factory(40)->create();

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 1,
            'Date' => now()->addDays(10),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Dorm',
            'Activity' => 'Latihan'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 2,
            'Date' => now()->addDays(14),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'BLI',
            'Activity' => 'Main'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 3,
            'Date' => now()->addDays(16),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'lapangan',
            'Activity' => 'Lomba'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 4,
            'Date' => now()->addDays(18),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Dorm',
            'Activity' => 'Persiapan lomba'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 5,
            'Date' => now()->addDays(14),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'BLI',
            'Activity' => 'Main biasa'
        ]);

        // FACTORY
        report::factory(20)->create();
        presence::factory(150)->create();
        documentation::factory(20)->create();
        chat::factory(20)->create();


        // LEADER for MEMBER
        userXmas::create([
            'NIP'=>'0001',
            'name'=>'Kwandi',
            'program'=>'PPTI',
            'phoneNumber'=>'62812780192',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0002',
            'name'=>'Jepeng',
            'program'=>'PPTI',
            'phoneNumber'=>'62812780193',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0003',
            'name'=>'Rico',
            'program'=>'PPTI',
            'phoneNumber'=>'62812780194',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0004',
            'name'=>'Cecil',
            'program'=>'PPTI',
            'phoneNumber'=>'62812780195',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0005',
            'name'=>'Budi',
            'program'=>'PPTI',
            'phoneNumber'=>'6281278019',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        member::create([
            'NIP'=>'0001',
            'kdExtracurricular'=>1,
            'kdState'=>2,
            'reason'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam sapiente eligendi nostrum laboriosam ipsam adipisci nisi impedit ea accusamus explicabo culpa itaque alias pariatur quisquam illum, sint iusto rerum corporis quos excepturi.</p><p>Commodi officiis minima rerum aspernatur aperiam sed unde suscipit est sunt deleniti! Repellat temporibus, fuga excepturi voluptatibus atque voluptas natus et optio exercitationem odit officiis delectus quia quos autem iste ullam eaque libero repellendus ratione molestiae nam dolores.</p>'
        ]);

        member::create([
            'NIP'=>'0002',
            'kdExtracurricular'=>2,
            'kdState'=>2,
            'reason'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam sapiente eligendi nostrum laboriosam ipsam adipisci nisi impedit ea accusamus explicabo culpa itaque alias pariatur quisquam illum, sint iusto rerum corporis quos excepturi.</p><p>Commodi officiis minima rerum aspernatur aperiam sed unde suscipit est sunt deleniti! Repellat temporibus, fuga excepturi voluptatibus atque voluptas natus et optio exercitationem odit officiis delectus quia quos autem iste ullam eaque libero repellendus ratione molestiae nam dolores.</p>'
        ]);

        member::create([
            'NIP'=>'0003',
            'kdExtracurricular'=>3,
            'kdState'=>2,
            'reason'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam sapiente eligendi nostrum laboriosam ipsam adipisci nisi impedit ea accusamus explicabo culpa itaque alias pariatur quisquam illum, sint iusto rerum corporis quos excepturi.</p><p>Commodi officiis minima rerum aspernatur aperiam sed unde suscipit est sunt deleniti! Repellat temporibus, fuga excepturi voluptatibus atque voluptas natus et optio exercitationem odit officiis delectus quia quos autem iste ullam eaque libero repellendus ratione molestiae nam dolores.</p>'
        ]);

        member::create([
            'NIP'=>'0004',
            'kdExtracurricular'=>4,
            'kdState'=>2,
            'reason'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam sapiente eligendi nostrum laboriosam ipsam adipisci nisi impedit ea accusamus explicabo culpa itaque alias pariatur quisquam illum, sint iusto rerum corporis quos excepturi.</p><p>Commodi officiis minima rerum aspernatur aperiam sed unde suscipit est sunt deleniti! Repellat temporibus, fuga excepturi voluptatibus atque voluptas natus et optio exercitationem odit officiis delectus quia quos autem iste ullam eaque libero repellendus ratione molestiae nam dolores.</p>'
        ]);

        member::create([
            'NIP'=>'0005',
            'kdExtracurricular'=>5,
            'kdState'=>2,
            'reason'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam sapiente eligendi nostrum laboriosam ipsam adipisci nisi impedit ea accusamus explicabo culpa itaque alias pariatur quisquam illum, sint iusto rerum corporis quos excepturi.</p><p>Commodi officiis minima rerum aspernatur aperiam sed unde suscipit est sunt deleniti! Repellat temporibus, fuga excepturi voluptatibus atque voluptas natus et optio exercitationem odit officiis delectus quia quos autem iste ullam eaque libero repellendus ratione molestiae nam dolores.</p>'
        ]);



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
