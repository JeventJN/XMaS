<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/Register/signup.css">
    <title>Log In</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-cover" style="background-image: url('Assets/SignUp.png')">
        <div class="topcontainer">
            <img class="h-[5vw] w-[5vw]" src="Assets/BackButton.png" alt="">
            <div class="signuplogin z-50">
                <div class="signup ">
                    <div>Sign Up</div>
                </div>
                <div class="login">
                    <div>Log In</div>
                </div>
            </div>
            <img class="absolute z-0 ml-[10.5vw] mt-[15vw] w-[42vw]" src="Assets/LogoXMaSBlack.png" alt="">
            <div class="flex justify-end w-screen">
                <p class="font-nunito font-black text-[5.5vw] mr-[1.5vw] mt-[3vw]">Sign Up</p>
            </div>
        </div>
        <div class="signupcontainer mt-[2vw]">
            <div class="boxfield">
                <div class="textfield mt-[5vw]">
                    <img class="h-[3vw] w-[3vw]" src="Assets/username.png" alt="">
                    <div class="input">textfield</div>
                </div>
                <div class="textfield mt-[2vw]">
                    <img class="h-[3vw] w-[3vw]" src="Assets/nip.png" alt="">
                    <div class="input">textfield</div>
                </div>
                <div class="radiobutton text-white ml-[5vw]">
                    <p>Program <br/> </p>
                    <div class="radiobuttoncheck">
                        <img class="scale-[0.7]" src="Assets/agreebox.png" alt="">
                        <p>PPTI</p>
                    </div>
                    <div class="radiobuttoncheck">
                        <img class="scale-[0.7]" src="Assets/agreebox.png" alt="">
                        <p>PPBP</p>
                    </div>
                </div>
                <div class="textfield mb-[2vw]">
                    <img class="h-[3vw] w-[3vw]" src="Assets/call.png" alt="">
                    <div class="input">textfield</div>
                </div>
                <div class="textfield mb-[2vw]">
                    <img class="h-[3vw] w-[3vw]"  src="Assets/password.png" alt="">
                    <div class="input">textfield</div>
                </div>
                <div class="textfield">
                    <img class="h-[3vw] w-[3vw]"  src="Assets/password.png" alt="">
                    <div class="input">textfield</div>
                </div>
            </div>
            <div class="boxfield2">
                <p class="text-white mt-[5vw]">Upload you photo</p>
                <div class="upload">

                </div>
                <div class="buttonsignup">
                    <img class="scale-[0.7]" src="Assets/agreebox.png" alt="">
                    <p class="text-white text-[0.8vw]">I agree on term and condition</p>
                </div>
                <a href="">
                    <div class="buttonsignup mt-[1vw]">
                        <div class="signup1 text-white rounded-[0.5vw]">Sign Up</div>
                    </div>
                </a>
                <p class="text-[1vw] text-white ml-[0.3vw]">Already have an account? <a class="" href="">Log In</a></p>
            </div>
        </div>
        <div class="h-[10vw]"></div>
    </div>
</body>
</html>
