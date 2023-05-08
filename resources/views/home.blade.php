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
        {{-- Ini pop-up kalau log-out {href=profile} (Ini saya hidden dulu, bukan saya comment ya) --}}
        <div id="modalpopupLO" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
            <div class="w-[67vw] h-[5vw] bg-red-500 flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                <div class="w-[66vw] h-[4vw] bg-red-500 flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                    Successfully logged out
                    <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalLO" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
                </div>
            </div>
        </div>
        <script src="{{asset('js/home2.js')}}"></script>
    @endguest

    @auth
        @include('User/navbarUser')
        {{-- welkam, {{auth()->user()->name}} --}}
            {{-- Ini pop-up kalau log-in berhasil {href=login} (Ini saya hidden dulu, bukan saya comment ya) --}}
        <div id="modalpopupLI" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
            <div class="w-[67vw] h-[5vw] bg-red-500 flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                <div class="w-[66vw] h-[4vw] bg-red-500 flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                    Successfully logged in
                    <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalLI" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
                </div>
            </div>
        </div>
        <script src="{{asset('js/home1.js')}}"></script>
    @endauth

    {{-- Ini pop-up kalau Delete Account {href=profile} (Ini saya hidden dulu, bukan saya comment ya) --}}
    <div id="modalpopupDEL" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
        <div class="w-[67vw] h-[5vw] bg-red-500 flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
            <div class="w-[66vw] h-[4vw] bg-red-500 flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw] flex">
                Your account is successfully deleted
                <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalDEL" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
            </div>
        </div>
    </div>
    <script src="{{asset('js/home3.js')}}"></script>

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
                <div class="registernow absolute ml-[14vw] mt-[10.5vw] flex flex-col justify-center items-center font-nunito font-bold text-[2.5vw]">
                    JOIN NOW!!!
                </div>
            </a>
            <img class="min-w-[100%]" src="{{asset('Assets/SignUpNowBG.png')}}" alt="">
        </div>
    @endguest

    {{-- Banner Home User --}}
    @auth
        <img src="{{asset('Assets/UserBanner.png')}}" alt="">
    @endauth

    {{-- Banner Admin --}}
    {{-- <div class="h-fit w-[screen]">
        <a href="">
            <div class="checkreport absolute ml-[11.5vw] mt-[8.75vw] flex flex-col justify-center items-center font-nunito font-bold text-[2vw]">
                CHECK REPORT
            </div>
        </a>
        <img src="{{asset('Assets/BannerAdmin.png')}}" alt="">
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
            <script src="carousel/js/jquery.min.js"></script>
            <script src="carousel/js/popper.js"></script>
            <script src="carousel/js/bootstrap.min.js"></script>
            <script src="carousel/js/owl.carousel.min.js"></script>
            <script src="carousel/js/main.js"></script>
        </div>
    </div>
    @include('footer')
</body>
</html>
