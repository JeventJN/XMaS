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
                        <div class="upcomingxtrahover h-[25vw] flex items-center font-noto bg-red-300">
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
                                <div class="title text-[1.5vw]">
                                    {{-- Pass Xtra Name Here --}}
                                    {{ $xtr->name }}
                                </div>
                                <div class="content text-white text-[1.5vw]">
                                    <h3>
                                        {{-- Pass Xtra Location Here --}}
                                        RTB
                                    </h3>
                                    <h3>
                                        {{-- Pass Xtra Schedule Here --}}
                                        Rabu, 12/3/2023
                                    </h3>
                                    <h3>
                                        {{-- Pass Xtra Contact Here --}}
                                        082175932808
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                @else
                    <p class="text-center text-[1.7vw] font-semibold mb-[3vw] h-[20vw] justify-center items-center flex">No Extracurricular.</p>
                @endif
                <a href="">
                    <div class="upcomingxtrahover h-[25vw] flex items-center font-noto bg-red-300">
                        <div class="upcomingxtra">
                            <div class="logo">
                                <div class="photo">
                                    {{-- Pass Xtra BG Here --}}
                                    <img src="Assets/RunningBg.jpeg" alt="">
                                </div>
                                <div class="logoxtra">
                                    {{-- Pass Xtra Logo Here--}}
                                    <img src="Assets/RunningLogo.png" alt="">
                                </div>
                            </div>
                            <div class="title text-[1.5vw]">
                                {{-- Pass Xtra Name Here --}}
                                Dance
                            </div>
                            <div class="content text-white text-[1.5vw]">
                                <h3>
                                    {{-- Pass Xtra Location Here --}}
                                    RTB
                                </h3>
                                <h3>
                                    {{-- Pass Xtra Schedule Here --}}
                                    Rabu, 12/3/2023
                                </h3>
                                <h3>
                                    {{-- Pass Xtra Contact Here --}}
                                    082175932808
                                </h3>
                            </div>
                        </div>
                    </div>
                </a>
                {{--  --}}
                @if ($xtras->count())
                @foreach ($xtras as $xtra)
                    {{-- @dd($xtra->latest_schedule) --}}
                    <a href="/xtralist/{{ $xtra->kdExtracurricular }}">
                        <div class="xtraboxcontainer flex justify-center items-center leading-3">
                            <div class="mr-[0.5vw] xtrabox flex justify-center items-center">
                                {{-- <img src="{{ $xtra->logo }}" alt="{{ $xtra->name }}"> --}}
                                <img src="/Assets/{{ $xtra->logo }}" alt="{{ $xtra->name }}">
                            </div>
                            <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito">
                                <div class="text-[1.9vw] font-bold underline mb-[1vw]">{{ $xtra->name }}</div>
                                <div class="leading-normal text-[1.65vw] font-semibold">
                                    <div>{{ optional(optional($xtra->leader)->userXmas)->name }}</div>
                                    @if ($xtra->leader === NULL)
                                        <div>No Leader Yet</div>
                                    @endif
                                    <div>{{ date('D', strtotime($xtra->latest_schedule?->date)) . ', ' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . ' - ' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd)) }}</div>
                                    <div>{{ $xtra->latest_schedule?->location }}</div>
                                    @if ($xtra->latest_schedule === NULL)
                                        <div>No Schedule Yet</div>
                                    @endif
                                </div>

                                {{-- <div class="text-[1.7vw] underline font-extrabold mb-[1vw]">{{ $xtra->name }}</div>
                                <div class="text-[1.7vw] font-semibold mb-[0.5vw]">{{ $xtra->leader?->userXmas?->name }}</div>
                                <div class="text-[1.7vw] font-semibold mb-[0.5vw]">{{ date('D', strtotime($xtra->latest_schedule?->date)) . ',' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . '-' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd)) }}</div>
                                <div class="text-[1.7vw] font-semibold mb-[0.5vw]">{{ ($xtra->latest_schedule ? $xtra->latest_schedule->location : null) ?? 'No Schedule Yet' }}</div> --}}

                                {{-- <div class="text-[1.7vw] underline font-extrabold mb-[1vw]">Running</div> --}}
                                {{-- <div class="text-[1.7vw] font-semibold mb-[0.5vw]">Jevent</div> --}}
                                {{-- <div class="text-[1.7vw] font-semibold mb-[0.5vw]">Wed, 17.00 - 19.00</div>
                                <div class="text-[1.7vw] font-semibold mb-[0.5vw]">RTB</div> --}}
                            </div>
                        </div>
                    </a>
                @endforeach
            @else
                <p class="text-center text-[1.7vw] font-semibold mb-[3vw] h-[20vw] justify-center items-center flex">No Extracurricular.</p>
            @endif
            {{--  --}}
                {{-- Bawah ini boleh hapus --}}
                <a href="">
                    <div class="upcomingxtrahover h-[25vw] flex items-center font-noto">
                        <div class="upcomingxtra">
                            <div class="logo">
                                <div class="photo">
                                    <img src="Assets/RunningBg.jpeg" alt="">
                                </div>
                                <div class="logoxtra">
                                    <img src="Assets/RunningLogo.png" alt="">
                                </div>
                            </div>
                            <div class="title text-[1.5vw]">Running</div>
                            <div class="content text-white text-[1.5vw]">
                                <h3>RTB</h3>
                                <h3>Rabu, 12/3/2023</h3>
                                <h3>082175932808</h3>
                            </div>
                        </div>
                    </div>
                </a>
                {{-- Hapus sampai sini --}}
            </div>
        </div>
    </div>

    {{-- Banner Options --}}

    {{-- Banner Home Non-User --}}
    <div class="h-fit w-screen">
        <a href="">
            <div class="registernow absolute ml-[14vw] mt-[10.5vw] flex flex-col justify-center items-center font-nunito font-bold text-[2.5vw]">
                JOIN NOW!!!
            </div>
        </a>
        <img class="min-w-[100%]" src="Assets/SignUpNowBG.png" alt="">
    </div>

    {{-- Banner Home User --}}
    {{-- <img src="Assets/UserBanner.png" alt=""> --}}

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
            <a href="">
                View All
            </a>
        </h1>
        <div class="h-[30vw] w-[screen] flex items-center">
            <div class="featured-carousel owl-carousel">
                <a href="">
                    <div class="xtrahover h-[25vw] flex items-center justify-center font-noto text-[2vw]">
                        <div class="xtra">
                            <div class="xtralogo">
                                <img src="Assets/RunningLogo.png" alt="">
                            </div>
                            <h3 class="mt-[1vw]">
                                {{-- Pass Xtra Name Here --}}
                                Running
                            </h3>
                        </div>
                    </div>
                </a>
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
