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
                        <div class="flex justify-start w-[23vw]">
                            <div class="min-w-[100%] text-[1.5vw] border-b-[0.1vw] mb-[1vw] text-white">
                                masukin nama xtra di sini
                            </div>
                        </div>
                    </div>
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] font-semibold">
                            <div class="">Leader's Name</div>
                        </div>
                        <div class="flex justify-start w-[23vw]">
                            <div class="min-w-[100%] text-[1.5vw] border-b-[0.1vw] mb-[1vw] text-white">
                                masukin nama leader di sini
                            </div>
                        </div>
                    </div>
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] font-semibold">
                            <div class="">Report Date</div>
                        </div>
                        <div class="flex justify-start w-[23vw]">
                            <div class="min-w-[100%] text-[1.5vw] border-b-[0.1vw] mb-[1vw] text-white">
                                masukin tanggal laporan di sini
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center w-[25.5vw] h-[33vw]">
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] font-semibold">
                            <div class="">Reports's Title</div>
                        </div>
                        <div class="flex justify-start w-[23vw]">
                            <div class="min-w-[100%] text-[1.5vw] border-b-[0.1vw] mb-[1vw] text-white">
                                masukin judul report
                            </div>
                        </div>
                    </div>
                    <div class="w-[25.5vw] h-[17.5vw] bg-[#395474] rounded-[1vw] mt-[3vw] flex justify-between items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] mt-[1vw] font-semibold">
                            <div class="">Reports's Description</div>
                        </div>
                        <div class="flex justify-start w-[23vw]">
                            <div class="min-w-[100%] text-[1.5vw] max-h-[11vw] mb-[2vw] text-white overflow-y-scroll scrollbar-hide underline">
                                <p class="hypens-auto">
                                    masukin nama xtra di sini masukin nama xtra di sinimasukin nama xtra di sinimasukin nama xtra di sinimasukin nama xtra di sinimasukin nama xtra di sinimasukin nama xtra di sini masukin nama xtra di sini
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-[25.5vw] h-[33vw] ml-[6vw]">
                    <div class="text-[1.8vw] font-semibold ">Documentation</div>
                    <div class="h-[31.2vw] w-[25.5vw] bg-[#1B2F45] outline outline-dotted outline-[0.2vw]  flex justify-center">
                        {{-- ganti gambar disini --}}
                        <img class="h-[31.2vw]" id="photoContainer" src="{{asset('Assets/UploadPhoto1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        {{-- Ini untuk Admin (Acc/Dec) --}}
        <form action="" method="post">
            <div class="flex justify-center w-screen h-fit font-nunito">
                <button id="Accept">
                    <div class="flex items-center font-semibold justify-center w-[11vw] h-[2.5vw] bg-[#398E20] rounded-[0.2vw] text-white hover:bg-[#145003] text-[1.3vw]  hover:cursor-pointer hover:font-bold">
                        Accept
                    </div>
                </button>
                <div class="flex items-center justify-center w-[3.5vw] h-[2.5vw] bg-[#398E20] rounded-[0.2vw] text-white text-[1.3vw] hover:bg-black hover:cursor-pointer opacity-0">
                    Submit
                </div>
                <button id="Deny">
                    <div class="flex items-center font-semibold justify-center w-[11vw] h-[2.5vw] bg-[#FF0000] rounded-[0.2vw] text-[1.3vw] hover:bg-[#6D0000] hover:cursor-pointer text-black hover:text-white hover:font-bold">
                        Deny
                    </div>
                </button>
                {{-- ini inputnya ya bos, saya masukin valuenya dari js --}}
                <input type="radio" class="hidden" id="report" name="report">
            </div>
            <script>
                var acc = document.getElementById('Accept');
                var dec = document.getElementById('Deny');
                var rep = document.getElementById('report');

                acc.addEventListener('click', sendAcc);
                dec.addEventListener('click', sendDec);

                function sendAcc(){
                    rep.checked = true;
                    rep.value = 'Accept';
                    console.log(rep.value);
                }

                function sendDec(){
                    rep.checked = true;
                    rep.value = 'Decline';
                    console.log(rep.value);
                }
            </script>
        </form>
</body>
</html>
