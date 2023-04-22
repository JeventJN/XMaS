<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/Non-User/xtralistNU.css">
  <title>Xtra List</title>
  @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden">
    {{-- Navbar Options --}}
    @include('Non-User.navbarNU')
    {{-- @include('User.navbarU') --}}
    {{-- @include('Admin.navbarA') --}}
    {{-- modal pop up --}}
    <div id="modalpopup" class="modal">
        <form action="/xtralistNU" id="modal" method="POST">
            <svg xmlns="http://www.w3.org/2000/svg" id="hidemodal" class="mt-[1vw] ml-[43vw] svg cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
            <div class="flex flex-col ml-[4vw]">
                <label class="text-[2vw]" for="">Categories</label>
                <div class="flex items-center">
                    <input type="checkbox" id="Physique" name="Physique" value="Physique" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer">
                    <label class="ml-[1vw] text-[2vw]" for="">Physique</label>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="NonPhysique" name="NonPhysique" value="NonPhysique" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer">
                    <label class="ml-[1vw] text-[2vw]" for="">Non-Physique</label>
                </div>
                <label class="mt-[1vw] text-[2vw]" for="">Days</label>
                <div class="flex flex-wrap w-[25vw]">
                    <div class="flex items-center">
                        <input type="checkbox" id="Mon" name="Mon" value="Mon" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer">
                        <label class="ml-[1vw] text-[2vw]" for="">Mon</label>
                    </div>
                    <div class="flex items-center ml-[3vw]">
                        <input type="checkbox" id="Tue" name="Tue" value="Tue" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer">
                        <label class="ml-[1vw] text-[2vw]" for="">Tue</label>
                    </div>
                    <div class="flex items-center ml-[3vw]">
                        <input type="checkbox" id="Wed" name="Wed" value="Wed" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer">
                        <label class="ml-[1vw] text-[2vw]" for="">Wed</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="Thurs" name="Thurs" value="Thurs" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer">
                        <label class="ml-[1vw] text-[2vw]" for="">Thurs</label>
                    </div>
                    <div class="flex items-center ml-[3vw]">
                        <input type="checkbox" id="Fri" name="Fri" value="Fri" class="checkbox w-[1.5vw] h-[1.5vw] ml-[-0.7vw] underline italic cursor-pointer">
                        <label class="ml-[1vw] text-[2vw]" for="">Fri</label>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mr-[2vw] text-[2vw]">
                <button type="submit">
                    Apply
                </button>
            </div>
        </form>
    </div>
    <div class="bigcontainer">
        <div class="container mt-[9vw] w-[87vw]">
            <div class="headercontainer flex justify-start items-center mb-[3vw] ml-[5vw]">
                <p class="text-[2.2vw] font-semibold ml-[1vw]">Xtra List</p>
                <button class="svg ml-[39vw] cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg"  id="showmodal" viewBox="0 0 24 24"><path fill="currentColor" d="M9 5a1 1 0 1 0 0 2a1 1 0 0 0 0-2zM6.17 5a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-7.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 0 1 0-2h1.17zM15 11a1 1 0 1 0 0 2a1 1 0 0 0 0-2zm-2.83 0a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-1.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 1 1 0-2h7.17zM9 17a1 1 0 1 0 0 2a1 1 0 0 0 0-2zm-2.83 0a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-7.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 1 1 0-2h1.17z"/></svg>
                </button>
                <div class="bg-neutral-100 ml-[1vw] w-[25.5vw] h-[4vw] rounded-[1vw] shadow flex items-center justify-end">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg mr-[1vw]" viewBox="0 0 24 24"><path fill="currentColor" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.612 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3l-1.4 1.4ZM9.5 14q1.875 0 3.188-1.313T14 9.5q0-1.875-1.313-3.188T9.5 5Q7.625 5 6.312 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z"/></svg>
                </div>
            </div>
            <div class="rowcontainer">
                <div class="xtraboxcontainer flex justify-center items-center">
                    <div class="xtrabox flex justify-center items-center">
                        {{-- Disisni silahkan masukan phpnya --}}
                        <img class="rounded-[50%] h-[12vw] w-[12vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="xtrabox flex flex-col items-start justify-center font-nunito">
                        {{-- Disisni silahkan masukan phpnya --}}
                        <div class="text-[2.2vw] underline font-extrabold mb-[1vw]">Running</div>
                        <div class="text-[1.7vw] font-semibold mb-[0.5vw]">Jevent</div>
                        <div class="text-[1.7vw] font-semibold mb-[0.5vw]">Wed, 17.00 - 19.00</div>
                        <div class="text-[1.7vw] font-semibold mb-[0.5vw]">RTB </div>
                    </div>
                </div>
                {{-- Tampilan ke bawwah ini cuma prototype aja, waktu nge loop data php per xtraboxcontianer, hapus aja codingngan dibawah --}}
                <div class="xtraboxcontainer flex justify-center items-center">
                    <div class="xtrabox flex justify-center items-center">
                        <img class="rounded-[50%] h-[12vw] w-[12vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="xtrabox flex flex-col items-start justify-center font-nunito">
                        <div class="text-[2.2vw] underline font-extrabold mb-[1vw]">Running</div>
                        <div class="text-[1.7vw] font-semibold mb-[0.5vw]">Jevent</div>
                        <div class="text-[1.7vw] font-semibold mb-[0.5vw]">Wed, 17.00 - 19.00</div>
                        <div class="text-[1.7vw] font-semibold mb-[0.5vw]">RTB </div>
                    </div>
                </div>
                <div class="xtraboxcontainer flex justify-center items-center">
                    <div class="xtrabox flex justify-center items-center">
                        <img class="rounded-[50%] h-[12vw] w-[12vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="xtrabox flex flex-col items-start justify-center font-nunito">
                        <div class="text-[2.2vw] underline font-extrabold mb-[1vw]">Running</div>
                        <div class="text-[1.7vw] font-semibold mb-[0.5vw]">Jevent</div>
                        <div class="text-[1.7vw] font-semibold mb-[0.5vw]">Wed, 17.00 - 19.00</div>
                        <div class="text-[1.7vw] font-semibold mb-[0.5vw]">RTB </div>
                    </div>
                </div>
                <div class="xtraboxcontainer flex justify-center items-center">
                    <div class="xtrabox flex justify-center items-center">
                        <img class="rounded-[50%] h-[12vw] w-[12vw]" src="Assets/RunningLogo.png" alt="">
                    </div>
                    <div class="xtrabox flex flex-col items-start justify-center font-nunito">
                        <div class="text-[2.2vw] underline font-extrabold mb-[1vw]">Running</div>
                        <div class="text-[1.7vw] font-semibold mb-[0.5vw]">Jevent</div>
                        <div class="text-[1.7vw] font-semibold mb-[0.5vw]">Wed, 17.00 - 19.00</div>
                        <div class="text-[1.7vw] font-semibold mb-[0.5vw]">RTB </div>
                    </div>
                </div>
                {{-- Hapus sampai sini --}}
            </div>
        </div>
    </div>
    <p id="valueList"></p>
    <script src="js/xtralist.js"></script>
    {{-- Footer --}}
    {{-- @include('footer') --}}
</body>
</html>
