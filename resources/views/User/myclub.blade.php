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
    <title>MyClub</title>
  @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden">
    {{-- Navbar Options --}}

    @guest
        @include('Non-User.navbarNU')
    @endguest

    @auth
        @include('User.navbarUser')
    @endauth
    {{-- @include('Admin.navbarA') --}}
    {{-- modal pop up --}}
    <div class="bigcontainer">
        <div class="container mt-[9vw] w-[87vw]">
            <div class="headercontainer flex justify-start items-center mt-[1.5vw] ml-[5vw]">
                <p class="text-[2vw] ml-[1vw] font-bold font-nunito">My Club</p>
            </div>
            <div class="rowcontainer">
                @if ($xtras->count())
                    @foreach ($xtras as $xtra)
                        {{-- @dd($xtra->latest_schedule) --}}
                        {{-- {{ optional(optional($xtra->leader)->userXmas)->name }} --}}
                        {{-- {{ $xtra->leader?->NIP . '...' . $nip }} --}}
                        <a href="/xtralist/{{ $xtra->kdExtracurricular }}">
                            @if($xtra->leader?->NIP == $nip)
                                {{-- INI TEMPLATE KALAU KETUA (ADA EDITNYA) --}}
                                <div class="flex flex-col">
                                    <div class="xtraboxcontainer flex justify-center items-center">
                                        <div class="mr-[0.5vw] xtrabox flex justify-center items-center">
                                            <img src="{{asset('Assets/$xtra->logo') }}" alt="{{ $xtra->name }}">
                                        </div>
                                        <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                            <div class="text-[1.9vw] underline font-extrabold mb-[1vw]">{{ $xtra->name }}</div>
                                            <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ implode(' ', array_slice(explode(' ', optional(optional($xtra->leader)->userXmas)->name), 0, 2)) }}</div>
                                                @if ($xtra->leader === NULL)
                                                    <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader Yet</div>
                                                @endif
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ date('D', strtotime($xtra->latest_schedule?->date)) . ', ' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . ' - ' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd)) }}</div>
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ $xtra->latest_schedule?->location }}</div>
                                                @if ($xtra->latest_schedule === NULL)
                                                    <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule Yet</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute w-fit h-fit flex justify-end mt-[18vw] ml-[29vw]">
                                        <div class="w-fit h-fit">
                                            {{-- TEMBAK LINK EDIT (KE EXTRAPAGE VRERSI EDIT) --}}
                                            <a href="">
                                                <img class="w-[2.5vw] h-[2.5vw] hover:scale-[1.1]" src="{{asset('Assets/edit.png')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="w-[2.5vw] h-[2.5vw]">
                                            {{-- TEMBAK CHAT --}}
                                            <a href="">
                                                <img class="ml-[1.5vw] w-[2.5vw] h-[2.5vw] hover:scale-[1.1]" src="{{asset('Assets/chat.png')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                {{-- INI TEMPLATE KALAU CUMA ANGGOTA ESKUL --}}
                                <div class="flex flex-col">
                                    <div class="xtraboxcontainer flex justify-center items-center">
                                        <div class="mr-[0.5vw] xtrabox flex justify-center items-center">
                                            <img src="{{asset('Assets/$xtra->logo') }}" alt="{{ $xtra->name }}">
                                        </div>
                                        <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                            <div class="text-[1.9vw] underline font-extrabold mb-[1vw]">{{ $xtra->name }}</div>
                                            <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ implode(' ', array_slice(explode(' ', optional(optional($xtra->leader)->userXmas)->name), 0, 2)) }}</div>
                                                @if ($xtra->leader === NULL)
                                                    <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader Yet</div>
                                                @endif
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ date('D', strtotime($xtra->latest_schedule?->date)) . ', ' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . ' - ' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd)) }}</div>
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ $xtra->latest_schedule?->location }}</div>
                                                @if ($xtra->latest_schedule === NULL)
                                                    <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule Yet</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute w-fit h-fit flex justify-end mt-[18vw] ml-[33vw]">
                                        <div class="w-[2.5vw] h-[2.5vw]">
                                            {{-- TEMBAK LINK CHAT DISINI --}}
                                            <a href="">
                                                <img class=" w-[2.5vw] h-[2.5vw] hover:scale-[1.1]" src="{{asset('Assets/chat.png')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </a>
                    @endforeach
                @else
                    <p class="text-center text-[1.7vw] flex justify-center items-center font-semibold mb-[3vw] h-[18vw]">No Extracurricular.</p>
                @endif
            </div>
        </div>
    </div>
    <div class="h-[4vw]"></div>
    <p id="valueList"></p>
    <script src="{{asset('js/xtralist.js')}}"></script>
    {{-- Footer --}}
    {{-- @include('footer') --}}
</body>
</html>
