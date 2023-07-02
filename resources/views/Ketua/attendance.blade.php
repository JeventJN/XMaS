<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <title>Attendace</title>
    @vite('resources/css/app.css')
</head>
<body class="overflow-hidden">
    <form action="/attendance" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex w-screen">
            <div class="w-[72.5%] h-[100vh] bg-[#395474]">
                <div class="w-[100%] h-[6vw] flex justify-center items-center">
                    <a href="/xtrapage/{{$xtra->kdExtracurricular}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-[1vw]" width="4.5vw" height="4.5vw" viewBox="0 0 24 24" style="fill: white; font-weight:1vw"><path d="M11.8 13H15q.425 0 .713-.288T16 12q0-.425-.288-.713T15 11h-3.2l.9-.9q.275-.275.275-.7t-.275-.7q-.275-.275-.7-.275t-.7.275l-2.6 2.6q-.3.3-.3.7t.3.7l2.6 2.6q.275.275.7.275t.7-.275q.275-.275.275-.7t-.275-.7l-.9-.9Zm.2 9q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22Zm0-2q3.35 0 5.675-2.325T20 12q0-3.35-2.325-5.675T12 4Q8.65 4 6.325 6.325T4 12q0 3.35 2.325 5.675T12 20Zm0-8Z"/></svg>
                    </a>
                    <div class="w-[100%] h-[6vw] text-white font-nunito font-bold text-[3vw] flex items-center ml-[1vw]">Attendance System</div>
                    <div class="w-[5.5vw]"></div>
                </div>
                {{-- Nama Eskul --}}
                <div class="w-[100%] mt-[2vw] flex justify-center items-center h-[31vw]">
                    <div class="w-[40vw] h-[34vw] bg-[#D9D9D9] rounded-[3vw] flex flex-col items-center justify-center">
                        @if (Illuminate\Support\Str::contains($xtra->logo, 'database-assets'))
                            <img src="{{ asset('storage/' . $xtra->logo) }}" alt="Assets/RunningLogo.png"  class="absolute max-w-[10vw] min-w-[10vw] max-h-[10vw] min-h-[10vw] mb-[32vw] border-[0.2vw] border-[#1B2F45] ml-[40vw] rounded-[50%]" style="object-fit: cover"/>
                        @else
                            <img src="{{ asset('Assets/' . $xtra->logo) }}" alt="Assets/RunningLogo.png"  class="absolute max-w-[10vw] min-w-[10vw] max-h-[10vw] min-h-[10vw] mb-[32vw] border-[0.2vw] border-[#1B2F45] ml-[40vw] rounded-[50%]" style="object-fit: cover" />
                        @endif
                        <p class="text-[2vw] font-nunito font-bold">{{$xtra->name}}</p>
                        <div class="mt-[1vw]"></div>
                        <div class="w-[80%] h-[26vw] mb-[1vw] overflow-scroll scrollbar-hide">
                            {{-- foreach nama anggota di sini --}}
                            <?php
                                $totalMembers = count($members);
                                $presentCount = 0;
                                foreach ($members as $member) {
                                    ?>
                                    <div class="w-[100%] bg-[#395474] rounded-[1vw]">
                                        <div class="flex w-[100%] h-[2.5vw] items-center justify-start">
                                            {{-- label isi nama anggota --}}
                                            <div class="w-[90%] h-[2.2vw] flex items-center">
                                                <label class="ml-[2vw] text-[1.5vw] text-white font-light">{{$member->userXmas?->name}}</label>
                                            </div>
                                            {{-- value isi nama anggota --}}
                                            <div class="w-[10%] flex justify-center items-center">
                                                <input class="h-[1.5vw] rounded-[1vw] w-[1.5vw]" type="checkbox" value="{{$member->kdMember}}" label="{{$member->userXmas?->name}}" onclick="updateAttendanceCount(this)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-[1vw]"></div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="w-[100%] flex h-[9vw]">
                    <div class="w-[70%] flex flex-col justify-center items-start ml-[1vw]">
                        {{-- Masukin attribute eskul disini --}}
                        <div class="text-[1.8vw] text-white font-nunito font-bold "> Leader &nbsp &nbsp : {{Auth()->User()->name}}</div>
                        <div class="flex">
                            <div class="text-[1.8vw] text-white font-nunito font-bold "> Schedule :  </div>
                            <select id="schedule" name="schedule" required class= "ml-[0.5vw] input bg-gray-50 text-gray-900 text-sm block max-w-[10vw] min-w-[10vw] max-h-[2.5vw] min-h-[2.5vw] text-[2vw] overflow-scroll">
                                <div id="select-box" class="max-w-[1.8vw] min-w-[1.8vw] max-h-[2.5vw] min-h-[2.5vw] mt-[1vw] border-none">
                                    <option selected="false" class="hidden" value="">
                                        Choose a date
                                    </option>
                                    @foreach ($schedules as $schedule)
                                        <option value="{{$schedule->kdSchedule}}">
                                            {{ date('D, d M Y', strtotime($schedule->date)) }}
                                        </option>
                                    @endforeach
                                </div>
                            </select>
                        </div>
                    </div>
                    <div class="w-[30%] flex flex-col justify-center items-center">
                        {{-- masukin total anggot --}}
                        <div id="attendanceCount" class="ml-[3vw] text-white text-[1.2vw]">Presence 0/{{$totalMembers}}</div>
                        <input type="hidden" name="attendanceKd" id="attendanceInput">
                        <button class="ml-[3vw] w-[12vw] h-[3vw] text-[1.5vw] font-nunito font-bold rounded-[1vw] bg-[#D9D9D9] flex justify-center items-center hover:bg-[#1B2F45] hover:text-white" onclick="prepareAttendanceArray()">Submit</button>
                    </div>
                </div>
                <script>
                    var totalMembers = @php echo $totalMembers;@endphp;
                    var presentCount = 0;
                    var attendanceKd = [];

                    function updateAttendanceCount(checkbox) {
                        if (checkbox.checked) {
                            presentCount++;
                            attendanceKd.push(checkbox.value);
                        } else {
                            presentCount--;
                            const index = attendanceKd.indexOf(checkbox.value);
                            if (index !== -1) {
                                attendanceKd.splice(index, 1);
                            }
                        }
                        document.getElementById('attendanceCount').textContent = `Presence ${presentCount}/${totalMembers}`;
                    }
                </script>
            </div>
            <div class="w-[27.5%] flex justify-end">
                <img class="scale-[1]" id="photoContainer" src="{{asset('Assets/UploadPhoto.png')}}" alt="">
                <input class="absolute w-[27.5%] h-[100vh] opacity-0 hover:cursor-pointer" type="file" name="photo" id="photo" oninput="photoContainer.src='{{asset('Assets/PhotoUploaded.png')}}'">
            </div>
        </div>
        <input type="hidden" name="kdXtra" value="{{$xtra->kdExtracurricular}}">
    </form>

    <script>
        function prepareAttendanceArray() {
            const attendanceKd = JSON.stringify(window.attendanceKd);

            document.getElementById('attendanceInput').value = attendanceKd;
        }
    </script>
</body>
</html>
