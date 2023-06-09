<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Register/login.css') }}">
    <script src="{{ asset('js/Register/login.js') }}"></script>
    <title>Log In</title>
    @vite('resources/css/app.css')
</head>

<body class="scrollbar-hide">
    @if (session()->has('loginError'))
        <div id="modalpopupLI" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
            <div class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                <div class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                    Login Failed!
                    <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalLI" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
                </div>
            </div>
        </div>
        <script>
            var modal1 = document.getElementById('modalpopupLI');
            var hidemodal1 = document.getElementById('hidemodalLI');

            hidemodal1.addEventListener('click', closePopup1);

            function closePopup1(){
                modal1.style.display="none";
            }
            setTimeout(closePopup1, 5000);
        </script>
    @endif
    <div class="bg-cover" style="background-image: url('Assets/LogIn.png')">
        <div class="topcontainer flex items-center">
            <a href="/home">
                <svg id="test" class="ml-[3vw] mt-[-0.1vw] back w-[4vw]" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M249.38 336L170 256l79.38-80m-68.35 80H342" />
                    <path stroke-miterlimit="10"
                        d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192s192-86 192-192Z" />
                </svg>
            </a>
            <div class="signuplogin ml-[2.5vw] font-nunito text-[1.2vw] font-medium">
                <a href="/signup">
                    <div class="signup hover:text-[#1B2F45] hover:font-extrabold">
                        <p class="mt-[0.2vw] mr-[-0.5vw]">Sign Up</p>
                    </div>
                </a>
                <div class="login">
                    <div class="mt-[0.2vw]">Log In</div>
                </div>
            </div>
            <div class="flex justify-end w-screen">
                <p class="font-nunito font-black text-white text-[5vw] mr-[3.5vw] font-bold">Log In</p>
            </div>
        </div>
        <div class="flex flex-row">
            <img class="mt-[3vw] w-[35vw]" src="{{ asset('Assets/LogoXMaSBlack.png') }}" alt="">
            <form action="/login" id="loginvalid" method="POST" autocomplete="off"
                onsubmit="return eventsubmits(this);">
                @csrf
                <div class="relative ml-[-3.5vw] logincontainer mt-[4vw] rounded-[1.5vw]">
                    <div class="loginform mt-[5vw]">
                        <div class="fieldbox flex items-center">
                            <img class="ml-[0.5vw] scale-[0.8] h-[2.8vw]" src="{{ asset('Assets/nip.png') }}"
                                alt="">
                            <div class="flex flex-col">
                                <input type="tel" id="nipuser" name="NIP" placeholder="Enter your NIP here"
                                    class="no-outline bg-[#1B2F45] w-[31vw] text-white text-[1.3vw] ml-[1vw] border-b-[0.1vw]"
                                    pattern="[0-9]+" value="{{ old('NIP') }}">
                            </div>
                        </div>
                        <div class="fieldbox flex items-center">
                            <img class="ml-[0.5vw] scale-[0.8] h-[2.8vw]" src="{{ asset('Assets/password.png') }}"
                                alt="">
                            <div class="flex flex-col">
                                <input type="password" id="pass" name="password"
                                    placeholder="Enter your password here"
                                    class="no-outline bg-[#1B2F45] w-[31vw] text-white text-[1.3vw] ml-[1vw] border-b-[0.1vw]">
                            </div>
                        </div>
                    </div>
                    <div class="mt-[6vw] buttonlogin ml-[11vw] font-nunito text-[1.3vw]">
                        <button type="submit">
                            <div class="login1 text-white rounded-[0.4vw] ml-[10.5vw]">Log In</div>
                        </button>
                    </div>
                    <p class="text-[0.95vw] text-white ml-[22vw] mt-[0.5vw]">Don't have an account? <a class="signnav"
                            href="/signup">Sign Up</a></p>
                </div>
            </form>
        </div>
        <div class="h-[8vw]"></div>
    </div>
</body>

</html>
