<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/Register/signup.css">
    <script src="js/Register/signup.js"></script>
    <title>Sign Up</title>
    @vite('resources/css/app.css')

<body>
    <div class="bg-cover" style="background-image: url('Assets/SignUp.png')">
        <div class="topcontainer">
            <a href="/home">
                <svg class="ml-[3vw] mt-[-0.1vw]" xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vw" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M249.38 336L170 256l79.38-80m-68.35 80H342"/><path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192s192-86 192-192Z"/></svg>
            </a>
            <div class="signuplogin ml-[2.5vw] font-nunito text-[1.2vw] font-medium">
                <div class="signup">
                    <div class="mt-[0.2vw]">Sign Up</div>
                </div>
                <a href="/login">
                    <div class="login hover:text-[#1B2F45] hover:font-extrabold">
                        <div class="mt-[0.2vw] ml-[-1vw]">Log In</div>
                    </div>
                </a>
            </div>
            <div class="flex justify-end w-screen">
                <p class="font-nunito text-white font-black text-[5.5vw] mr-[1.5vw] mt-[3vw]">Sign Up</p>
            </div>
        </div>

        {{-- FORM SIGN UP --}}
        {{-- Ini variabelnya --}}
        {{--
        username
        nip
        program
        phone
        password
        imageprofile --}}

        <div class="flex flex-row">
            <img class="mt-[3vw] w-[35vw]" src="Assets/LogoXMaSBlack.png" alt="">
            <form action="/login" id="signupvalid" method="POST" autocomplete="off" onsubmit="return eventsubmits(this);">
                <div class="absolute signupcontainer mt-[2vw] ml-[-5vw] z-30">
                    <div class="boxfield text-[1.2vw]">
                        <div class="textfield mt-[5vw] flex items-center">
                            <img class="h-[3vw] w-[3vw]" src="Assets/username.png" alt="">
                            <div class="flex flex-col">
                                <input type="name" id="username" name="username" placeholder="Enter your name here" class="no-outline bg-[#1B2F45] w-[32vw] ml-[0.5vw] text-white" required>
                                <img class="w-[50vw] ml-[-4.8vw]" src="Assets/Line.png" alt="">
                            </div>
                        </div>
                        <div class="textfield mt-[2vw] flex items-center">
                            <img class="h-[3vw] w-[3vw]" src="Assets/nip.png" alt="">
                            <div>
                                <input type="tel" id="nip" name="nip" placeholder="Enter your NIP here" class="no-outline bg-[#1B2F45] w-[32vw] ml-[0.5vw] text-white" required pattern="[0-9]+">
                                <img class="w-[50vw] ml-[-4.8vw]" src="Assets/Line.png" alt="">
                            </div>
                        </div>
                        <div class="radiobutton text-white ml-[5vw] text-[1.5vw] font-nunito">
                            <label class="text-[1.3vw]" for="PPTI">Program</label>
                            <div class="flex items-center">
                                <input type="radio" id="program" name="program" value="PPTI" class="ml-[0.3vw] h-[1.2vw] w-[1.2vw]" required>
                                <label class="ml-[0.8vw] text-[1.2vw]" for="PPTI">PPTI</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="program" name="program" value="PPBP" class="ml-[0.3vw] h-[1.2vw] w-[1.2vw]" required>
                                <label class="ml-[0.8vw] text-[1.2vw]" for="PPTI">PPBP</label>
                            </div>
                        </div>
                        <div class="textfield mb-[2vw] flex items-center">
                            <img class="h-[3vw] w-[3vw]" src="Assets/call.png" alt="">
                            <div>
                                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number here" class="no-outline bg-[#1B2F45] w-[32vw] ml-[0.5vw] text-white" required pattern="[0-9]+">
                                <img class="w-[50vw] ml-[-4.8vw]" src="Assets/Line.png" alt="">
                            </div>
                        </div>
                        <div class="textfield mb-[2vw] flex items-center">
                            <img class="h-[3vw] w-[3vw]"  src="Assets/password.png" alt="">
                            <div>
                                <input type="password" id="password" name="password" placeholder="Enter your password here" class="no-outline bg-[#1B2F45] w-[32vw] ml-[0.5vw] text-white" required>
                                <img  class="w-[50vw] ml-[-4.8vw]" src="Assets/Line.png" alt="">
                            </div>
                        </div>
                        <div class="textfield flex items-center">
                            <img class="h-[3vw] w-[3vw]"  src="Assets/password.png" alt="">
                            <div>
                                <input type="password" id="password1" name="password1" placeholder="Confirm your password" class="no-outline bg-[#1B2F45] w-[32vw] ml-[0.5vw] text-white" required>
                                <img  class="w-[50vw] ml-[-4.8vw]" src="Assets/Line.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="boxfield2">
                        <p class="text-white font-nunito text-[1.2vw] mt-[5vw]">Upload your photo</p>
                        {{-- Input Gambar --}}
                        <div class="upload">
                            <img class="h-[26vw]" src="Assets/UploadPhoto.png" alt="">
                            {{-- <input type="read" id="image" name="imageprofile" style="width: 15vw; height: 26vw;"> --}}
                        </div>
                        {{-- Masih Diusahakan --}}
                        <div class="buttonsignup mt-[0.5vw]">
                            <input type="checkbox" class="w-[1vw] h-[1vw] underline italic ml-[-3vw]" required>
                            <p class="text-white text-[0.8vw] ml-[0.5vw]">I agree on term and condition</p>
                        </div>
                        <button type="submit">
                            <div class="buttonsignup mt-[2vw] text-[1.1vw] ">
                                <div class="signup1 text-white rounded-[0.4vw]">Sign Up</div>
                            </div>
                        </button>
                        <p class="text-[0.95vw] text-white ml-[0.3vw] mt-[0.5vw]">Already have an account? <a class="loginnav" href="/login">Log In</a></p>
                    </div>
                </div>
            </form>
        </div>
        <div class="h-[12vw]"></div>
    </div>
</body>
</html>
