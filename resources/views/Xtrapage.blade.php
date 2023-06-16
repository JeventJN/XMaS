<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> --}}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <!-- memanggil CSS di dalam folder CSS -->
    <link rel="stylesheet" href="{{ asset('css/Xtrapage.css') }}" />

    <!-- memanggil swiper JS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- memanggil font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- memanggil AOS  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <title></title>

    @vite('resources/css/app.css')
</head>

<body class="scrollbar-hide">
    <!-- navbar -->
    @guest
        @include('Non-User.navbarNU')
        @php
            $flag = -2;
        @endphp
    @endguest

    @auth
        @include('User.navbarUser')
        @if(!$userMember)
            @php
                // non-member
                $flag = -1;
            @endphp
        @else
            @if ($userMember->kdState == 2)
                @php
                    // ketua
                    $flag = 1;
                @endphp
            @else
                @php
                // member
                $flag = 0;
                @endphp
            @endif
        @endif
    @endauth
    {{-- @dd($userMember) --}}
    <!-- navbar -->

    {{-- popup --}}
    {{-- left --}}
    @if (session()->has('notif'))
        <div id="modalpopupLEFT" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
            <div class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                <div class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                    {{ session('notif') }}
                    <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalLEFT" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z" /></svg>
                </div>
            </div>
        </div>
        <script>
            var modal2 = document.getElementById('modalpopupLEFT');
            var hidemodal2 = document.getElementById('hidemodalLEFT');

            hidemodal2.addEventListener('click', closePopup2);

            function closePopup2() {
                modal2.style.display = "none";
            }

            setTimeout(() => {
                const modal = document.getElementById("modalpopupLEFT");
                modal.style.display = 'none';
            }, 3000);
        </script>
    @endif

    {{-- edit --}}
    {{-- @if (session()->has('edited'))
        <div id="modalpopupEDIT" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
            <div
                class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                <div
                    class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                    The Xtra is successfully edited
                    <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalEDIT"
                        class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z" />
                    </svg>
                </div>
            </div>
        </div>
        <script>
            var modal3 = document.getElementById('modalpopupEDIT');
            var hidemodal3 = document.getElementById('hidemodalEDIT');

            hidemodal3.addEventListener('click', closePopup3);

            function closePopup3() {
                modal3.style.display = "none";
            }

            setTimeout(() => {
                const modal = document.getElementById("modalpopupEDIT");
                modal.style.display = 'none';
            }, 3000);
        </script>
    @endif --}}
    {{-- popup --}}

    <!-- jumbotron (foto besar) -->
    <form method="GET" enctype="multipart/form-data">

        {{-- Untuk yang bisa input gambar ke jumbotron --}}
            {{-- <div id="jumbotron" class="jumbotron jumbotron-fluid" style="margin-bottom: 0vw !important; background-image: url('../../Assets/Xtrapageassets/image_jumbo.png'); cursor: pointer;"> --}}
        {{-- Untuk yang bisa input gambar ke jumbotron --}}

        <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0vw !important; background-image: url('../../Assets/Xtrapageassets/{{ $xtra->backgroundImage }}');">
            <input type="file" name="fileupload" id="fileupload" style="display: none;" accept=".png, .jpg, .jpeg">
            <div class="box-jumbotron">
                {{-- containerlogo itu container dari logo ekskul (Strava), hover (Xtra, Schedule, Leader), logo BCA --}}
                <div class="containerlogo">
                    <div class="row">
                        {{-- component hover (Xtra, Schedule, dan Leader) sebelah logo --}}
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="flex: 1;">
                            <div class="cursor-default" style="position: absolute; margin-top: 6.5vw;">
                                <div class="button-elips" onmouseover="hover()" onmouseout="out()">
                                    <a class="buttons" href="/xtralist/{{ $xtra->kdExtracurricular }}" data-value="{{ $xtra->name }}" data-text="Xtra">Xtra</a>
                                    @php
                                        $schedule = date('D', strtotime($xtra->latest_schedule?->date)) . ' (' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . ' - ' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd)) . ')'
                                    @endphp
                                    <a class="buttons" href="/xtralist/{{ $xtra->kdExtracurricular }}" data-value="{{ $schedule }}" data-text="Schedule">Schedule</a>
                                    <a class="buttons" href="/xtralist/{{ $xtra->kdExtracurricular }}" data-value="{{ $xtra->leader?->userXmas?->name }}" data-text="Leader">Leader</a>
                                    {{-- <a class="buttons" href="#" data-value="Running" data-text="Xtra">Xtra</a>
                                    <a class="buttons" href="" data-value="Wed(17.00 - 19.00)" data-text="Schedule">Schedule</a>
                                    <a class="buttons" href="" data-value="Jevent Natthannael" data-text="Leader">Leader</a> --}}
                                </div>
                            </div>

                            {{-- JS untuk hover Xtra Schedule Leader --}}
                            <script>
                                const buttons = document.querySelectorAll('.buttons');

                                buttons.forEach((button) => {

                                    button.addEventListener('mouseover', (e) => {
                                        const value = e.target.getAttribute('data-value');

                                        e.target.innerHTML = value;
                                        e.target.style.backgroundColor = '#1B2F45';
                                        e.target.style.color = 'white';
                                        e.target.style.fontSize = '1.6vw';
                                        e.target.style.width = 'fit-content';
                                        e.target.style.height = '5vw';
                                        e.target.style.paddingBottom = '4.1vw';


                                        if (value == @json($xtra->name)) {
                                            e.target.classList.add('JudulXtra');
                                            e.target.style.padding = '1.3vw 4vw 3.5vw 16vw';
                                            // e.target.style.width = '30vw';
                                            // e.target.style.marginBottom = '-0.2vw';
                                        } else if (value == @json($schedule)) {
                                            e.target.classList.add('ScheduleXtra');
                                            e.target.style.padding = '1.3vw 1vw 3.5vw 17.5vw';
                                            e.target.style.width = '35vw';
                                            e.target.style.marginTop = '-0.05vw';
                                            // e.target.style.marginBottom = '-0.3vw';
                                        } else if (value == @json($xtra->leader?->userXmas?->name)) {
                                            e.target.classList.add('LeaderXtra');
                                            e.target.style.padding = '1.3vw 3.5vw 3.5vw 16vw';
                                            // e.target.style.width = '40vw';
                                            // e.target.style.marginTop = '-0.58vw';
                                        }
                                    });
                                    button.addEventListener('mouseout', (e) => {
                                        const text = e.target.getAttribute('data-text');

                                        e.target.innerHTML = text;
                                        e.target.style.backgroundColor = '#d9d9d9';
                                        e.target.style.color = '#1B2F45';
                                        e.target.style.fontSize = '1.7vw';
                                        //   e.target.style.width = '25.5vw';

                                        if (text == 'Xtra') {
                                            e.target.style.padding = '1.3vw 1vw 3.5vw 17vw';
                                            // e.target.style.marginBottom = '-0.08vw';
                                            // e.target.style.marginBottom = '0vw';
                                            e.target.style.width = '25.2vw';
                                            e.target.classList.remove('JudulXtra');
                                        } else if (text == 'Schedule') {
                                            e.target.style.padding = '1.3vw 1vw 3.5vw 17vw';
                                            e.target.style.width = '29.2vw';
                                            e.target.style.marginTop = '-0.01vw';
                                            e.target.style.marginBottom = '-0.08vw';
                                            e.target.classList.remove('ScheduleXtra');
                                        } else if (text == 'Leader') {
                                            e.target.style.padding = '1.3vw 1vw 3.5vw 17vw';
                                            e.target.style.width = '27.6vw';
                                            // e.target.style.marginTop = '-0.08vw';
                                            // e.target.style.marginTop = '0vw';
                                            e.target.classList.remove('LeaderXtra');
                                        }
                                    });
                                });
                            </script>
                            {{-- JS untuk hover Xtra Schedule Leader --}}

                            {{-- elips untuk batas luar dari gambar logo ekskul --}}
                            <form method="GET" enctype="multipart/form-data">

                                {{-- untuk leader yang bisa ganti logo xtra --}}
                                <div id="elipsganti" class="elips" style="border-radius: 50%; height: 20.8vw; width: 20.8vw; margin-left: -4vw; background-color: white; cursor: pointer;">
                                {{-- untuk leader yang bisa ganti logo xtra --}}

                                {{-- <div class="elips" style="border-radius: 50%; height: 20.8vw; width: 20.8vw; margin-left: -4vw; background-color: white;"> --}}
                                    <img src="{{ asset('/Assets/Xtrapageassets/' . $xtra->logo) }}" alt="{{ $xtra->name }}" class="elips" style="height: 20.8vw; width: 20.8vw;" />
                                    <input type="file" name="fileupload" id="fileupload" style="display: none" accept=".png, .jpg, .jpeg">
                                </div>
                            </form>
                        </div>

                        {{-- untuk logo BCA --}}
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6" id="bca">
                            <img src="{{ asset('/Assets/Xtrapageassets/bca.png') }}" alt="" class="bca" style="width: 30vw; margin-left: 2.5vw;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- div untuk spasi aja --}}
    <div class="SpJumbotronMain" style="height: 5.5vw;"> </div>

    <main in style="height: auto;">
        {{-- buat container di bagian tengah (Make Attendance, Add Schedule, Kotak 3 segment) --}}
        <div class="containertengah">

            <div class="button-make-advance float-right">
                {{-- Untuk Make Attendance dan Add Schedule --}}
                <a href="{{ asset('absensiketua') }}" class="btn">Make Attendance</a>
                <a type="button" class="btn" data-toggle="modal" data-target="#add" id="addschedulebtn">Add Schedule</a>
                {{-- Untuk Make Attendance dan Add Schedule --}}

                {{-- Add Photo only --}}
                {{-- <a type="button" class="btn" id="" style="padding-left: 4vw; padding-right: 4vw;">Add Photo</a> --}}
                {{-- Add Photo only --}}
            </div>

            {{-- hanya buat spasi --}}
            <div class="spasi" style="height: 8vw"></div>

            {{-- Pilihan Sections --}}
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="padding-top: 1vw; width: 18vw">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="padding-top: 1vw; width: 18vw">Documentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="padding-top: 1vw; width: 18vw">Member</a>
                </li>
            </ul>
            {{-- Pilihan Sections --}}

            <div class="tab-content" id="myTabContent">
                {{-- ===Segment Description=== --}}
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    {{-- Untuk Ketua yang bisa edit isi Desc dan Act --}}
                    {{-- <form action="" class="KotakForm">
                        <div class="form-group" id="KotakDesc">
                            <div class="boxlabeledit">
                                <label for="exampleFormControlTextarea1" style="font-size: 1.5vw; margin-bottom: 0 !important;">Description :</label>
                                <label for="exampleFormControlTextarea1" style="margin-left: auto"><img class="gambarpensil" src="{{ asset('Assets/Xtrapageassets/Vector.png') }}" alt=""/></label>
                            </div>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descriptiontextarea" style="height: 15vw; border-radius: 2.5vw"></textarea>
                        </div>

                        <div class="form-group" id="KotakAct">
                            <div class="boxlabeledit">
                                <label for="exampleFormControlTextarea2" style="font-size: 1.5vw; margin-bottom: 0 !important;">Activity :</label>
                                <label for="exampleFormControlTextarea2" style="margin-left: auto"><img class="gambarpensil" src="{{ asset('Assets/Xtrapageassets/Vector.png') }}" alt=""/></label>
                            </div>
                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" name="activitytextarea" style="height: 9vw; border-radius: 2.5vw;"></textarea>
                        </div>
                    </form> --}}
                    {{-- Untuk Ketua yang bisa edit isi Desc dan Act --}}

                    {{-- Untuk Non-Ketua yang tidak bisa edit isi Desc dan Act --}}
                    <div class="KotakForm">
                        <div class="form-group" id="KotakDesc">
                            <div class="boxlabeledit">
                                <label for="exampleFormControlTextarea1" style="font-size: 1.5vw; margin-bottom: 0 !important;">Description :</label>
                            </div>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descriptiontextarea" style="height: 15vw; border-radius: 2.5vw; padding: 1vw 1.5vw 1vw 1.5vw; word-break: break-all; background-color: #d9d9d9; line-height: 1.4vw; font-size: 1.3vw; color: black;" disabled>
                                {{ $xtra->description }}
                            </textarea>
                        </div>

                        <div class="form-group" id="KotakAct">
                            <div class="boxlabeledit">
                                <label for="exampleFormControlTextarea1" style="font-size: 1.5vw; margin-bottom: 0 !important;">Activity :</label>
                            </div>
                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" name="activitytextarea" style="height: 9vw; border-radius: 2.5vw; padding: 1vw 1.5vw 1vw 1.5vw; word-break: break-all; background-color: #d9d9d9; line-height: 1.4vw; font-size: 1.3vw; color: black;" disabled>
                                {{ $xtra->latest_schedule?->activity }}
                            </textarea>
                        </div>
                    </div>
                    {{-- Untuk Non-Ketua yang tidak bisa edit isi Desc dan Act --}}
                </div>
                {{-- ===Segment Description=== --}}

                {{-- ===Segment Documentation=== --}}
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($xtra->documentations as $doc)
                                <div class="swiper-slide">
                                    <div class="card" style="width: 19vw">
                                        <img src="{{ asset('Assets/Xtrapageassets/foto/' . $doc->photo) }}" class="card-img-top" alt="..." />
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="swiper-slide">
                                <div class="card" style="width: 19vw">
                                    <img src="{{ asset('Assets/Xtrapageassets/foto/2.png') }}" class="card-img-top" alt="..." />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 19vw">
                                    <img src="{{ asset('Assets/Xtrapageassets/foto/3.png') }}" class="card-img-top" alt="..." />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 19vw">
                                    <img src="{{ asset('Assets/Xtrapageassets/foto/1.png') }}" class="card-img-top" alt="..." />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 19vw">
                                    <img src="{{ asset('Assets/Xtrapageassets/foto/1.png') }}" class="card-img-top" alt="..." />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 19vw">
                                    <img src="{{ asset('Assets/Xtrapageassets/foto/1.png') }}" class="card-img-top" alt="..." />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 19vw">
                                    <img src="{{ asset('Assets/Xtrapageassets/foto/1.png') }}" class="card-img-top" alt="..." />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card" style="width: 19vw">
                                    <img src="{{ asset('Assets/Xtrapageassets/foto/1.png') }}" class="card-img-top" alt="..." />
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                {{-- ===Segment Documentation=== --}}

                {{-- ===Segment Member=== --}}
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="font-weight-bold" style="font-size: 1.45vw; padding-left: 1vw;">Member : <span class="nummember">{{ $xtra->members->count() }}</span></div>
                    <div class="row" id="member">
                        <br />
                        <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                            <div class="luarcard">
                                <h4 class="text-center text-dark font-weight-bold" style="font-size: 1.5vw; margin-top: 1vw; margin-bottom: 0.8vw">
                                    Member List
                                </h4>
                                <div class="card scrollbar-hide">
                                    @if ($xtra->members->count() > 0)
                                        @if ($flag == 1 || $flag == 0)
                                            <span class="badgeMe">{{ $userMember->userXmas?->name }}</span>
                                        @endif
                                        @foreach ($xtra->members as $member)
                                            @if ($userMember != NULL)
                                                @if ($userMember->kdMember != $member->kdMember)
                                                    <span class="badge">{{ $member->userXmas?->name }}</span>
                                                    @endif
                                            @else
                                                <span class="badge">{{ $member->userXmas?->name }}</span>
                                            @endif
                                            {{-- <span class="badge">Jevent Natthannael</span>
                                            <span class="badge">Jevent Natthannael</span>
                                            <span class="badge">Michael Apen</span>
                                            <span class="badge">Harris Wahyudi</span>
                                            <span class="badge">Jevent Natthannael</span>
                                            <span class="badge">Michael Apen</span>
                                            <span class="badge">Harris Wahyudi</span>
                                            <span class="badge">Jevent Natthannael</span>
                                            <span class="badge">Michael Apen</span>
                                            <span class="badge">Harris Wahyudi</span> --}}
                                        @endforeach
                                    @else
                                        <span class="badgeNoMember">No Member Yet.</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if ($flag == 1 || $flag == 0)
                            {{-- Untuk Leave Xtra --}}
                            <div class="col-lg-6 col-sm-6 col-md-6 col-6" style="padding: 0 !important;">
                                <img src="{{ asset('Assets/Xtrapageassets/stop.png') }}" alt="" class="gambarstop" />
                                <div class="btn-member">
                                    {{-- <button type="button" class="btn" id="leavebtn" data-toggle="modal" data-target="#staticBackdrop" style="border: none">Leave Xtra</button> --}}
                                    <button type="button" class="leave" id="leavebtn" style="border: none">Leave Xtra</button>
                                </div>
                            </div>
                            {{-- Untuk Leave Xtra --}}
                        @elseif($flag == -1)
                            <div class="col-lg-6 col-sm-6 col-md-6 col-6" style="padding: 0 !important;">
                                <div class="gambarhover">
                                    <a href="/xtrareg">
                                        <div class="registernow absolute ml-[13vw] h-[7.3vw] mt-[7.5vw] w-[24.7vw] flex flex-col justify-center items-center font-nunito font-bold text-[2.5vw] z-50 bg-red-500 rounded-[1vw] opacity-0"
                                            onmouseover="join.src='{{ asset('Assets/Xtrapageassets/GambarJoinHover.png') }}'"
                                            onmouseout="join.src='{{ asset('Assets/Xtrapageassets/GambarJoin.png') }}'">
                                            JOIN NOW!!!
                                        </div>
                                    </a>
                                    <div class="flex">
                                        <img class="gambarjoin" id="join" src="{{ asset('Assets/Xtrapageassets/GambarJoin.png') }}" alt="" style="height: 25vw; width: 35vw; margin:0; margin-left: 5vw;">
                                    </div>
                                </div>
                            </div>
                        @elseif ($flag == -2)
                            {{-- register now harusnya, tp codingan front end mana g nemu --}}
                        @endif
                    </div>
                </div>
                {{-- ===Segment Member=== --}}
            </div>
        </div>

        @if ($flag == 1 || $flag == 0)
            <div class="presence" style="margin-top: 3vw;">
                {{-- container bawah itu container dari presence member, choose date, dan presence member list --}}
                <div class="containerbawah">
                    <div class="TulisanPresenceMember" style="">Presence Member : <span class="numpresence" id="presenceCountNumber">{{ $xtra->latest_schedule?->presences->count() }}</span> </div>
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Choose date <img class="gambarPanah"
                                src="{{ asset('Assets/Xtrapageassets/chevrondown.png') }}" alt=""
                                style="margin-left: 1vw; width: 2vw" /></button>
                        {{-- <button onclick="myFunction()" class="dropbtn" id="panahdate2">Choose date </button> --}}
                        <div id="myDropdown" class="dropdown-content">
                            @foreach ($xtra->schedules as $schedule)
                                <a>{{ date('M d, Y', strtotime($schedule->date)) }}</a>
                            @endforeach
                            {{-- <a href="#">March 12, 2023</a>
                            <a href="#">March 12, 2023</a>
                            <a href="#">March 12, 2023</a>
                            <a href="#">March 12, 2023</a>
                            <a href="#">March 12, 2023</a>
                            <a href="#">March 12, 2023</a>
                            <a href="#">March 12, 2023</a>
                            <a href="#">March 12, 2023</a> --}}
                        </div>
                    </div>
                    <div class="luarPML">
                        <h4 class="text-center font-weight-bold" style="color: white; font-size: 1.65vw; background-color: #1b2f45; margin-top: 1.8vw; margin-bottom: 0.6vw; padding-top:0.2vw; padding-bottom: 0.3vw;margin-right: 2vw; margin-left: 2vw;">
                            Presence Member List
                        </h4>
                        <div class="presence-list">

                            <div class="kotakisiPME" id="presenceLatest">
                                @if($xtra->latest_schedule?->presences?->count() > 0)
                                    @if ($xtra->latest_schedule?->presences->where('kdMember', '=', $userMember->kdMember)->first() != NULL)
                                        <span class="badgeMePML">{{ $userMember->userXmas?->name }}</span>
                                    @endif
                                    @foreach ($xtra->latest_schedule?->presences as $presence)
                                            @if ($userMember != NULL)
                                                @if ($presence->kdMember != $userMember->kdMember)
                                                    <span class="badge">{{ $presence->members?->userXmas?->name }}</span>
                                                @endif
                                            @else
                                                <span class="badge">{{ $presence->members?->userXmas?->name }}</span>
                                            @endif

                                    @endforeach
                                    {{-- <span class="badge">Jordan Cornelius</span>
                                    <span class="badge">Nathaniel Calvin</span>
                                    <span class="badge">Steven Felizion</span>
                                    <span class="badge">Michael Apen</span>
                                    <span class="badge">Harris Wahyudi</span>
                                    <span class="badge">Nathaniel Calvin</span>
                                    <span class="badge">Steven Felizion</span>
                                    <span class="badge">Michael Apen</span>
                                    <span class="badge">Harris Wahyudi</span> --}}
                                @else
                                    <span class="NoPresence">No presence yet.</span>
                                @endif
                            </div>
                            <div class="kotakisiPME" id="presenceChosen"></div>
                        </div>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
                    <script>
                        $(document).ready(function(){
                            $("#presenceChosen").hide();

                            $("#myDropdown a").click(function(){
                                // var selectedDate = $(this).text();
                                var selectedDate = moment($(this).text(), "MMM DD, YYYY").format("YYYY-MM-DD");

                                if(selectedDate != ""){
                                    $('#presenceLatest').hide();
                                    $('#presenceChosen').show();
                                    $.ajax({
                                        url: "{{ url('presence') }}",
                                        type:"GET",
                                        data: "date=" + selectedDate + "&kd=" + {{ $xtra->kdExtracurricular }} + "&kdMember=" + {{ $userMember->kdMember }},
                                        success: function(data){
                                            console.log(data);
                                            console.log(selectedDate);
                                            if (data.empty) {
                                                $("#presenceChosen").html(data.output);
                                                $("#presenceCountNumber").html("0");
                                            } else {
                                                $("#presenceChosen").html(data.output);
                                                $("#presenceCountNumber").html(data.totalPresence);
                                            }
                                        }
                                    })
                                }else{
                                    $('#presenceLatest').show();
                                    $('#presenceChosen').hide();
                                }
                            });
                        });
                    </script>
                    {{-- Button save --}}
                    <div class="kotakbtnsave">
                        <a type="button" class="btnsave" id="savebtn">
                            Save
                        </a>
                    </div>
                    {{-- Button save --}}

                    {{-- Modal button save --}}
                    <div id="modalsave" class="modalsave">
                        {{-- Modal Content --}}
                        <div class="modal-contentsave">
                            <div class="kotakisimodal">
                                <div class="boxjudulclosesave">
                                    <span class="closesave">&times;</span>
                                </div>
                                <div class="isisave">
                                    <div class="kalimatsave1">You have <span style="color: red;">edited</span> this page.
                                    </div>
                                    <div class="kalimatsave2">Do you want to save?</div>
                                </div>
                                <div class="boxsubmitsave">
                                    <a href=""><button class="btnyesmodal">Yes</button></a>
                                    <button class="btncancelmodal" id="btncancelmodal2">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal button save --}}

                </div>
                {{-- container bawah itu container dari presence member, choose date, dan presence member list --}}
            </div>
        @endif
    </main>

    {{-- Modal Leave --}}
    @if ($userMember != NULL)
        <div id="modalleave" class="modalleave">
            {{-- Modal Content --}}
            <div class="modal-contentleave">
                <div class="kotakisimodal">
                    <div class="boxjudulcloseleave">
                        <span class="closeleave">&times;</span>
                    </div>
                    <div class="isileave">
                        <div class="kalimatleave1">This action will <span style="color: red;">leave</span> from this Xtra
                        </div>
                        <div class="kalimatleave2">Do you want to continue?</div>
                    </div>
                    <div class="boxsubmitleave">
                        <form action="{{ route('xtra.leave') }}" method="POST">
                            @csrf
                            <input type="hidden" name="kdMember" value="{{ $userMember->kdMember }}">
                            <input type="hidden" name="kdXtra" value="{{ $xtra->kdExtracurricular }}">
                            <button class="btnyesmodal">Yes</button>
                        </form>
                        <button class="btncancelmodal" id="btncancelmodal1">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- Modal Leave --}}

    {{-- Modal Add Schedule --}}
    <div id="modaladdschedule" class="modaladdschedule">
        {{-- Modal Content --}}
        <div class="modal-contentaddschedule">
            <div class="kotakisimodal">
                <div class="boxjudulcloseaddschedule">
                    <div class="bungkuscalendar">
                        <form class="inline" method="POST">
                          <div class="input-icons">
                            <div class="datepicker-trigger">
                              <img src="{{ asset('Assets/Xtrapageassets/calendar-month.svg') }}" alt="" style="cursor: pointer;"/>
                            </div>
                            <input type="text" placeholder="Choose a date" class="datepicker" autocomplete="off">
                          </div>
                        </form>
                    </div>


                    <span class="closeaddschedule">&times;</span>
                </div>

                <div class="isiaddschedule">
                    <div class="kotakisi1"></div>
                    <div class="kotakisi2">
                        <div class="formketerangan">
                            <div class="namaxtra">Xtra</div>
                            <div class="activityxtra">Activity</div>
                            <div class="schedulextra">Time</div>
                            <div class="locationxtra">Location</div>
                        </div>
                        <div class="titikdua">
                            <div class="">:</div>
                            <div class="">:</div>
                            <div class="">:</div>
                            <div class="">:</div>
                        </div>
                        <form name="formAddSchedule" method="POST" class="isiform" onsubmit="return validasiAddSchedule()" autocomplete="off">
                            <input disabled type="email" class="form-control" id="xtraAS" style="background-color: #D9D9D9; font-size: 1.5vw; padding-left: 1.5vw" />
                            <input placeholder="Input here" name="activityAS" type="text" class="form-control" id="activityAS" style="background-color: #D9D9D9; font-size: 1.5vw; padding-left: 1.5vw" />

                            <div class="boxjamaddschedule">
                                <input type="time" id="appt1" name="appt" min="09:00" max="18:00" style="font-size: 1.5vw; width: 11.35vw; height: 3.8vw; padding-left: 1vw;">
                                <div style="color: white; font-size: 3vw; margin-left: 0.5vw; margin-right: 0.5vw"> - </div>
                                <input type="time" id="appt2" name="appt" min="09:00" max="18:00" style="font-size: 1.5vw; width: 11.35vw; height: 3.8vw; padding-left: 1vw;">
                            </div>

                            <input placeholder="Input here" name="locationAS" type="text" class="form-control" id="locationAS" style="background-color: #D9D9D9; font-size: 1.5vw; padding-left: 1.5vw" />

                            <a href=""><button type="submit" class="btnconfirmmodal" id="confirmbtn">Confirm</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Add Schedule --}}

    {{-- Modal Pop Up Notif --}}
    <div id="modalconfirm" class="modalconfirm">
        {{-- Modal Content --}}
        <div class="modal-contentconfirm">
            <div class="kotakisimodalconfirm">
                <div class="isipopupconfirm">Schedule Updated</div>
            </div>
        </div>
    </div>
    {{-- Modal Pop Up Notif --}}

    <!-- footer -->
    @include('../footer')
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3.5,
            spaceBetween: 30,
            // navigation: {
            //   nextEl: ".swiper-button-next",
            //   prevEl: ".swiper-button-prev",
            // },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        AOS.init();
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>-->
    <script>
        /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
        var rotated = false;

        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
            var panah = document.getElementsByClassName("gambarPanah")[0];

            var deg = rotated ? 0 : 180;
            // var deg = 180;
            panah.style.transform = 'rotate(' + deg + 'deg)';
            rotated = !rotated;
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

    <script>
        // script untuk modal add schedule
        // Get modal
        var modaladdschedule = document.getElementById("modaladdschedule");

        // Get button that opens modal
        var btnaddschedule = document.getElementById("addschedulebtn");

        // Get the <span> element that closes the modal
        var spanaddschedule = document.getElementsByClassName("closeaddschedule")[0];

        // When the user clicks the button, open the modal
        btnaddschedule.onclick = function() {
            modaladdschedule.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spanaddschedule.onclick = function() {
            modaladdschedule.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modaladdschedule.style.display = "none";
            }
        }
    </script>

    <script>
        var modalnotifconfirm = document.getElementById("modalnotifconfirm");
    </script>

    <script>
        //SCRIPT MODAL SAVE======================================
        // Get modal
        var modalsave = document.getElementById("modalsave")

        // Get button that opens modal
        var btnsave = document.getElementById("savebtn");

        // Get the <span> element that closes the modal
        var spansave = document.getElementsByClassName("closesave")[0];
        var btncancel = document.getElementById("btncancelmodal2");

        // When the user clicks the button, open the modal
        btnsave.onclick = function() {
            modalsave.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spansave.onclick = function() {
            modalsave.style.display = "none";
        }

        btncancel.onclick = function() {
            modalsave.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modalsave) {
                modalsave.style.display = "none";
            }
        }
        // SCRIPT MODAL SAVE========================================
    </script>

    <script>
        //SCRIPT MODAL LEAVE======================================
        // Get modal
        var modalleave = document.getElementById("modalleave")

        // Get button that opens modal
        var btnleave = document.getElementById("leavebtn");

        // Get the <span> element that closes the modal
        var spanleave = document.getElementsByClassName("closeleave")[0];
        var btncancel = document.getElementById("btncancelmodal1");

        // When the user clicks the button, open the modal
        btnleave.onclick = function() {
            modalleave.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spanleave.onclick = function() {
            modalleave.style.display = "none";
        }

        btncancel.onclick = function() {
            modalleave.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modalleave) {
                modalleave.style.display = "none";
            }
        }
        // SCRIPT MODAL LEAVE========================================
    </script>

    <script>
        //SCRIPT POP UP NOTIF======================================
        // Get modal
        var modalconfirm = document.getElementById("modalconfirm")

        // Get button that opens modal
        var btnconfirm = document.getElementById("confirmbtn");

        // When the user clicks the button, open the modal


        setTimeout(() => {
            const modal = document.getElementById("modalconfirm");
            modal.style.display = 'none';
        }, 3000);
        // SCRIPT POP UP NOTIF========================================
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.datepicker-trigger').click(function() {
                $('.datepicker').datepicker('show');
            });

            $('.datepicker').datepicker({
                dateFormat: "yy-mm-dd",
                beforeShow: function(input, inst) {
                    $('#datepicker-trigger').attr('src',
                        '{{ asset('Assets/Xtrapageassets/chevronup.svg') }}');
                },
                onClose: function(dateText, inst) {
                    $('#datepicker-trigger').attr('src',
                        '{{ asset('Assets/Xtrapageassets/chevrondown.svg') }}');
                }
            });
        });
    </script>
    @vite('resources/js/app.js')

    <script>
        function validasiAddSchedule() {
            var activity = document.getElementById("activityAS");
            var start = document.getElementById("appt1");
            var end = document.getElementById("appt2");
            var location = document.getElementById("locationAS");

            var modalconfirm = document.getElementById("modalconfirm");
            var btnconfirm = document.getElementById("confirmbtn");

            if (activity.value == "") {
                alert("Activity must be filled out");
                return false;
            } else if (start.value == "") {
                alert("Start time must be filled out");
                return false;
            } else if (end.value == "") {
                alert("End time must be filled out");
                return false;
            } else if(start.value > end.value) {
                alert("Start time must be greater than end time");
                return false;
            } else if (location.value == ""){
                alert("Location must be filled out");
                return false;
            } else {
                btnconfirm.onclick = function() {
                    modalconfirm.style.display = "block";
                }
                setTimeout(() => {
                    const modal = document.getElementById("modalconfirm");
                    modal.style.display = 'none';
                }, 5000);
            }
        }
    </script>

    <script>
        document.getElementById('jumbotron').addEventListener('click', function() {
            document.getElementById('fileupload').click();
        });

        document.getElementById('elipsganti').addEventListener('click', function() {
            document.getElementById('fileupload').click();
        });

        document.getElementById('fileupload').addEventListener('change', function() {
            var files = this.files;
            console.log(files);
        });
    </script>

    <script>
        // Get the textarea element
        var textarea = document.getElementById("exampleFormControlTextarea1");

        // Remove indentation from the content
        var content = textarea.value;
        content = content.replace(/^\s+/gm, "");
        textarea.value = content;
    </script>

    <script>
        // Get the textarea element
        var textarea = document.getElementById("exampleFormControlTextarea2");

        // Remove indentation from the content
        var content = textarea.value;
        content = content.replace(/^\s+/gm, "");
        textarea.value = content;
    </script>
</body>

</html>
