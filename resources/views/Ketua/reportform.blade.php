<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, minimum-scale=1.0, user-scalable=0">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('css/Ketua/reportform.css')}}">
  <title>Report Form</title>
  @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden flex flex-col scrollbar-hide">
    <div class="h-[5.2vw] bg-[#1B2F45] flex items-center justify-center">
        <div class="absolute mr-[95vw] z-50 w-[3vw] h-[3vw]">
            {{-- Balik ke profile ketua --}}
            <a href="reportlist">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[3vw] h-[3vw]" width="40" height="40" viewBox="0 0 24 24"><path fill="white" d="M20 11H7.83l5.59-5.59L12 4l-8 8l8 8l1.41-1.41L7.83 13H20v-2z"/></svg>
            </a>
        </div>
        <div class="font-nunito text-[2.8vw] text-white font-bold">
            Xtra Report Form
        </div>
    </div>
    <form class="absolute" action="" id="reportform" method="POST" autocomplete="off">
        {{-- Modal Submit --}}
        <div class="modal" id="modalpopup">
            <div class=" flex justify-around items-center flex-col">
                <div class="w-[36vw] flex justify-end">
                    <svg xmlns="http://www.w3.org/2000/svg" id="hidemodal" class="w-[2vw] h-[2vw] mt-[1vw] cursor-pointer" viewBox="0 0 256 256"><path fill="black" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
                </div>
                <div class="w-[36vw] font-semibold text-[1.5vw] mb-[2vw]">
                    This action will <mark class="bg-white text-[#FF0000]">send</mark> the report.
                    <br/>
                    Do you want to continue?
                </div>
                <div class="w-[36vw] h-[2.5vw] flex justify-end text-[1.2vw] mb-[1vw]">
                    <button type="submit">
                        <div class="w-[11vw] h-[2.5vw] bg-[#398E20] rounded-[0.2vw] flex justify-center items-center mr-[1vw] text-white hover:bg-[#145003] hover:cursor-pointer hover:font-bold">
                        Yes
                        </div>
                    </button>
                    <div id="hidemodalno" class="w-[11vw] h-[2.5vw] bg-[#FF0000] rounded-[0.2vw] flex justify-center items-center hover:bg-[#6D0000] hover:text-white hover:cursor-pointer hover:font-bold">
                        Cancel
                    </div>
                </div>
            </div>
        </div>
        <div class="flex w-screen h-[33vw] justify-center items-center mt-[9vw] ">
            <div class="w-fit flex font-nunito">
                <div class="flex flex-col items-center justify-between w-[25.5vw] h-[33vw] mr-[6vw]">
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] font-semibold">
                            <div class="">Xtra's Name</div>
                        </div>
                        {{-- Nama Eskul dari database --}}
                        <div class="flex justify-start w-[23vw] bg-[#395474] border-b-[0.1vw] mb-[1vw] w-[23vw] text-white text-[1.5vw]">
                            Masukin nama xtra disini
                        </div>
                    </div>
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col text-[1.5vw]">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] font-semibold">
                            <div class="">Leader's Name</div>
                        </div>
                        {{-- Nama Leader eskul --}}
                        <div class="flex justify-start w-[23vw] bg-[#395474] border-b-[0.1vw] mb-[1vw] w-[23vw] text-white">
                            Jevent Natthannael
                        </div>
                    </div>
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] font-semibold">
                            <div class="">Report Date</div>
                        </div>
                        <div class="flex justify-start items-end w-[23vw]">
                            <input type="date" name="reportdate" id="reportdate" class="text-[1.5vw] text-white focus:outline-none bg-[#395474] fill-white underline border-b-[0.1vw] w-[23vw] mb-[1vw] cursor-text fill-white">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center w-[25.5vw] h-[33vw]">
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] font-semibold">
                            <div class="">Reports's Title</div>
                        </div>
                        <div class="flex justify-start w-[23vw]">
                            <input type="text" name="reporttitle" id="reporttitle" placeholder="Report's Title..." class="text-[1.5vw] text-white focus:outline-none bg-[#395474] border-b-[0.1vw] w-[23vw] mb-[1vw]">
                        </div>
                    </div>
                    <div class="w-[25.5vw] h-[17.5vw] bg-[#395474] rounded-[1vw] mt-[3vw] flex justify-between items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] mt-[1vw] font-semibold">
                            <div class="">Reports's Description</div>
                        </div>
                        <div class=" w-[23vw] h-[13vw] mb-[1vw]">
                            <textarea name="reportdesc" id="reportdesc" style="resize:none;" placeholder="Report's Description...                         _                                                             _                                                             _                                                           _                                                            " wrap="soft" col="10" class="w-[23vw] h-[13vw] bg-[#395474] text-[1.5vw] text-white focus:outline-none break-all underline scrollbar-hide"></textarea>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-[25.5vw] h-[33vw] ml-[6vw]">
                    <div class="text-[1.8vw] font-semibold ">Documentation</div>
                    <div class="h-[31.2vw] w-[25.5vw] bg-[#1B2F45] outline outline-dotted outline-[0.2vw]  flex justify-center">
                        <img class="h-[31.2vw]" id="photoContainer" src="{{asset('Assets/UploadPhoto1.png')}}" alt="">
                        <input type="file" class="hover:cursor-pointer absolute h-[31.2vw] w-[25.5vw] opacity-0" name="photo" id="photo" oninput="photoContainer.src='{{asset('Assets/PhotoUploaded1.png')}}'">
                    </div>
                </div>
            </div>
        </div>
        {{-- Ini untuk submit report --}}
        <div class="flex justify-center w-screen h-fit font-nunito">
            <div class="flex items-center justify-center w-[11vw] h-[2.5vw] bg-[#1B2F45] rounded-[0.2vw] text-white text-[1.5vw] hover:bg-black hover:cursor-pointer hover:font-bold" id="showmodal">
                Submit
            </div>
        </div>
        <script src="{{asset('js/Ketua/reportform.js')}}"></script>
    </form>
</body>
</html>
