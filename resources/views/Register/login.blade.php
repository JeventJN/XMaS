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
            <img class="h-[5vw] w-[5vw]" src="Assets/BackButton.png" alt="">
            <a href="/signup">
                <div class="signuplogin z-50">
                    <div class="signup">
                        <div>Sign Up</div>
                    </div>
                    <div class="login">
                        <div>Log In</div>
                    </div>
                </div>
            </a>
            <div class="flex justify-end w-screen">
                <p class="font-nunito font-black text-white text-[5.5vw] mr-[1.5vw] mt-[3vw]">Log In</p>
            </div>
        </div>
        <img class="absolute z-0 mt-[3vw] w-[35vw]" src="Assets/LogoXMaSBlack.png" alt="">
        <form action="/login" id="loginvalid" method="GET" autocomplete="off" onsubmit="return eventsubmits(this);">
            <div class="logincontainer ml-[31.5vw] mt-[4vw] rounded-[1.5vw]">
                <div class="loginform mb-[4vw]">
                    <div class="fieldbox">
                        <img class="ml-[0.5vw] scale-[0.8] w-[3vw]" src="Assets/nip.png" alt="">
                        <input type="name" id="user" name="user" placeholder="Input your username here" class="no-outline bg-[#1B2F45] w-[30vw] text-white text-[1.5vw] ml-[1vw]" required>
                    </div>
                    <div class="fieldbox">
                        <img class="ml-[0.5vw] scale-[0.8] w-[3vw]" src="Assets/password.png" alt="">
                        <input type="password" id="pass" name="pass" placeholder="Input your password here" class="no-outline bg-[#1B2F45] w-[30vw] text-white text-[1.5vw] ml-[1vw]" required>
                    </div>
                </div>
                <button type="submit">
                    <a href="">
                        <div class="buttonlogin ml-[11vw] font-nunito text-[1.5vw]">
                            <div class="login1 text-white rounded-[0.5vw]">Log In</div>
                        </div>
                    </a>
                </button>
                <p class="text-[1vw] text-white ml-[21.7vw]">Don't have an account yet? <a class="signnav" href="/signup">Sign Up</a></p>
            </div>
        </form>
    </div>
</body>
</html>
