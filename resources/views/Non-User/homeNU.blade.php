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
  <link rel="stylesheet" href="carouse/lcss/style.css">
  <link rel="stylesheet" href="css/Non-User/homeNU.css">
  @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden">
    {{-- Navbar Non-User --}}
    @include('Non-User.navbarNU')
    {{-- Header --}}
    @include('header')

    {{-- Upcoming Extracurricular Segment --}}
    <div class="segment">
        <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-black flex text-[1.75vw] items-center justify-center">
            Upcoming Extracurriculars
        </div>
        <div class="h-[30vw] w-[screen] flex items-center">
            <div class="featured-carousel owl-carousel">
                <a href="">
                    <div class="upcomingxtrahover h-[25vw] flex items-center font-noto">
                        <div class="upcomingxtra">
                            <div class="logo">
                                <img class="photo" src="Assets/RunningBg.jpeg" alt="">
                                <img class="logoxtra absolute" src="Assets/RunningLogo.png" alt="">
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
                <a href="">
                    <div class="upcomingxtrahover h-[25vw] flex items-center font-noto">
                        <div class="upcomingxtra">
                            <div class="logo">
                                <img class="photo" src="Assets/RunningBg.jpeg" alt="">
                                <img class="logoxtra absolute" src="Assets/RunningLogo.png" alt="">
                            </div>
                            <div class="title text-[1.5vw]">Dance</div>
                            <div class="content text-white text-[1.5vw]">
                                <h3>RTB</h3>
                                <h3>Rabu, 12/3/2023</h3>
                                <h3>082175932808</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-cover w-[screen]" style="background-image: url('Assets/SignUpNowBG.png')">
        <a href="">
            <img src="Assets/SignUpNow.png" alt="" class="w-[40vw] h-[22vw]">
        </a>
    </div>

    {{-- Extracurricular Segment --}}
    <div class="segment">
        <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-black flex text-[1.75vw] items-center justify-center">
            Extracurriculars
        </div>
        <a href="">
            <h1 class="viewall font-noto">View All...</h1>
        </a>
        <div class="h-[30vw] w-[screen] flex items-center">
            <div class="featured-carousel owl-carousel">
                <a href="">
                    <div class="xtrahover h-[25vw] flex items-center justify-center font-noto text-[2vw]">
                        <div class="xtra">
                            <img class="rounded-[50%] p-[2vw]" src="Assets/RunningLogo.png" alt="">
                            <h3>Running</h3>
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
