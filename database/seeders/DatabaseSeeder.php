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
        // userXmas::factory(10)->create();
        // extracurricular::factory(5)->create();
        // member::factory(20)->create();
        // schedule::factory(40)->create();
        userXmas::create([
            'NIP'=>'0001',
            'name'=>'Jefferson Johan',
            'program'=>'PPTI',
            'phoneNumber'=>'6281369668941',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0002',
            'name'=>'Jevent Natthannael',
            'program'=>'PPTI',
            'phoneNumber'=>'6282175932808',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0003',
            'name'=>'Michele Angela',
            'program'=>'PPTI',
            'phoneNumber'=>'6287720967940',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0004',
            'name'=>'Winita Teukeku Priyanto',
            'program'=>'PPTI',
            'phoneNumber'=>'628567100608',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0005',
            'name'=>'Zakaria Berlam Pragusma',
            'program'=>'PPTI',
            'phoneNumber'=>'6281357398150',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0006',
            'name'=>'Intan Paramitha',
            'program'=>'PPTI',
            'phoneNumber'=>'6287858885955',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0007',
            'name'=>'Vanessa Kwandinata',
            'program'=>'PPTI',
            'phoneNumber'=>'62895635863956',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0008',
            'name'=>'Frenrico Chang',
            'program'=>'PPTI',
            'phoneNumber'=>'6282215308090',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0009',
            'name'=>'Cecilia Audrey Herli',
            'program'=>'PPTI',
            'phoneNumber'=>'6281319363809',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0010',
            'name'=>'Abdi Nurhuda',
            'program'=>'PPTI',
            'phoneNumber'=>'6287875286211',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0011',
            'name'=>'Amanda Ardianti',
            'program'=>'PPTI',
            'phoneNumber'=>'6281296491530',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0012',
            'name'=>'Alicia Josephine Ekosputri',
            'program'=>'PPTI',
            'phoneNumber'=>'628155212255',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0013',
            'name'=>'Ardo Damarjati',
            'program'=>'PPTI',
            'phoneNumber'=>'6283891690775',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0014',
            'name'=>'Brychan Artanto',
            'program'=>'PPTI',
            'phoneNumber'=>'6282157318364',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0015',
            'name'=>'Charlene Jovannie',
            'program'=>'PPTI',
            'phoneNumber'=>'6281295487364',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0016',
            'name'=>'Chrystalia Glenys Winata Ang',
            'program'=>'PPTI',
            'phoneNumber'=>'6282353257881',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0017',
            'name'=>'Daniel Zerge Wijaya',
            'program'=>'PPTI',
            'phoneNumber'=>'62811260377',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0018',
            'name'=>'Devin',
            'program'=>'PPTI',
            'phoneNumber'=>'6282158870631',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0019',
            'name'=>'Fanny Angelia Valentina',
            'program'=>'PPTI',
            'phoneNumber'=>'6281256726461',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0020',
            'name'=>'Hansen',
            'program'=>'PPTI',
            'phoneNumber'=>'6281388336135',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0021',
            'name'=>'Hasna Salsabilla Abdullah',
            'program'=>'PPTI',
            'phoneNumber'=>'62812780194',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);


        userXmas::create([
            'NIP'=>'0022',
            'name'=>'I Putu Denio Pranatha Ramananda',
            'program'=>'PPTI',
            'phoneNumber'=>'6281238320178',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0023',
            'name'=>'Jason Made Situmeang',
            'program'=>'PPTI',
            'phoneNumber'=>'6285847671769',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        userXmas::create([
            'NIP'=>'0024',
            'name'=>'Michael Baptista Gozal',
            'program'=>'PPTI',
            'phoneNumber'=>'6283818713523',
            'password'=> bcrypt('123456'),
            'photo'=>'1.png'
        ]);

        // Xtra
        extracurricular::create([
            'name'=>'Chess',
            'logo'=>'1.png',
            'backgroundImage' => '1.png',
            'description'=>'Xtra for smart people',
            'category'=>'Non-Phsyical'
        ]);

        extracurricular::create([
            'name'=>'Running',
            'logo'=>'RunningLogo.png',
            'backgroundImage' => '1.png',
            'description'=>'Merasa tidak berbakat? Join Xtra Running. Tidak butuh bakat hanya butuh kerja keras karena dari nenek moyang kitaa pun kita sudah selalu "Running". Running is not a gift, It is our self. God Create Human To Be a RUNNER',
            'category'=>'Phsyical'
        ]);

        extracurricular::create([
            'name'=>'Dance',
            'logo'=>'1.png',
            'backgroundImage' => '1.png',
            'description'=>'Xtra for flexible people',
            'category'=>'Phsyical'
        ]);

        extracurricular::create([
            'name'=>'Band',
            'logo'=>'1.png',
            'backgroundImage' => '1.png',
            'description'=>'Xtra for virtuoso people',
            'category'=>'Non-Phsyical'
        ]);

        extracurricular::create([
            'name'=>'Basketball',
            'logo'=>'1.png',
            'backgroundImage' => '1.png',
            'description'=>'Xtra for athletic and tall people',
            'category'=>'Phsyical'
        ]);

        extracurricular::create([
            'name'=>'Choir',
            'logo'=>'1.png',
            'backgroundImage' => '1.png',
            'description'=>"Xtra for God's angel with heavenly voice",
            'category'=>'Non-Phsyical'
        ]);


        // Ketua
        member::create([
            'NIP'=>'0001',
            'kdExtracurricular'=>1,
            'kdState'=>2,
            'reason'=>'Saya akan mengalahkan Magnus Carlsen'
        ]);

        member::create([
            'NIP'=>'0002',
            'kdExtracurricular'=>2,
            'kdState'=>2,
            'reason'=>'Saya akan mengalahkan diri saya sendiri'
        ]);

        member::create([
            'NIP'=>'0003',
            'kdExtracurricular'=>3,
            'kdState'=>2,
            'reason'=>'Saya akan membuat hal yang lebih berguna untuk bangsa dan negara'
        ]);

        member::create([
            'NIP'=>'0005',
            'kdExtracurricular'=>5,
            'kdState'=>2,
            'reason'=>'Membawa tim basket RTB ke NBA'
        ]);

        member::create([
            'NIP'=>'0006',
            'kdExtracurricular'=>6,
            'kdState'=>2,
            'reason'=>'Membawa anggota tim ke Indonesian Idol'
        ]);

        // Member Chess
        member::create([
            'NIP'=>'0019',
            'kdExtracurricular'=>1,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0009',
            'kdExtracurricular'=>1,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0015',
            'kdExtracurricular'=>1,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0013',
            'kdExtracurricular'=>1,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0012',
            'kdExtracurricular'=>1,
            'kdState'=>1,
            'reason'=>''
        ]);


        // Member Running
        member::create([
            'NIP'=>'0007',
            'kdExtracurricular'=>2,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0018',
            'kdExtracurricular'=>2,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0014',
            'kdExtracurricular'=>2,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0021',
            'kdExtracurricular'=>2,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0020    ',
            'kdExtracurricular'=>2,
            'kdState'=>1,
            'reason'=>''
        ]);


        // Member Dance
        member::create([
            'NIP'=>'0022',
            'kdExtracurricular'=>3,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0006',
            'kdExtracurricular'=>3,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0005',
            'kdExtracurricular'=>3,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0004',
            'kdExtracurricular'=>3,
            'kdState'=>1,
            'reason'=>''
        ]);

        // Member Band
        member::create([
            'NIP'=>'0004',
            'kdExtracurricular'=>4,
            'kdState'=>1,
            'reason'=>'Membawa dunia musik lebih bahagia'
        ]);

        member::create([
            'NIP'=>'0006',
            'kdExtracurricular'=>4,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0010',
            'kdExtracurricular'=>4,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0011',
            'kdExtracurricular'=>4,
            'kdState'=>1,
            'reason'=>''
        ]);


        // Member Basket
        member::create([
            'NIP'=>'0008',
            'kdExtracurricular'=>5,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0013',
            'kdExtracurricular'=>5,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0014',
            'kdExtracurricular'=>5,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0017',
            'kdExtracurricular'=>5,
            'kdState'=>1,
            'reason'=>''
        ]);


        // Member Choir
        member::create([
            'NIP'=>'0006',
            'kdExtracurricular'=>4,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0016',
            'kdExtracurricular'=>4,
            'kdState'=>1,
            'reason'=>''
        ]);

        member::create([
            'NIP'=>'0009',
            'kdExtracurricular'=>4,
            'kdState'=>1,
            'reason'=>''
        ]);


        // Chess
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
            'kdExtracurricular' => 1,
            'Date' => now()->addDays(2),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'A202',
            'Activity' => 'Main'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 1,
            'Date' => now()->addDays(9),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'A802',
            'Activity' => 'tanding'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 1,
            'Date' => now()->addDays(16),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'A222',
            'Activity' => 'Kuis Mingguan'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 1,
            'Date' => now()->addDays(23),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'RTB',
            'Activity' => 'Latihan Tanding'
        ]);


        // Running
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
            'kdExtracurricular' => 2,
            'Date' => now()->addDays(21),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Bucket List',
            'Activity' => 'Lomba'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 2,
            'Date' => now()->addDays(28),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'RTB',
            'Activity' => 'Pemanasan ABC'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 2,
            'Date' => now()->addDays(35),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Telaga Kuring',
            'Activity' => 'Tes Daya Tahan'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 2,
            'Date' => now()->addDays(42),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Venesia',
            'Activity' => 'Latihan Estafet'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 2,
            'Date' => now()->addDays(49),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'BLI',
            'Activity' => 'Lari'
        ]);


        // Dance
        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 3,
            'Date' => now()->addDays(16),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Lapangan',
            'Activity' => 'Lomba'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 3,
            'Date' => now()->addDays(23),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'A1009',
            'Activity' => 'Latihan'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 3,
            'Date' => now()->addDays(30),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Bucket List',
            'Activity' => 'Tampil'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 3,
            'Date' => now()->addDays(37),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Bridge BCA',
            'Activity' => 'Senam'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 3,
            'Date' => now()->addDays(44),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Auditorium',
            'Activity' => 'Lomba'
        ]);

        // Band
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
            'kdExtracurricular' => 4,
            'Date' => now()->addDays(25),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'A809',
            'Activity' => 'Latihan'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 4,
            'Date' => now()->addDays(32),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'A201',
            'Activity' => 'Latihan lagu Numb'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 4,
            'Date' => now()->addDays(39),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'A201',
            'Activity' => 'Latihan lagu Hosena'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 4,
            'Date' => now()->addDays(46),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'A201',
            'Activity' => 'Latihan Hallelujah'
        ]);

        // Basket
        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 5,
            'Date' => now()->addDays(12),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Lapangan BLI',
            'Activity' => 'Latihan lomba'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 5,
            'Date' => now()->addDays(19),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Lapangan Aston',
            'Activity' => 'Main'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 5,
            'Date' => now()->addDays(26),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Bucket List',
            'Activity' => 'Lomba'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 5,
            'Date' => now()->addDays(33),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Lapangan BLI',
            'Activity' => 'Main'
        ]);

        $startTime = Carbon::now()->addHours(rand(1, 12));
        $endTime = $startTime->copy()->addHours(rand(1,4));
        schedule::create([
            'kdExtracurricular' => 5,
            'Date' => now()->addDays(40),
            'TimeStart' => $startTime->format('H:i:s'),
            'TimeEnd' => $endTime->format('H:i:s'),
            'Location' => 'Lapangan Venesia',
            'Activity' => 'Latihan Basket'
        ]);

        // Chess
        documentation::create([
            'kdExtracurricular' => 1,
            'photo' => '',
        ]);

        documentation::create([
            'kdExtracurricular' => 1,
            'photo' => '',
        ]);

        documentation::create([
            'kdExtracurricular' => 1,
            'photo' => '',
        ]);

        // Running
        documentation::create([
            'kdExtracurricular' => 2,
            'photo' => '',
        ]);

        documentation::create([
            'kdExtracurricular' => 2,
            'photo' => '',
        ]);

        documentation::create([
            'kdExtracurricular' => 2,
            'photo' => '',
        ]);

        // Dance
        documentation::create([
            'kdExtracurricular' => 3,
            'photo' => '',
        ]);

        documentation::create([
            'kdExtracurricular' => 3,
            'photo' => '',
        ]);

        documentation::create([
            'kdExtracurricular' => 3,
            'photo' => '',
        ]);

        // Band
        documentation::create([
            'kdExtracurricular' => 4,
            'photo' => '',
        ]);

        documentation::create([
            'kdExtracurricular' => 4,
            'photo' => '',
        ]);

        documentation::create([
            'kdExtracurricular' => 4,
            'photo' => '',
        ]);

        // Basketball
        documentation::create([
            'kdExtracurricular' => 5,
            'photo' => '',
        ]);

        documentation::create([
            'kdExtracurricular' => 5,
            'photo' => '',
        ]);

        documentation::create([
            'kdExtracurricular' => 5,
            'photo' => '',
        ]);

        // for ($i = 0; $i < 10; $i++) {
        //     $sched = mt_rand(1,26);
        //     $xtra = schedule::find($sched)->pluck('kdExtracurricular')->first();
        //     $member = member::where('kdExtracurricular', $xtra)->inRandomOrder()->value('kdMember');

        //     presence::create([
        //         'kdSchedule' => $sched,
        //         'kdMember' => $member
        //     ]);
        // }

        // FACTORY
        // report::factory(20)->create();
        presence::factory(100)->create();
        // documentation::factory(20)->create();
        // chat::factory(20)->create();
    }
}
