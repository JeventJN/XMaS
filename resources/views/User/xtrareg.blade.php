<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/Register/login.css')}}">
    <title>Xtra Registration</title>
    <script src="{{asset('js/User/xtrareg.js')}}"></script>

    @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden scrollbar-hide">
    @include('User.NavbarUser')

    @if (session()->has('AlreadyJoined'))
        <div id="modalpopupAlrJOIN" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
            <div class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                <div class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                    You already joined this Xtra
                    <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalAlrJOIN" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
                </div>
            </div>
        </div>
        <script>
            var modal2 = document.getElementById('modalpopupAlrJOIN');
            var hidemodal2 = document.getElementById('hidemodalAlrJOIN');

            hidemodal2.addEventListener('click', closePopup2);

            function closePopup2(){
                modal2.style.display="none";
            }

            setTimeout(() => {
                const modal = document.getElementById("modalpopupAlrJOIN");
                modal.style.display = 'none';
            }, 3000);
        </script>
    @endif

    {{-- Cuma buat space dari navbar --}}
    <div class="w-screen h-[5.25vw]"></div>
    {{--  --}}
    <div class="w-screen flex h-[41.7vw]">
        <div class="absolute ml-[56.5vw] h-[5vw] w-[40vw] flex items-center justify-start font-nunito text-[4.5vw] mt-[3vw] text-black font-bold">Xtra&nbsp<mark class="text-white bg-transparent">Registration</mark></div>
        <div class="w-[66%] h-[41.7vw] flex items-center">
            <img class="w-[45vw] h-[45vw] mr-[10] mb-[4vw]" src="{{asset('Assets/LogoXMaSGray.png')}}" alt="">
        </div>
        <div class="w-[34%] bg-[#7599C1] h-[41.7vw]"></div>
        <div class="absolute ml-[24vw] w-[61vw] h-[24vw] bg-[#395474] mt-[11vw] rounded-[1vw] flex flex-col items-center justify-center">
            <div class="w-[51vw] h-[18vw]">
                <div class="mt-[1vw] w-fit rounded-[0.3vw]">
                    <form id="xtrareg" action="/xtrareg" method="POST" onsubmit="return eventsubmits(this)" autocomplete="off">
                        @csrf
                        {{-- <select name="xtrachs" class="bg-gray-50 border border-gray-300 border-[0.1vw] rounded-[0.3vw] text-gray-900 text-sm focus:border-blue-500 block w-[25vw] h-[2.5vw] p-[0.2vw] focus:text-black text-[2vw]" required> --}}
                        <div class="select-wrap" class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] border-none">
                            <select id="xtrachs" name="xtrachs" class="input bg-gray-50 text-gray-900 text-sm block max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[2vw] scrollbar-hide">
                                <div id="select-box" class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] border-none">
                                    <option selected="false" class="hidden" value="choose">
                                        Choose one of your Xtra
                                    </option>
                                    @foreach ($xtras as $xtr)
                                        <option class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[1.2vw] border-none" name="choose" value="{{ $xtr->kdExtracurricular }}" {{ old('choose') == $xtr->name ? 'selected' : '' }}>{{$xtr->name}}</option>
                                    @endforeach
                                    <input type="hidden" name="user" value="{{str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT)}}">
                                </div>
                            </select>
                        </div>
                        <div class="text-white text-[1.8vw] mt-[5vw] font-nunito">
                            What’s the reason you want to join this Xtra?
                        </div>
                        <div class="w-[35vw] h-[3vw] bg-[#1B2F45] rounded-[1vw] flex justify-center items-end mt-[1vw]">
                            <div class="w-[31vw] border-b-[0.2vw] mb-[0.5vw] flex items-center">
                                <input type="text" name="reason" id="reason" class="w-[100%] h-[1.8vw] bg-[#1B2F45] outline-none text-white text-[1.2vw]">
                            </div>
                        </div>
                        <button class="absolute ml-[-8vw] flex w-[100%] justify-end mt-[1vw]">
                            <div class="w-[11vw] h-[2.5vw] bg-[#1B2F45] rounded-[0.2vw] text-white flex justify-center items-center hover:bg-black hover:cursor-pointer text-[1.3vw] hover:font-bold font-nunito">Register</div>
                        </button>
                        <script src="{{asset('js/User/xtrareg.js')}}"></script>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>
