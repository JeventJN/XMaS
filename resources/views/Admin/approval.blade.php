<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/Non-User/xtralistNU.css')}}">
    <title>Aproval</title>
  @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden scrollbar-hide">
    {{-- Navbar Options --}}

    {{-- @guest
        @include('Non-User.navbarNU')
    @endguest

    @auth
        @include('User.navbarUser')
    @endauth --}}
    @include('Admin.navbarA')
    <div class="w-screen flex justify-center items-center font-nunito">
        <div class="w-[80%] bg-[#E5E5E5] h-fit mt-[12vw] flex flex-col items-center justify-center rounded-[1vw]">
            <div class="w-screen h-[2vw]"></div>
            {{-- FOR EACH DARI SINI --}}
            <div class="w-[95%] h-[5vw] bg-white rounded-[1vw] flex items-center mt-[1vw] mb-[1vw] border border-[0.2vw] border-black flex">
                <div class="text-[1.5vw] ml-[1vw] w-[65%]">
                    <mark class="bg-white font-bold">Jevent Natthannael</mark> as <mark class="bg-white font-bold">Running</mark> Xtra's Leader
                </div>
                <div class="flex items-center justify-center w-[11vw] h-[2.5vw] bg-[#398E20] rounded-[0.2vw] text-white hover:bg-[#145003] text-[1.3vw]  hover:cursor-pointer hover:font-bold">
                    Accept
                </div>
                <div class="ml-[2vw] flex items-center justify-center w-[11vw] h-[2.5vw] bg-[#FF0000] rounded-[0.2vw] text-[1.3vw] hover:bg-[#6D0000] hover:cursor-pointer text-black hover:text-white hover:font-bold">
                    Deny
                </div>
            </div>
            {{-- INI BATASNYA --}}
            <div class="w-[95%] h-[5vw] bg-white rounded-[1vw] flex items-center mt-[1vw] mb-[1vw] border border-[0.2vw] border-black flex">
                <div class="text-[1.5vw] ml-[1vw] w-[65%]">
                    <mark class="bg-white font-bold">Jevent Natthannael</mark> as <mark class="bg-white font-bold">Running</mark> Xtra's Leader
                </div>
                <div class="flex items-center justify-center w-[11vw] h-[2.5vw] bg-[#398E20] rounded-[0.2vw] text-white hover:bg-[#145003] text-[1.3vw]  hover:cursor-pointer hover:font-bold">
                    Accept
                </div>
                <div class="ml-[2vw] flex items-center justify-center w-[11vw] h-[2.5vw] bg-[#FF0000] rounded-[0.2vw] text-[1.3vw] hover:bg-[#6D0000] hover:cursor-pointer text-black hover:text-white hover:font-bold">
                    Deny
                </div>
            </div>
            <div class="w-screen h-[2vw]"></div>
        </div>
    </div>
    <div class="mt-[5.8vw]"></div>
    @include('footer')
</body>
</html>
