<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, minimum-scale=1.0, user-scalable=0">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/Ketua/reportform.css">
  <script src="js/Ketua/reportform.js"></script>
  <title>Report Form</title>
  @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden">
    <div class="h-[5.2vw] bg-[#1B2F45] flex items-center justify-center">
        <div class="absolute mr-[95vw]">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[3vw] h-[3vw]" width="40" height="40" viewBox="0 0 24 24"><path fill="white" d="M20 11H7.83l5.59-5.59L12 4l-8 8l8 8l1.41-1.41L7.83 13H20v-2z"/></svg>
            </a>
        </div>
        <div class="font-nunito text-[2.8vw] text-white font-bold">
            Extracurricular Report Form
        </div>
    </div>
    <form action="" id="reportform" method="POST" autocomplete="off" onsubmit="return eventsubmits(this);">
        <div class="flex w-screen h-[33vw] justify-center items-center mt-[4vw]">
            <div class="w-fit flex">
                <div class="flex flex-col items-center justify-between w-[25.5vw] h-[33vw] mr-[6vw]">
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw]">
                            <div class="">Extracurricular's Name</div>
                        </div>
                        <div class="flex justify-start w-[23vw]">
                            <input type="text" name="xtraname" id="xtraname" placeholder="Xtraname..." class="text-[1.5vw] text-white focus:outline-none bg-[#395474] border-b-[0.1vw] mb-[1vw] w-[23vw]">
                        </div>
                    </div>
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw]">
                            <div class="">Leader's Name</div>
                        </div>
                        <div class="flex justify-start w-[23vw]">
                            <input type="text" name="leadername" id="leadername" placeholder="Leader..." class="text-[1.5vw] text-white focus:outline-none bg-[#395474] border-b-[0.1vw] mb-[1vw] w-[23vw]">
                        </div>
                    </div>
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw]">
                            <div class="">Report Date</div>
                        </div>
                        <div class="flex justify-start items-end w-[23vw]">
                            <input type="date" name="reportdate" id="reportdate" class="text-[1.5vw] text-white focus:outline-none bg-[#395474] fill-white underline border-b-[0.1vw] w-[23vw] mb-[1vw] cursor-text fill-white" required>
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-[5vw] w-[3vw]" viewBox="0 0 24 24"><path fill="white" d="M12 14q-.425 0-.713-.288T11 13q0-.425.288-.713T12 12q.425 0 .713.288T13 13q0 .425-.288.713T12 14Zm-4 0q-.425 0-.713-.288T7 13q0-.425.288-.713T8 12q.425 0 .713.288T9 13q0 .425-.288.713T8 14Zm8 0q-.425 0-.713-.288T15 13q0-.425.288-.713T16 12q.425 0 .713.288T17 13q0 .425-.288.713T16 14Zm-4 4q-.425 0-.713-.288T11 17q0-.425.288-.713T12 16q.425 0 .713.288T13 17q0 .425-.288.713T12 18Zm-4 0q-.425 0-.713-.288T7 17q0-.425.288-.713T8 16q.425 0 .713.288T9 17q0 .425-.288.713T8 18Zm8 0q-.425 0-.713-.288T15 17q0-.425.288-.713T16 16q.425 0 .713.288T17 17q0 .425-.288.713T16 18ZM5 22q-.825 0-1.413-.588T3 20V6q0-.825.588-1.413T5 4h1V2h2v2h8V2h2v2h1q.825 0 1.413.588T21 6v14q0 .825-.588 1.413T19 22H5Zm0-2h14V10H5v10Z"/></svg> --}}
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center w-[25.5vw] h-[33vw]">
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw]">
                            <div class="">Reports's Title</div>
                        </div>
                        <div class="flex justify-start w-[23vw]">
                            <input type="text" name="reporttitle" id="reporttitle" placeholder="Report's Title..." class="text-[1.5vw] text-white focus:outline-none bg-[#395474] border-b-[0.1vw] w-[23vw]">
                        </div>
                    </div>
                    <div class="w-[25.5vw] h-[17.5vw] bg-[#395474] rounded-[1vw] mt-[3vw] flex justify-between items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] mt-[1vw]">
                            <div class="">Reports's Description</div>
                        </div>
                        <div class=" w-[23vw] h-[13vw] mb-[1vw]">
                            <textarea name="reportdesc" id="reportdesc" placeholder="Report's Description...                          " wrap="soft" col="10" class="w-[23vw] h-[13vw] bg-[#395474] text-[1.5vw] text-white focus:outline-none break-normal underline"></textarea>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-[25.5vw] h-[33vw] ml-[6vw]">
                    <div class="text-[1.8vw] ">Documentation</div>
                    <div class="h-[31.2vw] bg-[#395474] outline-dotted flex">
                        <img class="h-[31.2vw] w-[25.5vw]" id="photoContainer" src="Assets/UploadPhotoForm.png" alt="">
                        <input type="file" required class="hover:cursor-pointer absolute h-[31.2vw] w-[25.5vw] opacity-0" name="photo" id="photo" oninput="photoContainer.src='Assets/UploadedPhotoForm.png'">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center w-screen h-fit">
            <button type="submit">
                <div class=" flex items-center justify-center w-[11vw] h-[2.5vw] bg-[#1B2F45] rounded-[0.2vw] text-white text-[1.5vw] hover:bg-black">
                    Submit
                </div>
            </button>
        </div>
    </form>
</body>
</html>
