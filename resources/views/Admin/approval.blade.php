<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/Non-User/xtralistNU.css')}}">
    <link rel="stylesheet" href="{{asset('css/Admin/approval.css')}}">
    <title>Aproval</title>
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

    {{-- popup --}}
    {{-- accept --}}
    <div id="modalpopupACC" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
        <div class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
            <div class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                Request is successfully accepted
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

    {{-- deny --}}
    <div id="modalpopupDN" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
        <div class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
            <div class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                Request is successfully denied
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
    {{-- popup --}}

    @include('Admin.navbarA')
    <div class="w-screen flex justify-center items-center font-nunito">
        <div class="w-[80%] bg-[#E5E5E5] h-fit mt-[12vw] flex flex-col items-center justify-center rounded-[1vw]">
            <div class="w-screen h-[2vw]"></div>
            {{-- FOR EACH DARI SINI --}}
            <div class="w-[95%] h-[5vw] bg-white rounded-[1vw] flex items-center mt-[1vw] mb-[1vw] border border-[0.2vw] border-black flex">
                <div class="text-[1.5vw] ml-[1vw] w-[65%]">
                    <mark class="bg-white font-bold">Jevent Natthannael</mark> as <mark class="bg-white font-bold">Running</mark> Xtra's Leader
                </div>

                <button type="button" id="acceptbtn" class="accept flex items-center justify-center w-[11vw] h-[2.5vw] bg-[#398E20] rounded-[0.2vw] text-white hover:bg-[#145003] text-[1.3vw]  hover:cursor-pointer hover:font-bold">
                    Accept
                </button>

                {{-- Modal Accept --}}
                <div id="modalaccept" class="modalaccept">
                    {{-- Modal Content --}}
                    <div class="modal-contentaccept">
                        <div class="kotakisimodal">
                            <div class="boxjudulcloseaccept">
                                <span class="closeaccept">&times;</span>
                            </div>
                            <div class="isiaccept">
                                <div class="kalimataccept1">This action will <span style="color: red;">give</span> leader access to requester.</div>
                                <div class="kalimataccept2">Do you want to continue?</div>
                            </div>
                            <div class="boxsubmitaccept">
                                <a href=""><button class="btnyesmodal">Yes</button></a>
                                <button class="btncancelmodal" id="btncancelmodal1">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal Accept --}}

                <button type="button" id="denybtn" class=" deny ml-[2vw] flex items-center justify-center w-[11vw] h-[2.5vw] bg-[#FF0000] rounded-[0.2vw] text-[1.3vw] hover:bg-[#6D0000] hover:cursor-pointer text-black hover:text-white hover:font-bold">
                    Deny
                </button>

                {{-- Modal Deny --}}
                <div id="modaldeny" class="modaldeny">
                    {{-- Modal Content --}}
                    <div class="modal-contentdeny">
                        <div class="kotakisimodal">
                            <div class="boxjudulclosedeny">
                                <span class="closedeny">&times;</span>
                            </div>
                            <div class="isideny">
                                <div class="kalimatdeny1">This action will <span style="color: red;">deny</span> the requester.</div>
                                <div class="kalimatdeny2">Do you want to continue?</div>
                            </div>
                            <div class="boxsubmitdeny">
                                <a href=""><button class="btnyesmodal">Yes</button></a>
                                <button class="btncancelmodal" id="btncancelmodal3">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal Deny --}}

            </div>
            {{-- INI BATASNYA --}}
            <div class="w-[95%] h-[5vw] bg-white rounded-[1vw] flex items-center mt-[1vw] mb-[1vw] border border-[0.2vw] border-black flex">
                <div class="text-[1.5vw] ml-[1vw] w-[65%]">
                    <mark class="bg-white font-bold">Jevent Natthannael</mark> as <mark class="bg-white font-bold">Running</mark> Xtra's Leader
                </div>
                <div class="flex items-center justify-center w-[11vw] h-[2.5vw] bg-[#398E20] rounded-[0.2vw] text-white hover:bg-[#145003] text-[1.3vw]  hover:cursor-pointer hover:font-bold">
                    Accept
                </div>
                <div class="ml-[2vw] flex items-center justify-center w-[11vw] h-[2.5vw] bg-[#FF0000] rounded-[0.2vw] text-[1.3vw] hover:bg-[#6D0000] hover:cursor-pointer text-black hover:text-white hover:font-bold">
                    Deny
                </div>
            </div>
            <div class="w-screen h-[2vw]"></div>
        </div>
    </div>
    <div class="mt-[5.8vw]"></div>
    @include('footer')

    <script>
        //SCRIPT MODAL ACCEPT======================================
        // Get modal
        var modalaccept = document.getElementById("modalaccept")

        // Get button that opens modal
        var btnaccept = document.getElementById("acceptbtn");

        // Get the <span> element that closes the modal
        var spanaccept = document.getElementsByClassName("closeaccept")[0];
        var btncancel = document.getElementById("btncancelmodal1");

        // When the user clicks the button, open the modal
        btnaccept.onclick = function() {
            modalaccept.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spanaccept.onclick = function() {
            modalaccept.style.display = "none";
        }

        btncancel.onclick = function() {
            modalaccept.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modalaccept) {
                modalaccept.style.display = "none";
            }
        }
        // SCRIPT MODAL ACCEPT========================================
    </script>

    <script>
        //SCRIPT MODAL DENY======================================
        // Get modal
        var modaldeny = document.getElementById("modaldeny")

        // Get button that opens modal
        var btndeny = document.getElementById("denybtn");

        // Get the <span> element that closes the modal
        var spandeny = document.getElementsByClassName("closedeny")[0];
        var btncancel = document.getElementById("btncancelmodal3");

        // When the user clicks the button, open the modal
        btndeny.onclick = function() {
            modaldeny.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spandeny.onclick = function() {
            modaldeny.style.display = "none";
        }

        btncancel.onclick = function() {
            modaldeny.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modaldeny) {
                modaldeny.style.display = "none";
            }
        }
        // SCRIPT MODAL DENY========================================
    </script>


</body>
</html>
