<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('carousel/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('carousel/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('carousel/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
  <title>User Home</title>
  @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden scrollbar-hide">
    {{-- Navbar Options --}}

    {{-- @php
        dd(Auth::check());
    @endphp --}}

    {{-- @if(request()->query('auth'))
        <p>User terautentikasi</p>
    @else
        <p>User tidak terautentikasi</p>
    @endif --}}


    {{-- @if(session()->get('auth'))
        <p>User terautentikasi</p>
    @else
        <p>User tidak terautentikasi</p>
    @endif --}}

    {{-- {{Auth::userXmas()->NIP}} --}}

    {{-- {{Auth::User()}} --}}
    {{-- {{gettype(Auth::User()->NIP)}} --}}
    {{-- {{sprintf("%04d", Auth::User()->NIP)}} --}}

    {{-- @if ($flag == 1)
        <p>hai</p>
    @endif --}}

    {{-- Ini jalan --}}
    {{-- @if (Auth::User()->NIP == '0000')
        <p>hai</p>
    @endif --}}


    @guest
        @include('Non-User.navbarNU')
            @if (session()->has('logoutSuccess'))
                {{-- Ini pop-up kalau log-out {href=profile} (Ini saya hidden dulu, bukan saya comment ya) --}}
                {{-- log out --}}
                <div id="modalpopupLO" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
                    <div class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                        <div class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                            Successfully logged out
                            <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalLO" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
                        </div>
                    </div>
                </div>
                <script>
                    var modal2 = document.getElementById('modalpopupLO');
                    var hidemodal2 = document.getElementById('hidemodalLO');

                    hidemodal2.addEventListener('click', closePopup2);

                    function closePopup2(){
                        modal2.style.display="none";
                    }

                    setTimeout(() => {
                        const modal = document.getElementById("modalpopupLO");
                        modal.style.display = 'none';
                    }, 3000);
                </script>
            @endif

            {{-- delete --}}
            @if (session()->has('deleteSuccess'))
                <div id="modalpopupDL" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
                    <div class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                        <div class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                            Your account is successfully deleted
                            <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalDL" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
                        </div>
                    </div>
                </div>
                <script>
                    var modal3 = document.getElementById('modalpopupDL');
                    var hidemodal3 = document.getElementById('hidemodalDL');

                    hidemodal3.addEventListener('click', closePopup3);

                    function closePopup3(){
                        modal3.style.display="none";
                    }

                    setTimeout(() => {
                        const modal = document.getElementById("modalpopupDL");
                        modal.style.display = 'none';
                    }, 3000);
                </script>
            @endif
    @endguest

    {{-- {{Auth::User()->hasRole('admin')}} --}}


    @auth
        @if (Auth::User()->NIP !== 0)
            @include('User/navbarUser')
        @else
            @include('Admin.navbarA')
            {{-- @can('admin')
            @endcan --}}
        @endif
            {{-- Ini pop-up kalau log-in berhasil {href=login} (Ini saya hidden dulu, bukan saya comment ya) --}}
                @if (session()->has('loginSuccess'))
                    <div id="modalpopupLI" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
                        <div class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                            <div class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                                Successfully logged in
                                <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalLI" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
                            </div>
                        </div>
                    </div>
                    <script>
                        var modal1 = document.getElementById('modalpopupLI');
                        var hidemodal1 = document.getElementById('hidemodalLI');

                        hidemodal1.addEventListener('click', closePopup1);

                        function closePopup1(){
                            modal1.style.display="none";
                        }

                        setTimeout(() => {
                            const modal = document.getElementById("modalpopupLI");
                            modal.style.display = 'none';
                        }, 3000);
                    </script>
                @endif
        @endauth


    {{-- Header --}}
    @include('header')


    {{-- Upcoming Extracurricular Segment (BUAT NU dan U)--}}
    @guest
        <div class="segment">
            <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-bold flex text-[1.75vw] items-center justify-center">
                Upcoming Extracurriculars
            </div>
            @if($kosong == 'yes')
                <div class="flex justify-center w-screen items-center h-[30vw]">
                    <p class="text-[1.7vw] font-semibold justify-center items-center flex">No Extracurricular's Schedule Yet.</p>
                </div>
            @else
                @if ($xtras->count())
                    <div class="h-[30vw] w-[100%] flex items-center justify-center ml-[1.8vw]">
                        <div class="carousel flex h-fit">
                            <div class="h-[30vw] w-[100%] flex items-center justify-center mr-[2vw]">
                                <div class="carousel flex h-fit overflow-scroll scrollbar-hide" id="carousel">
                                    <div class="carousel-items select-none ml-[1vw]">
                                            @foreach ($xtras->sortBy('latest_schedule.date') as $xtr)
                                                @if ($xtr->latest_schedule?->date > Illuminate\Support\Carbon::yesterday())
                                                <a href="/xtrapage/{{ $xtr->kdExtracurricular }}">
                                                    <div class="carousel-item">
                                                        <div class="upcomingxtrahover h-[25vw] flex items-center font-noto">
                                                            <div class="upcomingxtra">
                                                                <div class="logo">
                                                                    <div class="photo">
                                                                        {{-- Pass Xtra BG Here --}}
                                                                        @if (Illuminate\Support\Str::contains($xtr->backgroundImage, 'database-assets'))
                                                                            <img src="{{ asset('storage/' . $xtr->backgroundImage) }}" alt="{{ asset('Assets/RunningBg.jpeg')}}" style="object-fit: cover;"/>
                                                                        @else
                                                                            <img src="{{ asset('Assets/' . $xtr->backgroundImage) }}" alt="{{ asset('Assets/RunningBg.jpeg')}}" style="object-fit: cover;"/>
                                                                        @endif
                                                                    </div>
                                                                    <div class="logoxtra mt-[-9vw]">
                                                                        @if (Illuminate\Support\Str::contains($xtr->logo, 'database-assets'))
                                                                            <img src="{{ asset('storage/' . $xtr->logo) }}" alt="Assets/RunningLogo.png" />
                                                                        @else
                                                                            <img src="{{ asset('Assets/' . $xtr->logo) }}" alt="Assets/RunningLogo.png" />
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="title text-[1.5vw] font-nunito font-semibold">
                                                                    {{-- {{ $xtr->name }} --}}
                                                                    {{ Str::limit($xtr->name, 12, '...') }}
                                                                </div>
                                                                <div class="content text-white text-[1.5vw]">
                                                                    <h3>
                                                                        @if ($xtr->latest_schedule?->location === NULL)
                                                                            <p>No location</p>
                                                                        @else
                                                                            {{$xtr->latest_schedule?->location}}
                                                                        @endif
                                                                    </h3>
                                                                    <h3>
                                                                        @if ($xtr->latest_schedule?->date === NULL)
                                                                            <p>No schedule</p>
                                                                        @else
                                                                            {{ date('D', strtotime($xtr->latest_schedule?->date)) . ', ' . date('d', strtotime($xtr->latest_schedule?->date)) . ' '  . date('M', strtotime($xtr->latest_schedule?->date)) . ' ' . date('Y', strtotime($xtr->latest_schedule?->date)) }}
                                                                        @endif
                                                                    </h3>
                                                                    <h3>
                                                                        @if ($xtr->leader?->userXmas?->phoneNumber === NULL)
                                                                            <p>No phone number</p>
                                                                        @else
                                                                            {{ substr_replace($xtr->leader?->userXmas?->phoneNumber, "0", 0, 2) }}
                                                                        @endif
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="w-[5vw]"></div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        </div>
    @endguest

    @auth
        @if (Auth::User()->NIP !== 0)
            <div class="segment">
                <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-bold flex text-[1.75vw] items-center justify-center">
                    Upcoming Extracurriculars
                </div>
                @if($kosong == 'yes')
                    <div class="flex justify-center w-screen items-center h-[30vw]">
                        <p class="text-[1.7vw] font-semibold justify-center items-center flex">No Extracurricular's Schedule Yet.</p>
                    </div>
                @else
                    @if ($xtras->count())
                        <div class="h-[30vw] w-[100%] flex items-center justify-center ml-[1.8vw]">
                            <div class="carousel flex h-fit">
                                <div class="h-[30vw] w-[100%] flex items-center justify-center mr-[2vw]">
                                    <div class="carousel flex h-fit overflow-scroll scrollbar-hide" id="carousel">
                                        <div class="carousel-items select-none ml-[1vw]">
                                                @foreach ($xtras->sortBy('latest_schedule.date') as $xtr)
                                                    @if ($xtr->latest_schedule?->date > Illuminate\Support\Carbon::yesterday())
                                                    <form action="/xtrapage" method="POST" id="xtraPage">
                                                        @csrf
                                                        <div id="boxLuar">
                                                            <div class="carousel-item">
                                                                <div class="upcomingxtrahover h-[25vw] flex items-center font-noto">
                                                                    <div class="upcomingxtra">
                                                                        <div class="logo">
                                                                            <div class="photo">
                                                                                {{-- Pass Xtra BG Here --}}
                                                                                @if (Illuminate\Support\Str::contains($xtr->backgroundImage, 'database-assets'))
                                                                                    <img src="{{ asset('storage/' . $xtr->backgroundImage) }}" alt="{{ asset('Assets/RunningBg.jpeg')}}" style="object-fit: cover;"/>
                                                                                @else
                                                                                    <img src="{{ asset('Assets/' . $xtr->backgroundImage) }}" alt="{{ asset('Assets/RunningBg.jpeg')}}" style="object-fit: cover;"/>
                                                                                @endif
                                                                            </div>
                                                                            <div class="logoxtra mt-[-9vw]">
                                                                                @if (Illuminate\Support\Str::contains($xtr->logo, 'database-assets'))
                                                                                    <img src="{{ asset('storage/' . $xtr->logo) }}" alt="Assets/RunningLogo.png" />
                                                                                @else
                                                                                    <img src="{{ asset('Assets/' . $xtr->logo) }}" alt="Assets/RunningLogo.png" />
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="title text-[1.5vw] font-nunito font-semibold">
                                                                            {{-- {{ $xtr->name }} --}}
                                                                            {{ Str::limit($xtr->name, 12, '...') }}
                                                                        </div>
                                                                        <div class="content text-white text-[1.5vw]">
                                                                            <h3>
                                                                                @if ($xtr->latest_schedule?->location === NULL)
                                                                                    <p>No location</p>
                                                                                @else
                                                                                    {{$xtr->latest_schedule?->location}}
                                                                                @endif
                                                                            </h3>
                                                                            <h3>
                                                                                @if ($xtr->latest_schedule?->date === NULL)
                                                                                    <p>No schedule</p>
                                                                                @else
                                                                                    {{ date('D', strtotime($xtr->latest_schedule?->date)) . ', ' . date('d', strtotime($xtr->latest_schedule?->date)) . ' '  . date('M', strtotime($xtr->latest_schedule?->date)) . ' ' . date('Y', strtotime($xtr->latest_schedule?->date)) }}
                                                                                @endif
                                                                            </h3>
                                                                            <h3>
                                                                                @if ($xtr->leader?->userXmas?->phoneNumber === NULL)
                                                                                    <p>No phone number</p>
                                                                                @else
                                                                                    {{ substr_replace($xtr->leader?->userXmas?->phoneNumber, "0", 0, 2) }}
                                                                                @endif
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="kdXtra" value="{{$xtr->kdExtracurricular}}">
                                                        </div>
                                                    </form>

                                                    <script>
                                                        document.getElementById("boxLuar").addEventListener("click", function () {
                                                            document.getElementById("xtraPage").submit();
                                                        });
                                                    </script>
                                                    <div class="w-[5vw]"></div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @else
        {{-- Untuk Admin Report --}}
            <div class="segmentA">
                <div id="segmentTitleA" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-bold flex text-[1.75vw] items-center justify-center">
                    Newest Reports
                </div>
                <h1 class="text-[#56B8E6] viewall font-nunito z-10">
                    <a href="/reportlist">
                        view all
                    </a>
                </h1>
                <div class="h-[30vw] w-[100%] flex items-center justify-center ml-[1.8vw] mt-[-2vw]">
                    <div class="carousel flex h-fit">
                        <div class="carousel flex h-fit overflow-scroll scrollbar-hide z-0" id="carousel">
                            <div class="group flex h-[25vw] items-center">
                                @if ($reports->count())
                                    @foreach ($reports as $index => $report)
                                        <div class="report w-[18vw] h-fit flex items-center justify-center z-40 hover:cursor-pointer">
                                            <div class="">
                                                <div class="relative">
                                                    @if (Illuminate\Support\Str::contains($report->schedules?->xtras?->logo, 'database-assets'))
                                                        <img class="z-10 absolute rounded-[50%] min-w-[6vw] min-h-[6vw] z-50 ml-[6vw] mt-[-3vw]" src="{{ asset('storage/' . $report->schedules?->xtras?->logo) }}" alt="Assets/RunningLogo.png" />
                                                    @else
                                                        <img class="z-10 absolute rounded-[50%] min-w-[6vw] min-h-[6vw] z-50 ml-[6vw] mt-[-3vw]" src="{{ asset('Assets/' . $report->schedules?->xtras?->logo) }}" alt="Assets/RunningLogo.png" />
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="mail1 min-w-[18vw] z-40">
                                                <img class="w-[18vw]" src="{{asset('Assets/report1.png')}}">
                                            </div>
                                        </div>

                                        <form action="/reportformA" method="post" class="relative report1 flex items-center z-50 hidden mt-[-5vw]" href="reportlist">
                                            @csrf
                                            <button class="absolute mail2 w-[18vw] z-40">
                                                <img class="w-[18vw]" src="{{asset('Assets/report2.png')}}" alt="">
                                            </button>
                                            <button class="titleMail w-[18vw] text-[1vw] z-50">
                                                <p>{{ Str::limit($report->title, 12, '...') }}</p>
                                            </button>
                                            <button class="logo2 rounded-[50%] w-[6vw] h-[6vw] mt-[-2vw] ml-[-3vw] z-50">
                                                @if (Illuminate\Support\Str::contains($report->schedules?->xtras?->logo, 'database-assets'))
                                                        <img class="w-[18vw] rounded-[50%]" class="logo2 rounded-[50%] w-[6vw] h-[6vw] z-50" src="{{ asset('storage/' . $report->schedules?->xtras?->logo) }}" alt="Assets/RunningLogo.png" />
                                                    @else
                                                        <img class="w-[18vw] rounded-[50%]" class="logo2 rounded-[50%] w-[6vw] h-[6vw] z-50" src="{{ asset('Assets/' . $report->schedules?->xtras?->logo) }}" alt="Assets/RunningLogo.png" />
                                                    @endif
                                            </button>

                                            <input type="hidden" name="report" value="{{$report->kdReport}}">
                                        </form>
                                        <div class="w-[5vw]"></div>

                                    @endforeach
                                @else
                                <div class="w-screen flex justify-center h-[20vw] items-center">
                                    <p class="text-[1.7vw] font-semibold mb-[3vw] w-full justify-center items-center flex">No Incoming Report Yet.</p>
                                </div>
                                @endif

                            </div>
                            <script>
                                    const reports = document.querySelectorAll('.report');
                                    const report1s = document.querySelectorAll('.report1');

                                    reports.forEach((report, index) => {
                                    const report1 = report1s[index];

                                    report.addEventListener('mouseenter', () => {
                                        reports.forEach((r) => {
                                        if (r !== report) {
                                            r.nextElementSibling.classList.add('hidden');
                                        }
                                        });
                                        report.nextElementSibling.classList.remove('hidden');
                                        report.classList.add('hidden');
                                    });

                                    report1.addEventListener('mouseleave', () => {
                                        report.classList.remove('hidden');
                                        report.nextElementSibling.classList.add('hidden');
                                    });
                                    });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endauth

    {{-- Banner Options --}}

    {{-- Banner Home Non-User --}}
    @guest
        <div class="h-fit w-screen">
            <a href="/signup">
                <div class="registernow absolute ml-[9.8vw] h-[7.3vw] mt-[8.5vw] w-[24.7vw] flex flex-col justify-center items-center font-nunito font-bold text-[2.5vw] z-50 bg-red-500 rounded-[1vw] opacity-0" onmouseover="signup.src='{{asset('Assets/SignUpNowHover.png')}}'" onmouseout="signup.src='{{asset('Assets/SignUpNow.png')}}'">
                    DUMMY!!
                </div>
            </a>
            <div class="flex">
                <img class="min-w-[100%]" src="{{asset('Assets/SignUpNowBG.png')}}" alt="">
                <img class="absolute ml-[1vw] h-[20vw] mt-[0.8vw]" id="signup" src="{{asset('Assets/SignUpNow.png')}}" alt="">
            </div>
        </div>
    @endguest

    @auth
        @if (Auth::User()->NIP !== 0)
            {{-- Banner Home User --}}
            <img class="min-w-[100%]" src="{{asset('Assets/UserBanner.png')}}" alt="">
        @else
            {{-- Banner Admin --}}
            <div class="h-fit w-screen">
                <a href="/reportlist">
                    <div class="registernow absolute ml-[10.8vw] h-[5.4vw] mt-[7.3vw] w-[18.7vw] flex flex-col justify-center items-center font-nunito font-bold text-[2.5vw] z-50 bg-red-500 opacity-0 rounded-[1vw]" onmouseover="report.src='{{asset('Assets/CheckReportHover.png')}}'" onmouseout="report.src='{{asset('Assets/CheckReport.png')}}'">
                        DUMMY!!!
                    </div>
                </a>
                <div class="flex">
                    <img class="min-w-[100%]" src="{{asset('Assets/CheckReportBG.png')}}" alt="">
                    <img class="absolute ml-[-3.5vw] w-[33vw] mt-[5vw]" id="report" src="{{asset('Assets/CheckReport.png')}}" alt="">
                </div>
            </div>
        @endif
    @endauth


    {{-- Extracurricular Segment --}}
    @guest
        <div class="segment">
            <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-bold flex text-[1.75vw] items-center justify-center">
                Extracurriculars
            </div>
            <h1 class="text-[#56B8E6] viewall font-nunito">
                <a href="/xtralistNU">
                    view all
                </a>
            </h1>
            <div class="h-[30vw] w-[100%] flex items-center overflow-scroll scrollbar-hide ml-[1.8vw]" id="carousel1">
                <div class="flex h-fit">
                    <div class="h-[30vw] w-[100%] flex items-center mr-[2vw]">
                        <div class="flex h-fit">
                            <div class="carousel1-items ml-[1vw]">
                                @if ($xtras->count())
                                    @foreach ($xtras as $xtr)
                                        <a href="/xtralist/{{ $xtr->kdExtracurricular }}" class="w-[15vw] h-[20vw] bg-yellow-500 mt-[2.5vw] rounded-[2vw] mb-[2vw]">
                                            <div class="xtrahover h-[20vw] flex items-center justify-center font-nunito font-bold text-[2vw] carousel-items select-none">
                                                <div class="carousel-item">
                                                    <div class="xtra">
                                                        <div class="xtralogo">
                                                            @if (Illuminate\Support\Str::contains($xtr->logo, 'database-assets'))
                                                                <img src="{{ asset('storage/' . $xtr->logo) }}" alt="Assets/RunningLogo.png" />
                                                            @else
                                                                <img src="{{ asset('Assets/' . $xtr->logo) }}" alt="Assets/RunningLogo.png" />
                                                            @endif
                                                        </div>
                                                        <h3 class="mt-[1vw]">
                                                            {{$xtr->name}}
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="w-[5vw]"></div>
                                    @endforeach
                                @else
                                    {{-- Ga ada xtra, yang bawah boleh dihapus ya peng, copy dari line 166 --}}
                                    <p class="text-[1.7vw] font-semibold mb-[3vw] w-full justify-center items-center flex">No Incoming Report Yet.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endguest


    @auth
        @if (Auth::User()->NIP !== 0)
            {{-- Sudah login --}}
            <div class="segment">
                <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-bold flex text-[1.75vw] items-center justify-center">
                    Extracurriculars
                </div>
                <h1 class="text-[#56B8E6] viewall font-nunito">
                    <a href="/xtralistNU">
                        view all
                    </a>
                </h1>
                <div class="h-[30vw] w-[100%] flex items-center overflow-scroll scrollbar-hide ml-[1.8vw]" id="carousel1">
                    <div class="flex h-fit">
                        <div class="h-[30vw] w-[100%] flex items-center mr-[2vw]">
                            <div class="flex h-fit">
                                <div class="carousel1-items ml-[1vw]">
                                    @if ($xtras->count())
                                        @foreach ($xtras as $xtr)
                                            <form action="/xtrapage" method="POST" id="xtraSegment">
                                                <div class="w-[15vw] h-[20vw] bg-yellow-500 mt-[2.5vw] rounded-[2vw] mb-[2vw]">
                                                    <div class="xtrahover h-[20vw] flex items-center justify-center font-nunito font-bold text-[2vw] carousel-items select-none">
                                                        <div class="carousel-item">
                                                            <div class="xtra">
                                                                <div class="xtralogo">
                                                                    @if (Illuminate\Support\Str::contains($xtr->logo, 'database-assets'))
                                                                        <img src="{{ asset('storage/' . $xtr->logo) }}" alt="Assets/RunningLogo.png" />
                                                                    @else
                                                                        <img src="{{ asset('Assets/' . $xtr->logo) }}" alt="Assets/RunningLogo.png" />
                                                                    @endif
                                                                </div>
                                                                <h3 class="mt-[1vw]">
                                                                    {{$xtr->name}}
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="kdXtra" value="{{$xtr->kdExtracurricular}}">
                                            </form>
                                            <div class="w-[5vw]"></div>
                                        @endforeach
                                    @else
                                        {{-- Ga ada xtra, yang bawah boleh dihapus ya peng, copy dari line 166 --}}
                                        <p class="text-[1.7vw] font-semibold mb-[3vw] w-full justify-center items-center flex">No Incoming Report Yet.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            {{-- Admin --}}
            <div class="segment">
                <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-bold flex text-[1.75vw] items-center justify-center">
                    Extracurriculars
                </div>
                <h1 class="text-[#56B8E6] viewall font-nunito">
                    <a href="/xtralistNU">
                        view all
                    </a>
                </h1>
                <div class="h-[30vw] w-[100%] flex items-center overflow-scroll scrollbar-hide ml-[1.8vw]" id="carousel1">
                    <div class="flex h-fit">
                        <div class="h-[30vw] w-[100%] flex items-center mr-[2vw]">
                            <div class="flex h-fit">
                                <div class="carousel1-items ml-[1vw]">
                                    @if ($xtras->count())
                                        @foreach ($xtras as $xtr)
                                            <a href="/xtralist/{{ $xtr->kdExtracurricular }}" class="w-[15vw] h-[20vw] bg-yellow-500 mt-[2.5vw] rounded-[2vw] mb-[2vw]">
                                                <div class="xtrahover h-[20vw] flex items-center justify-center font-nunito font-bold text-[2vw] carousel-items select-none">
                                                    <div class="carousel-item">
                                                        <div class="xtra">
                                                            <div class="xtralogo">
                                                                @if (Illuminate\Support\Str::contains($xtr->logo, 'database-assets'))
                                                                    <img src="{{ asset('storage/' . $xtr->logo) }}" alt="Assets/RunningLogo.png" />
                                                                @else
                                                                    <img src="{{ asset('Assets/' . $xtr->logo) }}" alt="Assets/RunningLogo.png" />
                                                                @endif
                                                            </div>
                                                            <h3 class="mt-[1vw]">
                                                                {{$xtr->name}}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="w-[5vw]"></div>
                                        @endforeach
                                    @else
                                        {{-- Ga ada xtra, yang bawah boleh dihapus ya peng, copy dari line 166 --}}
                                        <p class="text-[1.7vw] font-semibold mb-[3vw] w-full justify-center items-center flex">No Incoming Report Yet.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    @endauth

    <script src="{{asset('js/home.js')}}"></script>
    @include('footer')
</body>
</html>
