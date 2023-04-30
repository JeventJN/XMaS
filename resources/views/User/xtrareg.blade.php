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
    <title>Xtra Registration</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('User.NavbarUser')
    {{-- Cuma buat space dari navbar --}}
    <div class="w-screen h-[5.25vw]"></div>
    {{--  --}}
    <div class="w-screen flex h-[41.7vw]">
        <div class="absolute ml-[56vw] h-[5vw] w-[40vw] flex items-center justify-start font-nunito text-[5vw] mt-[3vw] text-black font-black">Xtra&nbsp<mark class="text-white bg-transparent">&nbspRegistration</mark></div>
        <div class="w-[66%] h-[41.7vw] flex items-center">
            <img class="w-[45vw] h-[45vw] mr-[10] mb-[4vw]" src="Assets/LogoXMaSGray.png" alt="">
        </div>
        <div class="w-[34%] bg-[#7599C1] h-[41.7vw]"></div>
        <div class="absolute ml-[24vw] w-[61vw] h-[24vw] bg-[#395474] mt-[11vw] rounded-[1vw] flex flex-col items-center justify-center">
            <div class="w-[51vw] h-[18vw]">
                <div class="w-[25vw] h-[3vw] bg-blue-500"></div>
                <div class="text-white text-[2vw] mt-[3vw]">
                    What’s the reason you want to join this Xtra?
                </div>
                <div class="w-[35vw] h-[3vw] bg-[#1B2F45] rounded-[1vw] flex justify-center items-end mt-[1vw]">
                    <div class="w-[31vw] border-b-[0.2vw] mb-[0.5vw]"></div>
                </div>
                <div class="flex justify-end mt-[3vw]">
                    <div class="w-[12vw] h-[2.5vw] bg-[#1B2F45] rounded-[0.2vw] text-white flex justify-center items-center hover:bg-black hover:cursor-pointer">Register</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
