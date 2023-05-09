<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="z-50 fixed w-screen h-[5.25vw] bg-[#1B2F45] flex items-center opacity-80">
        <div class="content w-[48%]">
            <img class="w-[10vw] h-[5vw] ml-[1vw]" src="{{ asset('Assets/LogoXMaS.png') }}" alt="">
        </div>
        <div class="content w-[70%] font-nunito text-[1.5vw] text-white flex justify-between items-center mr-[3vw]">
            <a class="w-[8vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] flex items-center justify-center rounded-[1.6vw]"
                href="/home">
                Home
            </a>
            <a class="w-[10vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] flex items-center justify-center rounded-[1.6vw]"
                href="/xtralistNU">
                Xtra List
            </a>
            <a class="w-[16vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45]  flex items-center justify-center rounded-[1.6vw]"
                href="/xtrareg">
                Xtra Registration
            </a>
            <a class="w-[8.75vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] flex items-center justify-center rounded-[1.6vw] mr-[1vw]"
                href="/">
                MyClub
            </a>
            <a class="w-[5vw] h-[5vw] flex items-center justify-center rounded-[50%] bg-red-500" href="/">
                @if (Auth::check() && Auth::user()->photo)
                    @if (Illuminate\Support\Str::contains(Auth::user()->photo, "database-assets"))
                        <img class="w-[5vw] h-[5vw] rounded-[50%]" src="{{ asset('storage/' . Auth::user()->photo) }}" alt="{{asset('Assets/UserDP.png')}}">
                    @else
                        <img class="w-[5vw] h-[5vw] rounded-[50%]" src="{{asset('Assets/UserDP.png')}}" alt="{{asset('Assets/UserDP.png')}}">
                    @endif
                @endif
            </a>
        </div>
    </div>
</body>

</html>
