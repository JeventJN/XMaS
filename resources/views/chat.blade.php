<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('carousel/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('carousel/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <link rel="stylesheet" href="{{asset('carousel/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
  <title>User Home</title>
  @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden overflow-y-hidden">
    <form class="w-screen h-screen flex" method="POST" autocomplete="off">
        <div class="w-[27%] h-screen bg-[#395474] flex flex-col">
            {{-- ini container untuk profile chat --}}
            <div class="w-full min-h-[6.5vw] border-b-[0.1vw] border-white flex items-center justify-around">
                <svg xmlns="http://www.w3.org/2000/svg" width="4.5vw" height="4.5vw" viewBox="0 0 24 24" stroke="#395474" stroke-width="0.1vw"><path fill="white" d="M11.8 13H15q.425 0 .713-.288T16 12q0-.425-.288-.713T15 11h-3.2l.9-.9q.275-.275.275-.7t-.275-.7q-.275-.275-.7-.275t-.7.275l-2.6 2.6q-.3.3-.3.7t.3.7l2.6 2.6q.275.275.7.275t.7-.275q.275-.275.275-.7t-.275-.7l-.9-.9Zm.2 9q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Zm0-2q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20Zm0-8Z"/></svg>
                <div class="w-[20vw] h-[4vw] bg-[#E5E5E5] mr-[1vw] rounded-[1vw] flex justify-around flex items-center">
                    {{-- Masukin foto profile disini --}}
                    <div class="w-[3.5vw] h-[3.5vw] rounded-[50%]">
                        <img class="w-[3.5vw] h-[3.5vw] rounded-[50%] border border-[#114F94] border-[0.1vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="w-[14vw] h-[3.5vw] mr-[0.5vw] flex flex-col items-start rounded-[1vw] justify-center leading-[1.3vw]">
                        <div class="text-[1vw] font-nunito font-bold">Vnaneesa Kwan</div>
                        <div class="text-[1vw] font-nunito text-[#797C81] font-bold">Member</div>
                    </div>
                </div>
            </div>
            <div class="max-w-full max-h-full bg-[#395474] flex flex-col overflow-scroll scrollbar-hide">
                {{-- Ini container untuk chat box --}}
                <div class="w-full min-h-[5vw] border-b-[0.1vw] border-white flex items-center justify-around">
                    {{-- Masukin logo xtra disini --}}
                    <div class="min-w-[4vw] h-[4vw] rounded-[50%] ">
                        <img class="w-[4vw] h-[4vw] rounded-[50%] border border-black border-[0.1vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="min-w-[16vw] min-h-[4vw] flex flex-col leading-[1.8vw] justify-center items-start">
                        {{-- Nama eskul di container chat --}}
                        <div class="font-nunito text-[1.8vw] underline text-white">Basketball</div>
                        {{-- Nama oranng masukin di mark --}}
                        <div class="font-nunito text-[1vw] text-white break-normal max-w-[16vw]"><mark class="bg-transparent text-white">Masukin nama disini</mark> : Zaka ganteng</div>
                    </div>
                    <div class="min-w-[4vw] min-h-[4vw] flex flex-col items-center justify-around">
                        <div class="text-[0.8vw] text-white">Just Now</div>
                        <div class="bg-[#56B8E6] w-[1.5vw] h-[1.5vw] rounded-[50%] flex justify-center text-[0.8vw] text-white items-center">5</div>
                    </div>
                </div>
                <div class="w-full min-h-[5vw] border-b-[0.1vw] border-white flex items-center justify-around">
                    {{-- Masukin logo xtra disini --}}
                    <div class="min-w-[4vw] h-[4vw] rounded-[50%] ">
                        <img class="w-[4vw] h-[4vw] rounded-[50%] border border-black border-[0.1vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="min-w-[16vw] min-h-[4vw] flex flex-col leading-[1.8vw] justify-center items-start">
                        {{-- Nama eskul di container chat --}}
                        <div class="font-nunito text-[1.8vw] underline text-white">Basketball</div>
                        {{-- Nama oranng masukin di mark --}}
                        <div class="font-nunito text-[1vw] text-white break-normal max-w-[16vw]"><mark class="bg-transparent text-white">Masukin nama disini</mark> : Zaka ganteng</div>
                    </div>
                    <div class="min-w-[4vw] min-h-[4vw] flex flex-col items-center justify-around">
                        <div class="text-[0.8vw] text-white">Just Now</div>
                        <div class="bg-[#56B8E6] w-[1.5vw] h-[1.5vw] rounded-[50%] flex justify-center text-[0.8vw] text-white items-center">5</div>
                    </div>
                </div>
                <div class="w-full min-h-[5vw] border-b-[0.1vw] border-white flex items-center justify-around">
                    {{-- Masukin logo xtra disini --}}
                    <div class="min-w-[4vw] h-[4vw] rounded-[50%] ">
                        <img class="w-[4vw] h-[4vw] rounded-[50%] border border-black border-[0.1vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="min-w-[16vw] min-h-[4vw] flex flex-col leading-[1.8vw] justify-center items-start">
                        {{-- Nama eskul di container chat --}}
                        <div class="font-nunito text-[1.8vw] underline text-white">Basketball</div>
                        {{-- Nama oranng masukin di mark --}}
                        <div class="font-nunito text-[1vw] text-white break-normal max-w-[16vw]"><mark class="bg-transparent text-white">Masukin nama disini</mark> : Zaka ganteng</div>
                    </div>
                    <div class="min-w-[4vw] min-h-[4vw] flex flex-col items-center justify-around">
                        <div class="text-[0.8vw] text-white">Just Now</div>
                        <div class="bg-[#56B8E6] w-[1.5vw] h-[1.5vw] rounded-[50%] flex justify-center text-[0.8vw] text-white items-center">5</div>
                    </div>
                </div>
                <div class="w-full min-h-[5vw] border-b-[0.1vw] border-white flex items-center justify-around">
                    {{-- Masukin logo xtra disini --}}
                    <div class="min-w-[4vw] h-[4vw] rounded-[50%] ">
                        <img class="w-[4vw] h-[4vw] rounded-[50%] border border-black border-[0.1vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="min-w-[16vw] min-h-[4vw] flex flex-col leading-[1.8vw] justify-center items-start">
                        {{-- Nama eskul di container chat --}}
                        <div class="font-nunito text-[1.8vw] underline text-white">Basketball</div>
                        {{-- Nama oranng masukin di mark --}}
                        <div class="font-nunito text-[1vw] text-white break-normal max-w-[16vw]"><mark class="bg-transparent text-white">Masukin nama disini</mark> : Zaka ganteng</div>
                    </div>
                    <div class="min-w-[4vw] min-h-[4vw] flex flex-col items-center justify-around">
                        <div class="text-[0.8vw] text-white">Just Now</div>
                        <div class="bg-[#56B8E6] w-[1.5vw] h-[1.5vw] rounded-[50%] flex justify-center text-[0.8vw] text-white items-center">5</div>
                    </div>
                </div>
                <div class="w-full min-h-[5vw] border-b-[0.1vw] border-white flex items-center justify-around">
                    {{-- Masukin logo xtra disini --}}
                    <div class="min-w-[4vw] h-[4vw] rounded-[50%] ">
                        <img class="w-[4vw] h-[4vw] rounded-[50%] border border-black border-[0.1vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="min-w-[16vw] min-h-[4vw] flex flex-col leading-[1.8vw] justify-center items-start">
                        {{-- Nama eskul di container chat --}}
                        <div class="font-nunito text-[1.8vw] underline text-white">Basketball</div>
                        {{-- Nama oranng masukin di mark --}}
                        <div class="font-nunito text-[1vw] text-white break-normal max-w-[16vw]"><mark class="bg-transparent text-white">Masukin nama disini</mark> : Zaka ganteng</div>
                    </div>
                    <div class="min-w-[4vw] min-h-[4vw] flex flex-col items-center justify-around">
                        <div class="text-[0.8vw] text-white">Just Now</div>
                        <div class="bg-[#56B8E6] w-[1.5vw] h-[1.5vw] rounded-[50%] flex justify-center text-[0.8vw] text-white items-center">5</div>
                    </div>
                </div>
                <div class="w-full min-h-[5vw] border-b-[0.1vw] border-white flex items-center justify-around">
                    {{-- Masukin logo xtra disini --}}
                    <div class="min-w-[4vw] h-[4vw] rounded-[50%] ">
                        <img class="w-[4vw] h-[4vw] rounded-[50%] border border-black border-[0.1vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="min-w-[16vw] min-h-[4vw] flex flex-col leading-[1.8vw] justify-center items-start">
                        {{-- Nama eskul di container chat --}}
                        <div class="font-nunito text-[1.8vw] underline text-white">Basketball</div>
                        {{-- Nama oranng masukin di mark --}}
                        <div class="font-nunito text-[1vw] text-white break-normal max-w-[16vw]"><mark class="bg-transparent text-white">Masukin nama disini</mark> : Zaka ganteng</div>
                    </div>
                    <div class="min-w-[4vw] min-h-[4vw] flex flex-col items-center justify-around">
                        <div class="text-[0.8vw] text-white">Just Now</div>
                        <div class="bg-[#56B8E6] w-[1.5vw] h-[1.5vw] rounded-[50%] flex justify-center text-[0.8vw] text-white items-center">5</div>
                    </div>
                </div>
                <div class="w-full min-h-[5vw] border-b-[0.1vw] border-white flex items-center justify-around">
                    {{-- Masukin logo xtra disini --}}
                    <div class="min-w-[4vw] h-[4vw] rounded-[50%] ">
                        <img class="w-[4vw] h-[4vw] rounded-[50%] border border-black border-[0.1vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="min-w-[16vw] min-h-[4vw] flex flex-col leading-[1.8vw] justify-center items-start">
                        {{-- Nama eskul di container chat --}}
                        <div class="font-nunito text-[1.8vw] underline text-white">Basketball</div>
                        {{-- Nama oranng masukin di mark --}}
                        <div class="font-nunito text-[1vw] text-white break-normal max-w-[16vw]"><mark class="bg-transparent text-white">Masukin nama disini</mark> : Zaka ganteng</div>
                    </div>
                    <div class="min-w-[4vw] min-h-[4vw] flex flex-col items-center justify-around">
                        <div class="text-[0.8vw] text-white">Just Now</div>
                        <div class="bg-[#56B8E6] w-[1.5vw] h-[1.5vw] rounded-[50%] flex justify-center text-[0.8vw] text-white items-center">5</div>
                    </div>
                </div>
                <div class="w-full min-h-[5vw] border-b-[0.1vw] border-white flex items-center justify-around">
                    {{-- Masukin logo xtra disini --}}
                    <div class="min-w-[4vw] h-[4vw] rounded-[50%] ">
                        <img class="w-[4vw] h-[4vw] rounded-[50%] border border-black border-[0.1vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="min-w-[16vw] min-h-[4vw] flex flex-col leading-[1.8vw] justify-center items-start">
                        {{-- Nama eskul di container chat --}}
                        <div class="font-nunito text-[1.8vw] underline text-white">Basketball</div>
                        {{-- Nama oranng masukin di mark --}}
                        <div class="font-nunito text-[1vw] text-white break-normal max-w-[16vw]"><mark class="bg-transparent text-white">Masukin nama disini</mark> : Zaka ganteng</div>
                    </div>
                    <div class="min-w-[4vw] min-h-[4vw] flex flex-col items-center justify-around">
                        <div class="text-[0.8vw] text-white">Just Now</div>
                        <div class="bg-[#56B8E6] w-[1.5vw] h-[1.5vw] rounded-[50%] flex justify-center text-[0.8vw] text-white items-center">5</div>
                    </div>
                </div>
            </div>
            <div class="w-full h-[4.35vw] flex justify-end items-center border-t border-t-[0.1vw]">
                {{-- Notifikasi --}}
                <div class="bg-[#1B2F45] w-fit h-[2vw] mr-[1vw] rounded-[0.5vw] flex justify-center text-[1.2vw] text-white items-center">
                    <div class="w-[0.5vw]"></div>
                    5 notification(s) from 2 group(s)
                    <div class="w-[0.5vw]"></div>
                </div>
            </div>
        </div>
        <div class="ml-[27%] w-[73%] min-h-[6.5vw] border-b-[0.1vw] border-white flex items-center justify-start bg-[#1B2F45] fixed">
            {{-- ini header --}}
            <div class="min-w-[5vw] h-[5vw] rounded-[50%] ml-[1vw]">
                <img class="w-[5vw] h-[5vw] rounded-[50%] border border-white border-[0.15vw]" src="Assets/RunningLogo.png" alt="">
            </div>
            <div class="ml-[0.5vw] w-screen h-[3.5vw] mr-[0.5vw] flex flex-col items-start rounded-[1vw] justify-center leading-[1.8vw]">
                <div class="text-[1.8vw] text-white font-nunito underline">Running</div>
                <div class="w-screen text-[1vw] text-white flex">
                    <div class="text-[1vw] font-nunito text-[#797C81] text-white"><mark class="bg-transparent text-white">24</mark> Members</div>
                </div>
            </div>
            {{-- header sampe sini --}}
        </div>
        {{-- dibawah ini full box chat --}}
        <div class="w-[73%] max-h-[38vw] flex flex-col bg-white overflow-y-scroll mt-[5vw] scrollbar-hide">
            {{-- ini pemberitahuan tanggal chat --}}
            <div class="w-full h-fit flex justify-center">
                <div class="w-[8vw] h-[2.5vw] bg-[#1B2F45] flex justify-center items-center text-[1vw] text-white mt-[2vw] rounded-[0.5vw]">Today</div>
            </div>
            {{-- Received Chat --}}
            <div class="w-[45%] h-fit ml-[1vw] mt-[1vw] flex items-end">
                {{-- photo other user --}}
                <div class="max-w-[3.5vw] max-h-[3.5vw] rounded-[50%] bg-blue-500 mb-[1vw]">
                    <img class="max-w-[3.5vw] max-h-[3.5vw] rounded-[50%] border border-black border-[0.1vw]" src="{{asset('Assets/RunningLogo.png')}}" alt="">
                </div>
                {{-- Bubble chat other user --}}
                <div class="w-fit max-w-[90%] h-fit m-[1vw] mb-[3vw] bg-[#1B2F45] rounded-[0.5vw]">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute rotate-[100deg] mt-[10vw]" width="3vw" height="3vw" viewBox="0 0 24 24"><path fill="#1B2F45" d="M1 21h22L12 2"/></svg> --}}
                    <div class="flex font-nunito justify-between w-[90%] h-fit ml-[1vw] mt-[1vw] mr-[1vw] mb-[0.5vw] items-center">
                        {{-- Chat time --}}
                        <div class="text-[0.6vw] text-white">
                            05.00
                        </div>
                        <div class="w-[1vw]"></div>
                        {{-- Name - Position --}}
                        <div class="text-[1.1vw] text-white text-[#FFF172] underline">
                            Jevent Natthannael - Leader
                        </div>
                    </div>
                    <p class="font-nunito text-[1vw] text-white ml-[1vw] mb-[1vw] mr-[1vw]">Story of my life. I take her home. I spent all night to her warm and time is frozen. Story of my life. I give her hope. I spent her love until she broke inside. The story of my life. </p>
                </div>
            </div>
            {{-- Sended Chat --}}
            <div class="ml-[54%] w-[45%] h-fit mt-[1vw] flex items-end justify-end">
                {{-- Bubble chat User --}}
                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute mb-[2.2vw] mr-[3.6vw] rotate-[20deg]" width="3vw" height="3vw" viewBox="0 0 24 24"><path fill="#114F94" d="M1 21h22L12 2"/></svg> --}}
                <div class="w-fit max-w-[90%] h-fit m-[1vw] mb-[3vw] bg-[#114F94] rounded-[0.5vw]">
                    <div class="flex font-nunito justify-between w-[90%] h-fit ml-[1vw] mt-[1vw] mr-[1vw] mb-[0.5vw] items-center">
                        {{-- Chat time --}}
                        <div class="text-[0.6vw] text-white">
                            05.00
                        </div>
                        <div class="w-[1vw]"></div>
                        {{-- Nmae - Position --}}
                        <div class="text-[1.1vw] text-white text-[#FFF172] underline">
                            Jevent Natthannael - Leader
                        </div>
                    </div>
                    <p class="font-nunito text-[1vw] text-white ml-[1vw] mb-[1vw] mr-[1vw]">Story of my life - One Direction</p>
                </div>
                {{-- photo User --}}
                <div class="max-w-[3.5vw] max-h-[3.5vw] rounded-[50%] bg-blue-500 mb-[1vw]">
                    <img class="max-w-[3.5vw] max-h-[3.5vw] rounded-[50%] border border-black border-[0.1vw]" src="{{asset('Assets/RunningLogo.png')}}" alt="">
                </div>
            </div>
             {{-- Received Chat --}}
             <div class="w-[45%] h-fit ml-[1vw] mt-[1vw] flex items-end">
                {{-- photo other user --}}
                <div class="max-w-[3.5vw] max-h-[3.5vw] rounded-[50%] bg-blue-500 mb-[1vw]">
                    <img class="max-w-[3.5vw] max-h-[3.5vw] rounded-[50%] border border-black border-[0.1vw]" src="{{asset('Assets/RunningLogo.png')}}" alt="">
                </div>
                {{-- Bubble chat other user --}}
                <div class="w-fit max-w-[90%] h-fit m-[1vw] mb-[3vw] bg-[#1B2F45] rounded-[0.5vw]">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="absolute rotate-[100deg] mt-[10vw]" width="3vw" height="3vw" viewBox="0 0 24 24"><path fill="#1B2F45" d="M1 21h22L12 2"/></svg> --}}
                    <div class="flex font-nunito justify-between w-[90%] h-fit ml-[1vw] mt-[1vw] mr-[1vw] mb-[0.5vw] items-center">
                        {{-- Chat time --}}
                        <div class="text-[0.6vw] text-white">
                            05.00
                        </div>
                        <div class="w-[1vw]"></div>
                        {{-- Name - Position --}}
                        <div class="text-[1.1vw] text-white text-[#FFF172] underline">
                            Jevent Natthannael - Leader
                        </div>
                    </div>
                    <p class="font-nunito text-[1vw] text-white ml-[1vw] mb-[1vw] mr-[1vw]">Story of my life. I take her home. I spent all night to her warm and time is frozen. Story of my life. I give her hope. I spent her love until she broke inside. The story of my life. </p>
                </div>
            </div>
            {{-- ini footer box chat --}}
            <div class="w-full h-[43vw] bg-white"></div>
            <div class="w-[73%] h-[4vw] bg-[#1B2F45] flex items-center justify-around fixed mt-[38vw]">
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-[1vw]" width="3vw" height="3vw" viewBox="0 0 24 24"><path fill="white" d="M12 17.5q1.875 0 3.188-1.313T16.5 13q0-1.875-1.313-3.188T12 8.5q-1.875 0-3.188 1.313T7.5 13q0 1.875 1.313 3.188T12 17.5ZM4 21q-.825 0-1.413-.588T2 19V7q0-.825.588-1.413T4 5h3.15L9 3h6l1.85 2H20q.825 0 1.413.588T22 7v12q0 .825-.588 1.413T20 21H4Z"/></svg>
                <div class="w-[62vw] h-[4vw] flex items-center">
                    <div class="w-[62vw] h-[2.5vw] bg-[#E5E5E5] rounded-[1vw] flex justify-start items-center" autocomplete="off" method="POST" action="chat">
                        <textarea class="ml-[1vw] w-[60vw] bg-[#E5E5E5] text-[1.3vw] outline-none break-normal max-h-[2vw] scrollbar-hide italic focus:not-italic" style="resize:none;" placeholder="Type a message" type="text"></textarea>
                    </div>
                </div>
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-[1vw]" width="2vw" height="2vw" viewBox="0 0 24 24"><path fill="white" d="M1.946 9.316c-.522-.175-.526-.456.011-.635L21.043 2.32c.529-.176.832.12.684.638l-5.453 19.086c-.151.529-.456.547-.68.045L12 14l6-8l-8 6l-8.054-2.684Z"/></svg>
                </button>
            </div>
        </div>
    </form>
</body>
</html>
