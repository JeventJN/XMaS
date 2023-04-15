<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/Register/login.css">
    <script src="js/Register/login.js"></script>
    <title>Log In</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-cover" style="background-image: url('Assets/LogIn.png')">
        <div class="topcontainer flex items-center">
            <a href="/home">
                <svg id="test" class="ml-[3vw] mt-[-0.1vw]" xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vw" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M249.38 336L170 256l79.38-80m-68.35 80H342"/><path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192s192-86 192-192Z"/></svg>
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
                <p class="font-nunito font-black text-white text-[5.5vw] mr-[3.5vw] font-bold">Log In</p>
            </div>
        </div>
        <div class="flex flex-row">
            <img class="mt-[3vw] w-[35vw]" src="Assets/LogoXMaSBlack.png" alt="">
            <form action="/home" id="loginvalid" method="POST" autocomplete="off" onsubmit="return eventsubmits(this);">
                <div class="relative ml-[-3.5vw] logincontainer mt-[4vw] rounded-[1.5vw]">
                    <div class="loginform mt-[5vw]">
                        <div class="fieldbox flex items-center">
                            <img class="ml-[0.5vw] scale-[0.8] h-[2.8vw]" src="Assets/nip.png" alt="">
                            <div>
                                <input type="tel" id="nipuser" name="nipuser" placeholder="Enter your NIP here" class="no-outline bg-[#1B2F45] w-[31vw] text-white text-[1.3vw] ml-[1vw]"pattern="[0-9]+" required>
                                <img class="ml-[0.7vw] w-[31.5vw]" src="Assets/Line.png" alt="">
                            </div>
                        </div>
                        <div class="fieldbox flex items-center">
                            <img class="ml-[0.5vw] scale-[0.8] h-[2.8vw]" src="Assets/password.png" alt="">
                            <div>
                                <input type="password" id="pass" name="pass" placeholder="Enter your password here" class="no-outline bg-[#1B2F45] w-[31vw] text-white text-[1.3vw] ml-[1vw]" required>
                                <img class="ml-[0.7vw] w-[31.5vw]" src="Assets/Line.png" alt="">
                            </div>
                        </div>
                    </div>
                    <button type="submit">
                        <div class="mt-[6vw] buttonlogin ml-[11vw] font-nunito text-[1.3vw]">
                            <div class="login1 text-white rounded-[0.4vw]">Log In</div>
                        </div>
                    </button>
                    <p class="text-[0.95vw] text-white ml-[22vw] mt-[0.5vw]">Don't have an account? <a class="signnav" href="/signup">Sign Up</a></p>
                </div>
            </form>
        </div>
        <div class="h-[8vw]"></div>
    </div>
</body>
</html>
