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
    <title>Xtra List</title>
  @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden scrollbar-hide">
    {{-- Navbar Options --}}

    @guest
        @include('Non-User.navbarNU')
    @endguest

    @auth
        @include('User.navbarUser')
    @endauth

    {{-- modal pop up xtralist user--}}
    <div id="modalpopup" class="modal font-nunito">

        <form action="/xtralistNU" id="modal" method="GET">
            @if (request('search'))
                    <input type="hidden" name="search" value={{ request('search') }}>
            @endif
            <svg xmlns="http://www.w3.org/2000/svg" id="hidemodal" class="mt-[1.5vw] ml-[43vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
            <div class="flex flex-col ml-[4vw]">
                <p class="text-[2vw] font-bold">Categories</p>
                <div class="flex items-center">
                    <input type="checkbox" id="Physique" name="Physique" value="Physique" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer" {{ (request('Physique') === NULL) ? '' : 'checked' }} >
                    <label class="ml-[1vw] text-[2vw]" for="Physique">Physique</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="NonPhysique" name="NonPhysique" value="NonPhysique" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer" {{ (request('NonPhysique') === NULL) ? '' : 'checked' }} >
                    <label class="ml-[1vw] text-[2vw]" for="NonPhysique">Non-Physique</label>
                </div>
                <p class="mt-[1vw] text-[2vw] font-bold">Days</p>
                <div class="flex flex-wrap w-[40vw]">
                    <div class="flex items-center w-[8vw] h-[3vw]">
                        <input type="checkbox" id="Mon" name="Mon" value="Mon" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer" {{ (request('Mon') === NULL) ? '' : 'checked' }}>
                        <label class="ml-[1vw] text-[2vw]" for="Mon">Mon</label>
                    </div>
                    <div class="flex items-center w-[8vw] h-[3vw] ml-[2vw]">
                        <input type="checkbox" id="Tue" name="Tue" value="Tue" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer"  {{ (request('Tue') === NULL) ? '' : 'checked' }}>
                        <label class="ml-[1vw] text-[2vw]" for="Tue">Tue</label>
                    </div>
                    <div class="flex items-center w-[8vw] h-[3vw] ml-[2vw]">
                        <input type="checkbox" id="Wed" name="Wed" value="Wed" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer"  {{ (request('Wed') === NULL) ? '' : 'checked' }}>
                        <label class="ml-[1vw] text-[2vw]" for="Wed">Wed</label>
                    </div>
                    <div class="flex items-center w-[8vw] h-[3vw] ml-[2vw]">
                        <input type="checkbox" id="Thu" name="Thu" value="Thu" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer"  {{ (request('Thu') === NULL) ? '' : 'checked' }}>
                        <label class="ml-[1vw] text-[2vw]" for="Thu">Thu</label>
                    </div>
                    <div class="flex items-center w-[8vw] h-[3vw] ml-[0.7vw]">
                        <input type="checkbox" id="Fri" name="Fri" value="Fri" class="checkbox w-[1.5vw] h-[1.5vw] ml-[-0.7vw] underline italic cursor-pointer" {{ (request('Fri') === NULL) ? '' : 'checked' }}>
                        <label class="ml-[1vw] text-[2vw]" for="Fri">Fri</label>
                    </div>
                    <div class="flex items-center w-[8vw] h-[3vw] ml-[2vw]">
                        <input type="checkbox" id="Sat" name="Sat" value="Sat" class="checkbox w-[1.5vw] h-[1.5vw] ml-[-0.7vw] underline italic cursor-pointer" {{ (request('Sat') === NULL) ? '' : 'checked' }}>
                        <label class="ml-[1vw] text-[2vw]" for="Sat">Sat</label>
                    </div>
                    <div class="flex items-center w-[8vw] h-[3vw] ml-[2vw]">
                        <input type="checkbox" id="Sun" name="Sun" value="Sun" class="checkbox w-[1.5vw] h-[1.5vw] ml-[-0.7vw] underline italic cursor-pointer" {{ (request('Sun') === NULL) ? '' : 'checked' }}>
                        <label class="ml-[1vw] text-[2vw]" for="Sun">Sun</label>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mr-[2vw] text-[2vw] mt-[0.5vw] font-bold flex">
                <div id="reset" class="hover:text-[#A1A9B2] mr-[2vw] hover:cursor-pointer" onclick="resetfun()">
                    Reset
                </div>
                <button type="submit" class="hover:text-[#A1A9B2]">
                    Apply
                </button>
            </div>
        </form>
    </div>

    <div class="bigcontainer font-nunito">
        <div class="container mt-[9vw] w-[87vw]">
            <div class="headercontainer flex justify-start items-center mt-[1.5vw] ml-[5vw]">
                <p class="text-[2vw] font-bold font-nunito ml-[1vw]">Xtra List</p>
                <button class="svg ml-[39vw] cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg"  id="showmodal" viewBox="0 0 24 24"><path fill="currentColor" d="M9 5a1 1 0 1 0 0 2a1 1 0 0 0 0-2zM6.17 5a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-7.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 0 1 0-2h1.17zM15 11a1 1 0 1 0 0 2a1 1 0 0 0 0-2zm-2.83 0a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-1.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 1 1 0-2h7.17zM9 17a1 1 0 1 0 0 2a1 1 0 0 0 0-2zm-2.83 0a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-7.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 1 1 0-2h1.17z"/></svg>
                </button>

                {{-- search --}}

                <form action="/xtralistNU" method="GET">
                    @if (request('Physique'))
                            <input type="hidden" name="Physique" value={{ request('Physique') }}>
                    @endif
                    @if (request('NonPhysique'))
                        <input type="hidden" name="NonPhysique" value={{ request('NonPhysique') }}>
                    @endif
                    @if (request('Physique'))
                            <input type="hidden" name="Physique" value={{ request('Physique') }}>
                    @endif
                    @if (request('Mon'))
                        <input type="hidden" name="Mon" value={{ request('Mon') }}>
                    @endif
                    @if (request('Tue'))
                            <input type="hidden" name="Tue" value={{ request('Tue') }}>
                    @endif
                    @if (request('Wed'))
                        <input type="hidden" name="Wed" value={{ request('Wed') }}>
                    @endif
                    @if (request('Thu'))
                            <input type="hidden" name="Thu" value={{ request('Thu') }}>
                    @endif
                    @if (request('Fri'))
                        <input type="hidden" name="Fri" value={{ request('Fri') }}>
                    @endif
                    @if (request('Sat'))
                        <input type="hidden" name="Sat" value={{ request('Sat') }}>
                    @endif
                    @if (request('Sun'))
                        <input type="hidden" name="Sun" value={{ request('Sun') }}>
                    @endif
                    <div class="bg-neutral-100 ml-[1vw] w-[25.5vw] h-[4vw] rounded-[1vw] shadow flex items-center justify-end">
                        <div class="flex items-center justify-center w-[19vw] h-[3.5vw] mr-[1vw] font-nunito text-[1.5vw]">
                            <input class="bg-neutral-100 h-[3.5vw] w-[19vw] no-outline" autocomplete="off" type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
                        </div>
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg mr-[1vw]" viewBox="0 0 24 24"><path fill="currentColor" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.612 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3l-1.4 1.4ZM9.5 14q1.875 0 3.188-1.313T14 9.5q0-1.875-1.313-3.188T9.5 5Q7.625 5 6.312 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z"/></svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="rowcontainer">
                @if ($xtras->count())
                    @foreach ($xtras as $xtra)
                        {{-- @dd($xtra->latest_schedule) --}}
                        <a href="/xtralist/{{ $xtra->kdExtracurricular }}">
                            <div class="xtraboxcontainer flex justify-center items-center">
                                <div class="mr-[0.5vw] xtrabox flex justify-center items-center">
                                    {{-- <img src="{{ $xtra->logo }}" alt="{{ $xtra->name }}"> --}}
                                    <img src="{{ asset('/Assets/' . $xtra->logo) }}" alt="{{ $xtra->name }}">
                                </div>
                                <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                    <div class="text-[1.9vw] font-bold underline mb-[1vw]">{{ Str::limit($xtra->name, 12, '...') }}</div>
                                    <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ implode(' ', array_slice(explode(' ', optional(optional($xtra->leader)->userXmas)->name), 0, 2)) }}</div>
                                        @if ($xtra->leader === NULL)
                                            <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader Yet</div>
                                        @endif
                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ $xtra->latest_schedule ? date('D', strtotime($xtra->latest_schedule?->date)) . ', ' . date('H.i', strtotime($xtra->latest_schedule?->timeStart)) . ' - ' . date('H.i', strtotime($xtra->latest_schedule?->timeEnd))  : ''}}</div>
                                        <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ Str::limit($xtra->latest_schedule?->location, 15, '...') }}</div>
                                        @if ($xtra->latest_schedule === NULL)
                                            <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule Yet</div>
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
                <p class="text-center text-[1.7vw] flex justify-center items-center font-semibold mb-[3vw] h-[18vw]">No Extracurricular.</p>
                @endif
            </div>
        </div>
    </div>
    <div class="h-[4vw]"></div>
    <p id="valueList"></p>
    <script src="{{asset('js/xtralist.js')}}"></script>
    {{-- Footer --}}
    @include('footer')
</body>
</html>
