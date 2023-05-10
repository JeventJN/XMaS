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
<body class="overflow-x-hidden">
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


    @guest
        @include('Non-User.navbarNU')
            @if (session()->has('logoutSuccess'))
                {{-- Ini pop-up kalau log-out {href=profile} (Ini saya hidden dulu, bukan saya comment ya) --}}
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
                </script>
            @endif
    @endguest

    @auth
        @include('User/navbarUser')
        {{-- welkam, {{auth()->user()->name}} --}}
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
                </script>
            @endif
    @endauth

    {{-- ini script js, nanti kalau udah bisa delete account, tinggal ambil aja codingan dibawah ini --}}

    {{-- Ini pop-up kalau Delete Account {href=profile} (Ini saya hidden dulu, bukan saya comment ya) --}}
    {{-- <div id="modalpopupDEL" class="hidden fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
        <div class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
            <div class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw] flex">
                Your account is successfully deleted
                <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalDEL" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
            </div>
        </div>
    </div> --}}

    {{-- <script src="{{asset('js/home3.js')}}">
        var modal3 = document.getElementById('modalpopupDEL');
        var hidemodal3 = document.getElementById('hidemodalDEL');

        hidemodal3.addEventListener('click', closePopup3);

        function closePopup3(){
            modal3.style.display="none";
        }
        </script> --}}

    {{-- BATAS BAWAH SCRIPTT --}}

    {{-- @include('Admin.navbarAdmin')
    {{-- Header --}}
    @include('header')


    {{-- Upcoming Extracurricular Segment --}}
    <div class="segment">
        <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-bold flex text-[1.75vw] items-center justify-center">
            Upcoming Extracurriculars
        </div>
        <div class="h-[30vw] w-[screen] flex items-center">
            <div class="featured-carousel owl-carousel">
                @if ($xtras->count())
                    @foreach ($xtras->sortBy('latest_schedule.date') as $xtr)
                        @if ($xtr->latest_schedule?->date > Illuminate\Support\Carbon::yesterday())
                            <a href="/xtralist/{{ $xtr->kdExtracurricular }}">
                                <div class="upcomingxtrahover h-[25vw] flex items-center font-noto">
                                    <div class="upcomingxtra">
                                        <div class="logo">
                                            <div class="photo">
                                                {{-- Pass Xtra BG Here --}}
                                                <img src="{{asset('Assets/RunningBg.jpeg')}}" alt="">
                                            </div>
                                            <div class="logoxtra">
                                                <img src="Assets/{{ $xtr->logo }}" alt="{{ $xtr->name }}">
                                            </div>
                                        </div>
                                        <div class="title text-[1.5vw] font-nunito font-semibold">
                                            {{ $xtr->name }}
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
                                                    {{ date('D', strtotime($xtr->latest_schedule?->date)) . ', ' . date('m', strtotime($xtr->latest_schedule?->date)) . '/' . date('d', strtotime($xtr->latest_schedule?->date)) . '/' . date('Y', strtotime($xtr->latest_schedule?->date)) }}
                                                @endif
                                            </h3>
                                            <h3>
                                                @if ($xtr->leader?->userXmas?->phoneNumber === NULL)
                                                    <p>No phone number</p>
                                                @else
                                                    {{str_replace("62", "0", $xtr->leader?->userXmas?->phoneNumber)}}
                                                @endif

                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                @else
                    <p class="text-center text-[1.7vw] font-semibold mb-[3vw] h-[20vw] justify-center items-center flex">No Extracurricular.</p>
                @endif

            </div>
        </div>
    </div>

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

        {{-- Banner Home User --}}
    @auth
        <img src="{{asset('Assets/UserBanner.png')}}" alt="">
    @endauth

    {{-- Banner Admin --}}
    {{-- <div class="h-fit w-screen">
        TEMBAK KE Report List (HAPUS KOMEN INI KALAU UDAH)
        <a href="/">
            <div class="registernow absolute ml-[10.8vw] h-[5.4vw] mt-[7.3vw] w-[18.7vw] flex flex-col justify-center items-center font-nunito font-bold text-[2.5vw] z-50 bg-red-500 opacity-0 rounded-[1vw]" onmouseover="report.src='{{asset('Assets/CheckReportHover.png')}}'" onmouseout="report.src='{{asset('Assets/CheckReport.png')}}'">
                DUMMY!!!
            </div>
        </a>
        <div class="flex">
            <img class="min-w-[100%]" src="{{asset('Assets/CheckReportBG.png')}}" alt="">
            <img class="absolute ml-[-3.5vw] w-[33vw] mt-[5vw]" id="report" src="{{asset('Assets/CheckReport.png')}}" alt="">
        </div>
    </div> --}}

    {{-- Extracurricular Segment --}}
    <div class="segment">
        <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-bold flex text-[1.75vw] items-center justify-center">
            Extracurriculars
        </div>
        <h1 class="text-[#56B8E6] viewall font-nunito">
            <a href="/xtralistNU">
                view all
            </a>
        </h1>
        <div class="h-[30vw] w-[screen] flex items-center mt-[2.5vw]">
            <div class="featured-carousel owl-carousel">
                @if ($xtras->count())
                    @foreach ($xtras as $xtr)
                        <a href="/xtralist/{{ $xtr->kdExtracurricular }}">
                            <div class="xtrahover h-[25vw] flex items-center justify-center font-nunito font-bold text-[2vw]">
                                <div class="xtra">
                                    <div class="xtralogo">
                                        <img src="Assets/{{$xtr->logo}}" alt="">
                                    </div>
                                    <h3 class="mt-[1vw]">
                                        {{$xtr->name}}
                                    </h3>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <p class="text-center text-[1.7vw] font-semibold mb-[3vw] h-[20vw] justify-center items-center flex">No Extracurricular.</p>
                @endif
            </div>
            <script src="{{asset('carousel/js/jquery.min.js')}}"></script>
            <script src="{{asset('carousel/js/popper.js')}}"></script>
            <script src="{{asset('carousel/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('carousel/js/owl.carousel.min.js')}}"></script>
            <script src="{{asset('carousel/js/main.js')}}"></script>
        </div>
    </div>
    @include('footer')
</body>
</html>
