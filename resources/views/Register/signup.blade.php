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
        <div class="topcontainer z-0">
            <img class="h-[5vw] w-[5vw]" src="Assets/BackButton.png" alt="">
            <a href="/login">
                <div class="signuplogin z-50">
                    <div class="signup ">
                        <div>Sign Up</div>
                    </div>
                    <div class="login">
                        <div>Log In</div>
                    </div>
                </div>
            </a>
            <img class="absolute z-0 mt-[50vw] w-[35vw]" src="Assets/LogoXMaSBlack.png" alt="">
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

        <form action="/signup" id="signupvalid" method="GET" autocomplete="off" onsubmit="return eventsubmits(this);">
            <div class="signupcontainer mt-[2vw] z-50">
                <div class="boxfield">
                    <div class="textfield mt-[5vw] flex items-center">
                        <img class="h-[3vw] w-[3vw]" src="Assets/username.png" alt="">
                        <input type="name" id="username" name="username" placeholder="Input your username here" class="no-outline bg-[#1B2F45] w-[30vw] text-white" required>
                    </div>
                    <div class="textfield mt-[2vw]">
                        <img class="h-[3vw] w-[3vw]" src="Assets/nip.png" alt="">
                        <input type="tel" id="nip" name="nip" placeholder="Input your NIP here" class="no-outline bg-[#1B2F45] w-[30vw] text-white" required pattern="[0-9]+">
                    </div>
                    <div class="radiobutton text-white ml-[5vw] text-[1.5vw]">
                        <div class="flex items-center">
                            <input type="radio" id="program" name="program" value="PPTI" style="height:1.5vw; width:1.5vw; vertical-align: middle;" required>
                            <label class="ml-[1vw]" for="PPTI">PPTI</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" id="program" name="program" value="PPBP" style="height:1.5vw; width:1.5vw; vertical-align: middle;" required>
                            <label class="ml-[1vw]" for="PPTI">PPBP</label>
                        </div>
                    </div>
                    <div class="textfield mb-[2vw]">
                        <img class="h-[3vw] w-[3vw]" src="Assets/call.png" alt="">
                        <input type="tel" id="phone" name="phone" placeholder="Input your phone-number here" class="no-outline bg-[#1B2F45] w-[30vw] text-white" required pattern="[0-9]+">
                    </div>
                    <div class="textfield mb-[2vw]">
                        <img class="h-[3vw] w-[3vw]"  src="Assets/password.png" alt="">
                        <input type="password" id="password" name="password" placeholder="Input your password here" class="no-outline bg-[#1B2F45] w-[30vw] text-white" required>
                    </div>
                    <div class="textfield">
                        <img class="h-[3vw] w-[3vw]"  src="Assets/password.png" alt="">
                        <input type="password" id="password1" name="password1" placeholder="Type your password again" class="no-outline bg-[#1B2F45] w-[30vw] text-white" required>
                    </div>
                </div>
                <div class="boxfield2">
                    <p class="text-white mt-[5vw]">Upload your photo</p>
                    <div class="upload">
                        <input type="read" id="image" name="imageprofile" style="width: 15vw; height: 26vw;">
                    </div>
                    <div class="buttonsignup">
                        <input type="checkbox" style="width: 1vw; height: 1vw;" required>
                        <p class="text-white text-[0.8vw] ml-[0.5vw] mt-[0.5vw]">I agree on term and condition</p>
                    </div>
                    <button type="submit">
                        <a href="">
                            <div class="buttonsignup mt-[1vw]">
                                <div class="signup1 text-white rounded-[0.5vw]">Sign Up</div>
                            </div>
                        </a>
                    </button>
                    <p class="text-[1vw] text-white ml-[0.3vw]">Already have an account? <a class="loginnav" href="">Log In</a></p>
                </div>
            </div>
        </form>
        <div class="h-[10vw]"></div>
    </div>
</body>
</html>
