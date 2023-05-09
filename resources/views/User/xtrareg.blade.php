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
    <script src="{{asset('js/Register/login.js')}}"></script>
    <title>Xtra Registration</title>
    @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden">
    @include('User.NavbarUser')
    {{-- Cuma buat space dari navbar --}}
    <div class="w-screen h-[5.25vw]"></div>
    {{--  --}}
    <div class="w-screen flex h-[41.7vw]">
        <div class="absolute ml-[56vw] h-[5vw] w-[40vw] flex items-center justify-start font-nunito text-[5vw] mt-[3vw] text-black font-bold">Xtra&nbsp<mark class="text-white bg-transparent">Registration</mark></div>
        <div class="w-[66%] h-[41.7vw] flex items-center">
            <img class="w-[45vw] h-[45vw] mr-[10] mb-[4vw]" src="{{asset('Assets/LogoXMaSGray.png')}}" alt="">
        </div>
        <div class="w-[34%] bg-[#7599C1] h-[41.7vw]"></div>
        <div class="absolute ml-[24vw] w-[61vw] h-[24vw] bg-[#395474] mt-[11vw] rounded-[1vw] flex flex-col items-center justify-center">
            <div class="w-[51vw] h-[18vw]">
                <div class="mt-[1vw] w-[25vw] rounded-[0.3vw]">
                    {{-- <form id="xtrareg" action="/xtrareg" method="POST" onsubmit="return eventsubmits(this)" autocomplete="off">
                        @csrf
                        <div class="bg-gray-50 border border-gray-300 border-[0.1vw] text-gray-900 text-sm focus:border-blue-500 block w-[25vw] h-[3vw] p-[0.2vw] flex items-center cursor-pointer" onclick="sel.style='display:flex'" onmousedown="isi.style='display:none'" >
                            <div class="w-[25vw] text-[1.4vw]">
                                <div id="isi">
                                    Choose one of your extracurricular
                                </div>
                            </div>
                            <div id="isi1" class="absolute w-[25vw] hidden text-[1.4vw]">
                                Xtracurricular Have Been Choosen
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg"  class="ml-[1vw]" width="2vw" height="2vw" viewBox="0 0 24 24"><path fill="currentColor" d="m12 15.4l-6-6L7.4 8l4.6 4.6L16.6 8L18 9.4l-6 6Z"/></svg>
                        </div>
                        <div id="sel" class="hidden absolute bg-gray-50 border border-gray-300 border-[0.1vw] text-gray-900 text-sm focus:border-blue-500 block w-[25vw] h-[7vw] p-[0.2vw] flex flex-col justify-center">
                            <div class="overflow-scroll scrollbar-hide w-[100%] h-fit">
                                @foreach ($xtras as $xtr)
                                    <div class="flex w-[25vw] h-[2.2vw] text-[1vw] items-center hover:bg-[#D3F1FF]">
                                        <input type="radio" id="xtrachs" name="xtrachs" class="w-[2vw] h-[2vw]" onclick="sel.style='display:none'" onmousedown="isi1.style='display:block'"style="background-color: #ffffff" value="{{ $xtr->kdExtracurricular }}">
                                        <label class="ml-[1vw] text-[1.5vw]">{{$xtr->name}}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </form> --}}
                    <form id="xtrareg" action="/xtrareg" method="POST" onsubmit="return eventsubmits(this)" autocomplete="off">
                        @csrf
                        <div class="bg-gray-50 border border-gray-300 border-[0.1vw] text-gray-900 text-sm focus:border-blue-500 block w-[25vw] h-[3vw] p-[0.2vw] flex items-center cursor-pointer" onclick="sel.style='display:flex'" onmousedown="isi.style='display:none'" >
                            <div class="w-[25vw] text-[1.4vw]">
                                <div id="isi">
                                    Choose one of your extracurricular
                                </div>
                            </div>
                            <div id="isi1" class="absolute w-[25vw] hidden text-[1.4vw]">
                                Xtracurricular Have Been Choosen
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg"  class="ml-[1vw]" width="2vw" height="2vw" viewBox="0 0 24 24"><path fill="currentColor" d="m12 15.4l-6-6L7.4 8l4.6 4.6L16.6 8L18 9.4l-6 6Z"/></svg>
                        </div>
                        <div id="sel" class="hidden absolute bg-gray-50 border border-gray-300 border-[0.1vw] text-gray-900 text-sm focus:border-blue-500 block w-[25vw] h-[7vw] p-[0.2vw] flex flex-col justify-center">
                            <div class="overflow-scroll scrollbar-hide w-[100%] h-fit">
                                @foreach ($xtras as $xtr)
                                    <div class="flex w-[25vw] h-[2.2vw] text-[1vw] items-center hover:bg-[#D3F1FF]">
                                        <input type="radio" id="xtrachs" name="xtrachs" class="w-[2vw] h-[2vw]" onclick="sel.style='display:none'" onmousedown="isi1.style='display:block'"style="background-color: #ffffff" value="{{ $xtr->kdExtracurricular }}">
                                        <label class="ml-[1vw] text-[1.5vw]">{{$xtr->name}}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </form>
                </div>
                <form id="xtrareg" action="/xtrareg" method="POST" autocomplete="off" onsubmit="return eventsubmits(this)">
                    @csrf
                    <div class="text-white text-[2vw] mt-[3vw] font-nunito">
                        What’s the reason you want to join this Xtra?
                    </div>
                    <div class="w-[35vw] h-[3vw] bg-[#1B2F45] rounded-[1vw] flex justify-center items-end mt-[1vw]">
                        <div class="w-[31vw] border-b-[0.2vw] mb-[0.5vw] flex items-center">
                            <input type="text" id="reason" name="reason" class="w-[100%] h-[1.8vw] bg-[#1B2F45] outline-none text-white text-[1.5vw]">
                        </div>
                    </div>
                    <button class="flex w-[100%] justify-end mt-[3vw]">
                        <div class="w-[12vw] h-[2.5vw] bg-[#1B2F45] rounded-[0.2vw] text-white flex justify-center items-center hover:bg-black hover:cursor-pointer text-[1.5vw]">Register</div>
                    </button>
                </form>
            </div>
        </div>
        <script src="{{asset('js/User/xtrareg.js')}}"></script>
    </div>
</body>
</html>
