<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="carousel/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link rel="stylesheet" href="carousel/css/style.css">
  <link rel="stylesheet" href="css/home.css">
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
    @endguest

    @auth
        @include('User.navbarUser')
        {{-- welkam, {{auth()->user()->name}} --}}
    @endauth

    {{-- @include('Admin.navbarAdmin')
    {{-- Header --}}
    @include('header')

    {{-- Upcoming Extracurricular Segment --}}
    <div class="segment">
        <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-black flex text-[1.75vw] items-center justify-center">
            Upcoming Extracurriculars
        </div>
        <div class="h-[30vw] w-[screen] flex items-center">
            <div class="featured-carousel owl-carousel">
                @if ($xtras->count())
                    @foreach ($xtras as $xtr)
                    <a href="/xtralist/{{ $xtr->kdExtracurricular }}">
                        <div class="upcomingxtrahover h-[25vw] flex items-center font-noto">
                            <div class="upcomingxtra">
                                <div class="logo">
                                    <div class="photo">
                                        {{-- Pass Xtra BG Here --}}
                                        <img src="Assets/RunningBg.jpeg" alt="">
                                    </div>
                                    <div class="logoxtra">
                                        {{-- Pass Xtra Logo Here--}}
                                        {{-- <img src="Assets/RunningLogo.png" alt=""> --}}
                                        <img src="Assets/{{ $xtr->logo }}" alt="">

                                    </div>
                                </div>
                                <div class="title text-[1.5vw] font-nunito font-semibold">
                                    {{-- Pass Xtra Name Here --}}
                                    {{ $xtr->name }}
                                </div>
                                <div class="content text-white text-[1.5vw]">
                                    <h3>
                                        {{-- Pass Xtra Location Here --}}
                                        {{$xtr->latest_schedule?->location}}

                                        {{-- {{ optional(optional($xtr->schedules)->schedule)->location }} --}}
                                    </h3>
                                    <h3>
                                        {{-- Pass Xtra Schedule Here --}}
                                        {{ date('D', strtotime($xtr->latest_schedule?->date)) . ', ' . date('d', strtotime($xtr->latest_schedule?->date)) . '/' . date('m', strtotime($xtr->latest_schedule?->date)) . '/' . date('Y', strtotime($xtr->latest_schedule?->date)) }}
                                    </h3>
                                    <h3>
                                        {{-- Pass Xtra Contact Here --}}
                                        {{'+' . $xtr->leader?->userXmas?->phoneNumber}}

                                    </h3>
                                </div>
                            </div>
                        </div>
                    </a>
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
            <img class="min-w-[100%]" src="Assets/SignUpNowBG.png" alt="">
        </div>
    @endguest

    {{-- Banner Home User --}}
    @auth
        <img src="Assets/UserBanner.png" alt="">
    @endauth

    {{-- Banner Admin --}}
    {{-- <div class="h-fit w-[screen]">
        <a href="">
            <div class="checkreport absolute ml-[11.5vw] mt-[8.75vw] flex flex-col justify-center items-center font-nunito font-bold text-[2vw]">
                CHECK REPORT
            </div>
        </a>
        <img src="Assets/BannerAdmin.png" alt="">
    </div> --}}

    {{-- Extracurricular Segment --}}
    <div class="segment">
        <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-black flex text-[1.75vw] items-center justify-center">
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
                                        {{-- Pass Xtra Name Here --}}
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
