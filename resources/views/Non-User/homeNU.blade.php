<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/Non-User/homeNU.css">
  @vite('resources/css/app.css')
</head>
<body>
    {{-- Navbar Non-User --}}
    <div class="fixed w-screen h-[5.25vw] bg-[#1B2F45] flex items-center opacity-80">
        <div class="content w-[48%]">
            <img class="w-[10vw] h-[5vw] ml-[1vw]" src="Assets/LogoXMaS.png" alt="">
        </div>
        <div class="content w-[70%] font-nunito text-[1.5vw] text-white flex justify-center justify-between mr-[3vw] font-thin">
            <a class="w-[8vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] hover:font-black flex items-center justify-center rounded-[1.6vw]" href="homeNU">
                Home
            </a>
            <a class="w-[10vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] hover:font-black flex items-center justify-center rounded-[1.6vw]" href="xtralistNU">
                Xtra List
            </a>
            <a class="w-[16vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45]  hover:font-black flex items-center justify-center rounded-[1.6vw]" href="login">
                Xtra Registration
            </a>
            <a class="w-[8.75vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] hover:font-black flex items-center justify-center rounded-[1.6vw]" href="login">
                MyClub
            </a>
            <a class="w-[8.75vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] hover:font-black flex items-center justify-center rounded-[1.6vw]" href="login">
                Log In
            </a>
        </div>
    </div>
    {{-- Header --}}
    <div class="pt-[5.25vw] w-full h-[42.335vw] bg-blue-100">
        <div class="bg-cover w-full h-[42.335vw] " style="background-image: url('Assets/Header.png');">
            <div class="w-[41%] h-[42.335vw] bg-[#1B2F45] opacity-70 flex flex-col hover:opacity-100 hover:bg-[#42556A] leading-tight">
                <img class="h-[12vw] mr-[1vw] ml-[1vw] mt-[2vw]" src="Assets/LogoXMaSWord.png" alt="">
                <div class="font-noto text-[2.5vw] text-center mt-[5vw] text-white font-black pl-[3vw] pr-[3vw]">
                    Xmas is a website used to manage all extracurricular activities that have been formed in the RTB and BLI areas.
                </div>
            </div>
        </div>
    </div>
    {{-- Upcoming Extracurricular Segment --}}
    <div class="segment">
        <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-black flex text-[1.75vw] items-center justify-center">
            Upcoming Extracurriculars
        </div>
    </div>

    <div class="bg-cover w-full" style="background-image: url('Assets/SignUpNowBG.png');">
        <a href="">
            <img src="Assets/SignUpNow.png" alt="" class="">
        </a>
    </div>

    <div class="segment">
        <div id="segmentTitle" class="bg-[#49596A] rounded-r-[1vw] text-white font-nunito font-black flex text-[1.75vw] items-center justify-center">
            Extracurriculars
        </div>
    </div>
</body>
</html>
