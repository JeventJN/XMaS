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
            Xtra Report
        </div>

        @if ($report->kdState == 4)
            <div class="decborder absolute w-[7.8vw] h-[2.4vw] flex justify-center items-center rounded-[5vw] bg-green-600 mt-[10.5vw] ml-[-87.5vw]">
                <div class="text-[1.4vw] text-white font-nunito font-semibold">Accepted</div>
            </div>
        @elseif ($report->kdState == 5)
            <div class="decborder absolute w-[7.8vw] h-[2.4vw] flex justify-center items-center rounded-[5vw] bg-red-500 mt-[10.5vw] ml-[-87.5vw]">
                <div class="text-[1.4vw] text-white font-nunito font-semibold">Denied</div>
            </div>
        @endif
    </div>
        <div class="flex w-screen h-[33vw] justify-center items-center mt-[5.5vw] ">
            <div class="w-fit flex font-nunito">
                <div class="flex flex-col items-center justify-between w-[25.5vw] h-[33vw] mr-[6vw]">
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] font-semibold">
                            <div class="">Xtra's Name</div>
                        </div>
                        <div class="flex justify-start w-[23vw]">
                            <div class="min-w-[100%] text-[1.5vw] border-b-[0.1vw] mb-[1vw] text-white">
                                {{$report->schedules?->xtras?->name}}
                            </div>
                        </div>
                    </div>
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] font-semibold">
                            <div class="">Leader's Name</div>
                        </div>
                        <div class="flex justify-start w-[23vw]">
                            <div class="min-w-[100%] text-[1.5vw] border-b-[0.1vw] mb-[1vw] text-white">
                                {{ $report->schedules?->xtras?->members?->firstWhere('kdState', 2)?->userXmas?->name }}
                            </div>
                        </div>
                    </div>
                    <div class="w-[25.5vw] h-[9vw] bg-[#395474] rounded-[1vw] flex justify-around items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] font-semibold">
                            <div class="">Report Date</div>
                        </div>
                        <div class="flex justify-start w-[23vw]">
                            <div class="min-w-[100%] text-[1.5vw] border-b-[0.1vw] mb-[1vw] text-white">
                                {{ date('D', strtotime($report->schedules?->date)) . ', ' . date('d', strtotime($report->schedules?->date)) . ' '  . date('M', strtotime($report->schedules?->date)) . ' ' . date('Y', strtotime($report->schedules?->date)) }}
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
                                {{ Str::limit($report->title, 30, '...') }}
                            </div>
                        </div>
                    </div>
                    <div class="w-[25.5vw] h-[17.5vw] bg-[#395474] rounded-[1vw] mt-[3vw] flex justify-between items-center flex-col">
                        <div class="w-[23vw] h-[3vw] text-white text-[1.6vw] mt-[1vw] font-semibold">
                            <div class="">Report's Description</div>
                        </div>
                        <div class="flex justify-start w-[23vw] h-[13.5vw]">
                            <div class="min-w-[100%] text-[1.5vw] max-h-[11vw] mb-[2vw] text-white overflow-y-scroll scrollbar-hide underline">
                                <p class="hypens-auto">
                                    {{$report->explanation}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-[25.5vw] h-[33vw] ml-[6vw]">
                    <div class="text-[1.8vw] font-semibold ">Documentation</div>
                    <div class="h-[31.2vw] w-[25.5vw] bg-[#1B2F45] outline outline-dotted outline-[0.2vw]  flex justify-center">
                        {{-- ganti gambar disini --}}
                        @if ($report->photo)
                            @if (Illuminate\Support\Str::contains($report->photo, 'database-assets'))
                                <img class="max-h-[31.1vw] min-h-[31.1vw] max-w-[25.5vw] min-w-[25.5vw]" src="{{ asset('storage/' . $report->photo) }}" alt="{{ $report->schedules?->xtras?->name }}" style="object-fit: cover;">
                            @else
                                <img class="max-h-[31.1vw] min-h-[31.1vw] max-w-[25.5vw] min-w-[25.5vw]" src="{{ asset('Assets/' . $report->photo) }}" alt="{{ $report->schedules?->xtras?->name }}" style="object-fit: cover;">
                            @endif
                        @else
                            <div class="bg-[#D9D9D9] h-[31.2vw] w-[25.5vw] flex">
                                <p class="m-auto font-nunito font-semibold text-[1.5vw]">No Documentation</p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

        {{-- Ini untuk Admin (Acc/Dec) --}}
        <form action="subReport" method="post">
            @csrf
            <div class="flex justify-center w-screen h-fit font-nunito">
                @if ($report->kdState == 3)
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
                @endif
                {{-- ini inputnya ya bos, saya masukin valuenya dari js --}}
                <input type="radio" class="hidden" id="report" name="report">
                <input type="hidden" name="kdReport" value="{{$report->kdReport}}">
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
