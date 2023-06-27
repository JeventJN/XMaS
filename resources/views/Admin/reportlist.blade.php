<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/Non-User/xtralist.css')}}">
    <title>Report List</title>
  @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden scrollbar-hide">
    {{-- Navbar Options --}}

    {{-- @guest
        @include('Non-User.navbarNU')
    @endguest

    @auth
        @include('User.navbarUser')
    @endauth --}}
    @include('Admin.navbarA')

    {{-- popup --}}
    {{-- accept --}}
    @if (session()->has('reportAcc'))
        <div id="modalpopupACC" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
            <div class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                <div class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                    Report is successfully accepted
                    <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalACC" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
                </div>
            </div>
        </div>
        <script>
            var modal2 = document.getElementById('modalpopupACC');
            var hidemodal2 = document.getElementById('hidemodalACC');

            hidemodal2.addEventListener('click', closePopup2);

            function closePopup2(){
                modal2.style.display="none";
            }

            setTimeout(() => {
                const modal = document.getElementById("modalpopupACC");
                modal.style.display = 'none';
            }, 3000);
        </script>
    @endif

    {{-- deny --}}
    @if (session()->has('reportDeny'))
        <div id="modalpopupDN" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
            <div class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                <div class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                    Report is successfully denied
                    <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalDN" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
                </div>
            </div>
        </div>
        <script>
            var modal3 = document.getElementById('modalpopupDN');
            var hidemodal3 = document.getElementById('hidemodalDN');

            hidemodal3.addEventListener('click', closePopup3);

            function closePopup3(){
                modal3.style.display="none";
            }

            setTimeout(() => {
                const modal = document.getElementById("modalpopupDN");
                modal.style.display = 'none';
            }, 3000);
        </script>
    @endif
    {{-- popup --}}

    {{-- modal pop up xtralist user--}}
    {{-- jangan dikomen --}}
    <div id="modalpopup" class="modal z-50">
    {{-- jangan dikomen --}}

        <form action="{{ route('reportList') }}" id="modal" method="GET">
            @csrf
            @if (request('search'))
                    <input type="hidden" name="search" value={{ request('search') }}>
            @endif
            <svg xmlns="http://www.w3.org/2000/svg" id="hidemodal" class="mt-[1.5vw] ml-[43vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
            <div class="flex flex-col ml-[4vw]">
                <p class="text-[2vw] font-semibold">Respond</p>
                <div class="grid grid-cols-2">
                    <div class="flex items-center">
                        <input type="checkbox" id="pending" name="pending" value="pending" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer" {{ (request('pending') === NULL) ? '' : 'checked' }} >
                        <label class="ml-[1vw] text-[2vw]" for="pending">Pending</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="accepted" name="accepted" value="accepted" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer" {{ (request('accepted') === NULL) ? '' : 'checked' }} >
                        <label class="ml-[1vw] text-[2vw]" for="accepted">Accepted</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="denied" name="denied" value="denied" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer" {{ (request('denied') === NULL) ? '' : 'checked' }} >
                        <label class="ml-[1vw] text-[2vw]" for="denied">Denied</label>
                    </div>
                </div>
                <p class="mt-[1vw] text-[2vw] font-semibold">Sort by Date</p>
                <div class="flex flex-col justify-center items-start">
                    <div class="flex items-center">
                        <input type="checkbox" id="asc" name="asc" value="asc" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer" {{ (request('denied') === NULL) ? '' : 'checked' }}>
                        <label class="ml-[1vw] text-[2vw]" for="asc">Ascending</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="desc" name="desc" value="desc" class="checkbox w-[1.5vw] h-[1.5vw] underline italic cursor-pointer"  {{ (request('asc') === NULL) ? '' : 'checked' }}>
                        <label class="ml-[1vw] text-[2vw]" for="desc">Descending</label>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mr-[2vw] mt-[0.5vw] text-[2vw]">
                <div id="reset" class="hover:text-[#A1A9B2] mr-[2vw] hover:cursor-pointer" onclick="resetfun()">
                    Reset
                </div>
                <button type="submit" class="hover:text-[#A1A9B2]">
                    Apply
                </button>
            </div>
        </form>

    {{-- jangan dikomen --}}
    </div>
    {{-- jangan dikomen --}}

    {{-- jangan dikomen --}}
    <div class="bigcontainer">
        <div class="container mt-[9vw] w-[87vw]">
            <div class="headercontainer flex justify-start items-center mt-[1.5vw] ml-[5vw]">
    {{-- jangan dikomen --}}

                <p class="text-[2vw] font-bold font-nunito ml-[1vw]">Report List</p>
                <button class="svg ml-[36.5vw] cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg"  id="showmodal" viewBox="0 0 24 24"><path fill="currentColor" d="M9 5a1 1 0 1 0 0 2a1 1 0 0 0 0-2zM6.17 5a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-7.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 0 1 0-2h1.17zM15 11a1 1 0 1 0 0 2a1 1 0 0 0 0-2zm-2.83 0a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-1.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 1 1 0-2h7.17zM9 17a1 1 0 1 0 0 2a1 1 0 0 0 0-2zm-2.83 0a3.001 3.001 0 0 1 5.66 0H19a1 1 0 1 1 0 2h-7.17a3.001 3.001 0 0 1-5.66 0H5a1 1 0 1 1 0-2h1.17z"/></svg>
                </button>

                {{-- search --}}

                <form action="{{ route('reportList') }}" method="GET">
                    @csrf
                    @if (request('pending'))
                            <input type="hidden" name="pending" value={{ request('pending') }}>
                    @endif
                    @if (request('accepted'))
                        <input type="hidden" name="accepted" value={{ request('accepted') }}>
                    @endif
                    @if (request('pending'))
                            <input type="hidden" name="pending" value={{ request('pending') }}>
                    @endif
                    @if (request('denied'))
                        <input type="hidden" name="denied" value={{ request('denied') }}>
                    @endif
                    @if (request('asc'))
                            <input type="hidden" name="asc" value={{ request('asc') }}>
                    @endif
                    @if (request('desc'))
                        <input type="hidden" name="desc" value={{ request('desc') }}>
                    @endif
                    <div class="bg-neutral-100 ml-[1vw] w-[25.5vw] h-[4vw] rounded-[1vw] shadow flex items-center justify-end">
                        <div class="flex items-center justify-center w-[19vw] h-[3.5vw] mr-[1vw] font-nunito text-[1.5vw]">
                            <input class="bg-neutral-100 h-[3.5vw] w-[19vw] no-outline" autocomplete="off" type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
                        </div>
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg mr-[1vgw]" viewBox="0 0 24 24"><path fill="currentColor" d="m19.6 21l-6.3-6.3q-.75.6-1.725.95T9.5 16q-2.725 0-4.612-1.888T3 9.5q0-2.725 1.888-4.612T9.5 3q2.725 0 4.612 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l6.3 6.3l-1.4 1.4ZM9.5 14q1.875 0 3.188-1.313T14 9.5q0-1.875-1.313-3.188T9.5 5Q7.625 5 6.312 6.313T5 9.5q0 1.875 1.313 3.188T9.5 14Z"/></svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="rowcontainer" id="all_report">
                @if ($reports->count())
                    @foreach ($reports as $report)
                        @if ($report->kdState == "4") {{-- Accepted Report --}}
                            <form action="/reportformA" method="POST" class="reportForm" onclick="submitForm('{{ $report->kdReport }}')">
                                @csrf
                                <div class="flex flex-col">
                                    <div class="decborder absolute w-[7.8vw] h-[2.4vw] flex justify-center items-center rounded-[5vw] bg-green-600 mt-[3vw] ml-[29vw]">
                                        <div class="text-[1.4vw] text-white font-nunito font-semibold">Accepted</div>
                                    </div>
                                    <div class="xtraboxcontainer flex justify-center items-center" onmouseover="changeBorderColor(this.parentNode, 'white')" onmouseout="changeBorderColor(this.parentNode, 'black')">
                                        <div class="mr-[0.5vw] xtrabox flex justify-center items-center">
                                            @if (Illuminate\Support\Str::contains($report->photo, 'database-assets'))
                                                <img src="{{ asset('storage/' . $report->photo) }}" alt="{{ $report->title }}" style="object-fit: cover">
                                            @else
                                                <img src="{{ asset('Assets/' . $report->photo) }}" alt="{{ $report->title }}" style="object-fit: cover">
                                            @endif
                                        </div>
                                        <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                            <div class="text-[1.9vw] underline font-extrabold mb-[1vw]">{{ Str::limit($report->title, 14, '...') }}</div>
                                            <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ Str::limit($report->schedules?->xtras->name, 12, '...') }}</div>
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ Str::limit($report->schedules?->xtras?->leader?->userXmas?->name, 14, '...') }}</div>
                                                @if ($report->schedules?->xtras?->leader?->userXmas?->name === NULL)
                                                    <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader</div>
                                                @endif
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ $report->schedules ? date('d M Y', strtotime($report->schedules?->date)) : ''}}</div>
                                                @if ($report->schedules === NULL)
                                                    <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @elseif ($report->kdState == "5") {{-- Declined Report --}}
                            <form action="/reportformA" method="POST" class="reportForm" onclick="submitForm('{{ $report->kdReport }}')">
                                @csrf
                                <div class="flex flex-col">
                                    <div class="decborder absolute w-[7.8vw] h-[2.4vw] flex justify-center items-center rounded-[5vw] bg-red-500 mt-[3vw] ml-[29vw]">
                                        <div class="text-[1.4vw] text-white font-nunito font-semibold">Denied</div>
                                    </div>
                                    <div class="xtraboxcontainer flex justify-center items-center" onmouseover="changeBorderColor(this.parentNode, 'white')" onmouseout="changeBorderColor(this.parentNode, 'black')">
                                        <div class="mr-[0.5vw] xtrabox flex justify-center items-center">
                                            @if (Illuminate\Support\Str::contains($report->photo, 'database-assets'))
                                                <img src="{{ asset('storage/' . $report->photo) }}" alt="{{ $report->title }}" style="object-fit: cover">
                                            @else
                                                <img src="{{ asset('Assets/' . $report->photo) }}" alt="{{ $report->title }}" style="object-fit: cover">
                                            @endif
                                        </div>
                                        <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                            <div class="text-[1.9vw] underline font-extrabold mb-[1vw]">{{ Str::limit($report->title, 14, '...') }}</div>
                                            <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ Str::limit($report->schedules?->xtras->name, 12, '...') }}</div>
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ Str::limit($report->schedules?->xtras?->leader?->userXmas?->name, 14, '...') }}</div>
                                                @if ($report->schedules?->xtras?->leader?->userXmas?->name === NULL)
                                                    <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader</div>
                                                @endif
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ $report->schedules ? date('d M Y', strtotime($report->schedules?->date)) : ''}}</div>
                                                @if ($report->schedules === NULL)
                                                    <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @else {{-- No Respond Yet --}}
                            <form action="/reportformA" method="POST" class="reportForm" onclick="submitForm('{{ $report->kdReport }}')">
                                @csrf
                                <div class="flex flex-col">
                                    <div class="xtraboxcontainer flex justify-center items-center">
                                        <div class="mr-[0.5vw] xtrabox flex justify-center items-center">
                                            @if (Illuminate\Support\Str::contains($report->photo, 'database-assets'))
                                                <img src="{{ asset('storage/' . $report->photo) }}" alt="{{ $report->title }}" style="object-fit: cover">
                                            @else
                                                <img src="{{ asset('Assets/' . $report->photo) }}" alt="{{ $report->title }}" style="object-fit: cover">
                                            @endif
                                        </div>
                                        <div class="ml-[0.5vw] xtrabox flex flex-col items-start justify-center font-nunito leading-[3vw]">
                                            <div class="text-[1.9vw] underline font-extrabold mb-[1vw]">{{ Str::limit($report->title, 14, '...') }}</div>
                                            <div class="leading-[2vw] text-[1.65vw] font-semibold">
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ Str::limit($report->schedules?->xtras->name, 12, '...') }}</div>
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ Str::limit($report->schedules?->xtras?->leader?->userXmas?->name, 14, '...') }}</div>
                                                @if ($report->schedules?->xtras?->leader?->userXmas?->name === NULL)
                                                    <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Leader</div>
                                                @endif
                                                <div class="text-[1.6vw] font-semibold mb-[0.5vw]">{{ $report->schedules ? date('d M Y', strtotime($report->schedules?->date)) : ''}}</div>
                                                @if ($report->schedules === NULL)
                                                    <div class="text-[1.6vw] font-semibold mb-[0.5vw]">No Schedule</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif
                    @endforeach
                    <script>
                        function changeBorderColor(element, color) {
                            const decBorder = element.querySelector('.decborder');
                            if (decBorder) {
                                decBorder.style.borderColor = color;
                            }
                        }
                        function submitForm(kdReport) {
                            var form = document.querySelector('.reportForm');

                            var input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = 'report';
                            input.value = kdReport;

                            form.appendChild(input);
                            form.submit();
                        }
                    </script>
                @else
                    <p class="text-center text-[1.7vw] flex justify-center items-center font-semibold mb-[3vw] h-[18vw]">No Report.</p>
                @endif
            </div>
            <div class="rowcontainer" id="list_report"></div>
            <div class="rowcontainer" id="empty_report">
                <p class="text-center text-[1.7vw] flex justify-center items-center font-semibold mb-[3vw] h-[18vw]">Your search for "<span id="search_query"></span>" is not found</p>
            </div>
        </div>
    </div>
    <div class="h-[4vw]"></div>
    <p id="valueList"></p>
    <script src="{{asset('js/xtralist.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#empty_report").hide();
            $("#list_report").hide();

            $("#inputSearch").keyup(function(){
                var query = $(this).val();

                // Extract filter values from the URL
                var urlParams = new URLSearchParams(window.location.search);

                var pending = urlParams.get('pending') ? urlParams.get('pending') : '';
                var accepted = urlParams.get('accepted') ? urlParams.get('accepted') : '';
                var denied = urlParams.get('denied') ? urlParams.get('denied') : '';
                var asc = urlParams.get('asc') ? urlParams.get('asc') : '';
                var desc = urlParams.get('desc') ? urlParams.get('desc') : '';

                if(query != ""){
                    $('#all_report').hide();
                    $('#list_report').show();
                    $.ajax({
                        url: "{{ url('searchReport') }}",
                        type:"GET",
                        data: "search=" + query +'&pending=' + pending + '&accepted=' + accepted +'&denied=' + denied +'&asc=' + asc +'&desc=' + desc,
                        success: function(data){
                            if (data.empty) {
                                $("#search_query").text(query);
                                $("#empty_report").show();
                                $("#list_report").html("");
                            } else {
                                $("#empty_report").hide();
                                $("#list_report").html(data);
                            }
                        }
                    });
                }else{
                    $('#all_report').show();
                    $('#list_report').hide();
                    $("#empty_report").hide();
                }
            });
        });
    </script>

    {{-- Footer --}}
    @include('footer')
</body>
</html>
