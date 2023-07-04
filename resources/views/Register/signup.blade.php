<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/Register/signup.css')}}">
    <script src="{{asset('js/Register/signup.js')}}"></script>
    <title>Sign Up</title>
    @vite('resources/css/app.css')

<body class="scrollbar-hide">
    <div class="bg-cover" style="background-image: url('Assets/SignUp.png')">
        <div class="topcontainer">
            <a href="/home">
                <svg class="ml-[3vw] mt-[-0.1vw] back" xmlns="http://www.w3.org/2000/svg" width="4vw" height="4vw" viewBox="0 0 512 512"><path stroke-linecap="round" stroke-linejoin="round" d="M249.38 336L170 256l79.38-80m-68.35 80H342"/><path stroke-miterlimit="10" d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192s192-86 192-192Z"/></svg>
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
                <p class="font-nunito text-white font-bold text-[5vw] mr-[1.5vw] mt-[3vw]">Sign Up</p>
            </div>
        </div>

        <div class="flex flex-row">
            <img class="mt-[3vw] w-[35vw]" src="{{asset('Assets/LogoXMaSBlack.png')}}" alt="">
            <form action="/signup" id="signupvalid" method="POST" autocomplete="off" onsubmit="return eventsubmits(this)" enctype="multipart/form-data">
                @csrf
                <div class="absolute signupcontainer mt-[2vw] ml-[-5vw] z-30">
                    <div class="boxfield text-[1.2vw]">
                        <div class="textfield mt-[5vw] flex items-center">
                            <img class="h-[3vw] w-[3vw]" src="{{asset('Assets/username.png')}}" alt="">
                            <div class="flex flex-col">
                                <input type="name" id="name" name="name" placeholder="Enter your name here" class="no-outline bg-[#1B2F45] w-[32vw] ml-[0.5vw] text-white " value="{{ old('name')}}">
                                <img class="min-w-[45vw] ml-[-6.2vw]" src="{{asset('Assets/Line.png')}}" alt="">
                            </div>
                        </div>
                        <div class="textfield mt-[2vw] flex items-center">
                            <img class="h-[3vw] w-[3vw]" src="{{asset('Assets/nip.png')}}" alt="">
                            <div>
                                <input type="tel" id="NIP" name="NIP" placeholder="Enter your NIP here" class="no-outline bg-[#1B2F45] w-[32vw] ml-[0.5vw] text-white @error('NIP') is-invalid @enderror" pattern="[0-9]+" value="{{ old('NIP')}}">
                                <img class="min-w-[45vw] ml-[-6.2vw]" src="{{asset('Assets/Line.png')}}" alt="">
                            </div>
                        </div>
                        <div class="radiobutton text-white ml-[5vw] text-[1.5vw] font-nunito">
                            <label class="text-[1.3vw]" for="PPTI">Program</label>
                            <div class="flex items-center">
                                <input type="radio" id="PPTI" name="program" value="PPTI" {{ old('program') == 'PPTI' ? 'checked' : '' }} class="ml-[0.3vw] h-[1.2vw] w-[1.2vw]">
                                <label class="ml-[0.8vw] text-[1.2vw]" for="PPTI">PPTI</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="PPBP" name="program" value="PPBP" {{ old('program') == 'PPBP' ? 'checked' : '' }} class="ml-[0.3vw] h-[1.2vw] w-[1.2vw]">
                                <label class="ml-[0.8vw] text-[1.2vw]" for="PPTI">PPBP</label>
                            </div>
                        </div>
                        <div class="textfield mb-[2vw] flex items-center">
                            <img class="h-[3vw] w-[3vw]" src="{{asset('Assets/call.png')}}" alt="">
                            <div>
                                <input type="tel" id="phone" name="phoneNumber" placeholder="Enter your phone number here" class="no-outline bg-[#1B2F45] w-[32vw] ml-[0.5vw] text-white " pattern="[0-9]+" value="{{ old('phoneNumber')}}">
                                <img class="min-w-[45vw] ml-[-6.2vw]" src="{{asset('Assets/Line.png')}}" alt="">
                            </div>
                        </div>
                        <div class="textfield mb-[2vw] flex items-center">
                            <img class="h-[3vw] w-[3vw]"  src="Assets/password.png" alt="">
                            <div>
                                <input type="password" id="password" name="password" placeholder="Enter your password here" class="no-outline bg-[#1B2F45] w-[32vw] ml-[0.5vw] text-white ">
                                <img  class="min-w-[45vw] ml-[-6.2vw]" src="{{asset('Assets/Line.png')}}" alt="">
                            </div>
                        </div>
                        <div class="textfield flex items-center">
                            <img class="h-[3vw] w-[3vw]"  src="{{asset('Assets/password.png')}}" alt="">
                            <div>
                                <input type="password" id="password1" name="password1" placeholder="Confirm your password" class="no-outline bg-[#1B2F45] w-[32vw] ml-[0.5vw] text-white">
                                <img  class="min-w-[45vw] ml-[-6.2vw]" src="{{asset('Assets/Line.png')}}" alt="">
                            </div>
                        </div>
                        @error('NIP')
                            <div class="flex ml-[1vw] text-red-500 text-[1vw] mt-[0.5vw] items-left w-full font-semibold">
                                NIP is already registered
                            </div>
                        @enderror

                        @error('photo')
                            <div class="flex ml-[1vw] text-red-500 text-[1vw] mt-[0.5vw] items-left w-full font-semibold">
                                File must be an image
                            </div>
                        @enderror
                    </div>

                    <div class="boxfield2">
                        <p class="text-white font-nunito text-[1.2vw] mt-[5vw]">Upload your photo</p>
                        <div class="upload" >
                            <img class="h-[26vw]" id="photoContainer" src="{{asset('Assets/UploadPhoto.png')}}" alt="">
                            <input class="absolute h-[26vw] w-[15vw] mt-[-26vw] opacity-0 hover:cursor-pointer" accept="image/*" type="file" name="photo" id="photo" oninput="photoContainer.src='{{asset('Assets/PhotoUploaded.png')}}'">
                        </div>
                        <div class="buttonsignup mt-[0.5vw]">
                            <input type="checkbox" id="checkbox" class="w-[1vw] h-[1vw] underline italic ml-[-3vw]">
                            <p class="text-white text-[0.8vw] ml-[0.5vw]">I agree on term and condition</p>
                        </div>
                        <div class="buttonsignup mt-[2vw] text-[1.1vw] ">
                            <button type="submit">
                                <div class="signup1 text-white rounded-[0.4vw]">Sign Up</div>
                            </button>
                            </div>
                        <p class="text-[0.95vw] text-white ml-[0.3vw] mt-[0.5vw]">Already have an account? <a class="loginnav" href="/login">Log In</a></p>
                    </div>
                </div>
            </form>
        </div>
        <div class="h-[12vw]"></div>
    </div>
</body>
</html>
