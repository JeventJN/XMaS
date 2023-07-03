<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body class="scrollbar-hide">
    <div class="z-50 fixed w-screen h-[5.25vw] bg-[#1B2F45] flex items-center opacity-80">
        <div class="content w-[48%]">
                <img id="imageLink" class="cursor-pointer w-[10vw] h-[5vw] ml-[1vw]" src="{{asset('Assets/LogoXMaS.png')}}" alt="">
            <script>
                document.getElementById("imageLink").addEventListener("click", function() {
                    window.location.href = "/home";
                });
            </script>
        </div>
        <div class="content w-[70%] font-nunito text-[1.5vw] text-white flex justify-center justify-between mr-[3vw]">
            <a class="home w-[8vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/home')) ? 'hidden' : '' }}" href="/home">
                Home
            </a>
            <div class="home-active w-[8vw] h-[3.25vw] bg-[#A1A9B2] text-[#1B2F45] flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/home')) ? '' : 'hidden' }}" href="/home">
                Home
            </div>
            <a class="xralist w-[10vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/xtralist')) ? 'hidden' : '' }}" href="/xtralist">
                Xtra List
            </a>
            <div class="xtralist-active w-[10vw] h-[3.25vw] bg-[#A1A9B2] text-[#1B2F45] flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/xtralist')) ? '' : 'hidden' }}" href="/xtralist">
                Xtra List
            </div>
            <a class="xtrareg w-[16vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45]  flex items-center justify-center rounded-[1.6vw]" href="/signup">
                Xtra Registration
            </a>
            <a class="myclub w-[8.75vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] flex items-center justify-center rounded-[1.6vw]" href="/signup">
                MyClub
            </a>
            <a class="w-[8.75vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/login') || url()->current() == url('/signup'))  ? 'active' : '' }}" href="/login">
                Log In
            </a>
        </div>
    </div>
</body>
</html>
