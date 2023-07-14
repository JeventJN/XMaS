<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Non-User/xtralist.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Admin/approval.css') }}">
    <title>Approval</title>
    @vite('resources/css/app.css')
</head>

<body class="overflow-hidden scrollbar-hide">
    {{-- Navbar Options --}}

    {{-- popup --}}
    {{-- accept --}}
    @if (session()->has('appAcc'))
        <div id="modalpopupACC" class="fixed w-screen flex justify-center items-center mt-[2.7vh] z-50">
            <div
                class="w-[67vw] h-[5vw] flex items-center justify-center font-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                <div
                    class="w-[66vw] h-[4vw] flex items-center justify-center font-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                    Request is successfully accepted
                    <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalACC"
                        class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z" />
                    </svg>
                </div>
            </div>
        </div>
        <script>
            var modal2 = document.getElementById('modalpopupACC');
            var hidemodal2 = document.getElementById('hidemodalACC');

            hidemodal2.addEventListener('click', closePopup2);

            function closePopup2() {
                modal2.style.display = "none";
            }

            setTimeout(() => {
                const modal = document.getElementById("modalpopupACC");
                modal.style.display = 'none';
            }, 3000);
        </script>
    @endif

    {{-- deny --}}
    @if (session()->has('denyAcc'))
        <div id="modalpopupDN" class="fixed w-screen flex justify-center items-center mt-[2.7vh] z-50">
            <div
                class="w-[67vw] h-[5vw] flex items-center justify-center font-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                <div
                    class="w-[66vw] h-[4vw] flex items-center justify-center font-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                    Request is successfully denied
                    <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalDN"
                        class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z" />
                    </svg>
                </div>
            </div>
        </div>
        <script>
            var modal3 = document.getElementById('modalpopupDN');
            var hidemodal3 = document.getElementById('hidemodalDN');

            hidemodal3.addEventListener('click', closePopup3);

            function closePopup3() {
                modal3.style.display = "none";
            }

            setTimeout(() => {
                const modal = document.getElementById("modalpopupDN");
                modal.style.display = 'none';
            }, 3000);
        </script>
    @endif
    {{-- popup --}}

    @include('Admin.navbarA')
    <div class="w-screen h-[11.2vh]"></div>
    <div class="w-screen h-[47vh] mt-[3vh] flex flex-col items-center justify-center overflow-y scrollbar-hide">
        <div
            class="w-[85%] max-h-[47vh] bg-[#E5E5E5] rounded-[1vw] flex flex-col items-center overflow overflow-y-auto scrollbar-hide">
            @if ($members->count())
                @foreach ($members as $member)
                    <div
                        class="w-[80vw] min-h-[5vw] bg-white rounded-[1vw] flex items-center mt-[2vh] mb-[2vh] border border-[0.2vw] border-black flex">
                        <div class="text-[1.5vw] ml-[1vw] w-[65%] font-nunito">
                            <mark class="bg-white font-bold"> {{ $member->userXmas?->name }} </mark> as <mark
                                class="bg-white font-bold">{{ $member->xtras?->name }}</mark> Xtra's Leader
                        </div>

                        <button type="button"
                            class="acceptbtn flex items-center justify-center w-[11vw] h-[2.5vw] bg-[#398E20] rounded-[0.2vw] text-white hover:bg-[#145003] text-[1.3vw] font-nunito hover:cursor-pointer hover:font-nunito hover:font-bold"
                            data-modal="modalaccept{{ $loop->iteration }}">Accept</button>

                        {{-- Modal Accept --}}
                        <div id="modalaccept{{ $loop->iteration }}" class="modalaccept">
                            {{-- Modal Content --}}
                            <div class="modal-contentaccept">
                                <div class="kotakisimodal">
                                    <div class="boxjudulcloseaccept">
                                        <span class="closeaccept">&times;</span>
                                    </div>
                                    <div class="isiaccept">
                                        <div class="kalimataccept1">This action will <span
                                                style="color: red;">give</span> leader access to requester.
                                        </div>
                                        <div class="kalimataccept2">Do you want to continue?</div>
                                    </div>
                                    <div class="boxsubmitaccept">
                                        <form action="/acceptReq" method="POST">
                                            @csrf
                                            <input type="hidden" name="kdMember" value="{{ $member->kdMember }}">
                                            <input type="hidden" name="xtra"
                                                value="{{ $member->kdExtracurricular }}">
                                            <button class="btnyesmodal font-nunito">Yes</button>
                                        </form>
                                        <button class="btncancelmodal1 font-nunito" id="btncancelmodal1">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Modal Accept --}}

                        <button type="button"
                            class="denybtn ml-[2vw] flex items-center justify-center w-[11vw] h-[2.5vw] bg-[#FF0000] rounded-[0.2vw] text-[1.3vw] hover:bg-[#6D0000] hover:cursor-pointer text-black hover:font-nunito hover:text-white hover:font-bold"
                            data-modal="modaldeny{{ $loop->iteration }}">Deny</button>

                        {{-- Modal Deny --}}
                        <div id="modaldeny{{ $loop->iteration }}" class="modaldeny">
                            {{-- Modal Content --}}
                            <div class="modal-contentdeny">
                                <div class="kotakisimodal">
                                    <div class="boxjudulclosedeny">
                                        <span class="closedeny">&times;</span>
                                    </div>
                                    <div class="isideny">
                                        <div class="kalimatdeny1">This action will <span style="color: red;">deny</span>
                                            the requester. </div>
                                        <div class="kalimatdeny2">Do you want to continue?</div>
                                    </div>
                                    <div class="boxsubmitdeny">
                                        <form action="/denyReq" method="POST">
                                            @csrf
                                            <input type="hidden" name="NIP" value="{{ $member->NIP }}">
                                            <input type="hidden" name="xtra"
                                                value="{{ $member->kdExtracurricular }}">
                                            <button class="btnyesmodal font-nunito">Yes</button>
                                        </form>
                                        <button class="btncancelmodal3 font-nunito" id="btncancelmodal3">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Modal Deny --}}
                    </div>
                @endforeach
            @else
                <div class="h-[2vh]"></div>
                <p class="text-center text-[1.7vw] font-semibold justify-center items-center flex">There is no request.
                </p>
                <div class="h-[2vh]"></div>
            @endif
        </div>
    </div>
    @include('footer')


    <script>
        // Get all accept buttons
        var acceptButtons = document.getElementsByClassName("acceptbtn");

        // Attach event listeners to each accept button
        for (var i = 0; i < acceptButtons.length; i++) {
            acceptButtons[i].addEventListener("click", function() {
                var modalId = this.getAttribute("data-modal");
                var modal = document.getElementById(modalId);

                // Open the corresponding modal
                modal.style.display = "block";
            });
        }

        // Get all deny buttons
        var denyButtons = document.getElementsByClassName("denybtn");

        // Attach event listeners to each deny button
        for (var i = 0; i < denyButtons.length; i++) {
            denyButtons[i].addEventListener("click", function() {
                var modalId = this.getAttribute("data-modal");
                var modal = document.getElementById(modalId);

                // Open the corresponding modal
                modal.style.display = "block";
            });
        }

        // Get all close buttons for the accept modals
        var closeAcceptButtons = document.getElementsByClassName("closeaccept");
        var cancelAcceptButtons = document.getElementsByClassName("btncancelmodal1");

        // Attach event listeners to each close button for the accept modals
        for (var i = 0; i < closeAcceptButtons.length; i++) {
            closeAcceptButtons[i].addEventListener("click", function() {
                var modal = this.closest(".modalaccept");

                // Close the corresponding modal
                modal.style.display = "none";
            });

            cancelAcceptButtons[i].addEventListener("click", function() {
                var modal = this.closest(".modalaccept");

                // Close the corresponding modal
                modal.style.display = "none";
            });
        }

        // Get all close buttons for the deny modals
        var closeDenyButtons = document.getElementsByClassName("closedeny");
        var cancelDenyButtons = document.getElementsByClassName("btncancelmodal3");

        // Attach event listeners to each close button for the deny modals
        for (var i = 0; i < closeDenyButtons.length; i++) {
            closeDenyButtons[i].addEventListener("click", function() {
                var modal = this.closest(".modaldeny");

                // Close the corresponding modal
                modal.style.display = "none";
            });

            cancelDenyButtons[i].addEventListener("click", function() {
                var modal = this.closest(".modaldeny");

                // Close the corresponding modal
                modal.style.display = "none";
            });
        }

        // Close the modals when clicking outside the modal content
        window.addEventListener("click", function(event) {
            var modals = document.getElementsByClassName("modalaccept");
            for (var i = 0; i < modals.length; i++) {
                if (event.target === modals[i]) {
                    modals[i].style.display = "none";
                }
            }

            var modalsDeny = document.getElementsByClassName("modaldeny");
            for (var i = 0; i < modalsDeny.length; i++) {
                if (event.target === modalsDeny[i]) {
                    modalsDeny[i].style.display = "none";
                }
            }
        });
    </script>


</body>

</html>
