<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/Admin/navbarA.css') }}">
  @vite('resources/css/app.css')
</head>
<body class="scrollbar-hide">
    <div class="z-40 fixed w-screen h-[5.25vw] bg-[#1B2F45] flex items-center opacity-80">
        <div class="content w-[48%]">
            <img class="w-[10vw] h-[5vw] ml-[1vw]" src="Assets/LogoXMaS.png" alt="">
        </div>
        <div class="content w-[70%] font-nunito text-[1.5vw] text-white flex justify-center justify-between mr-[3vw]">
            <a class="home w-[10vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/home')) ? 'hidden' : '' }}" href="/home">
                Home
            </a>
            <div class="home-active w-[10vw] h-[3.25vw] bg-[#A1A9B2] text-[#1B2F45] flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/home')) ? '' : 'hidden' }}" href="/home">
                Home
            </div>
            <a class="xtralist w-[10vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/xtralistA')) ? 'hidden' : '' }}" href="/xtralistA">
                Xtra List
            </a>
            <div class="xtralist-active w-[10vw] h-[3.25vw] bg-[#A1A9B2] text-[#1B2F45] flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/xtralistA')) ? '' : 'hidden' }}" href="/xtralistA">
                Xtra List
            </div>
            <a class="reports w-[10vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45]  flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/reportlist')) ? 'hidden' : '' }}" href="/reportlist">
                Reports
            </a>
            <div class="reports-active w-[10vw] h-[3.25vw] bg-[#A1A9B2] text-[#1B2F45]  flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/reportlist')) ? '' : 'hidden' }}" href="/reportlist">
                Reports
            </div>
            <a class="approval w-[10vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/approval')) ? 'hidden' : '' }}" href="/approval">
                Approval
            </a>
            <div class="approval-active w-[10vw] h-[3.25vw] bg-[#A1A9B2] text-[#1B2F45] flex items-center justify-center rounded-[1.6vw] {{ (url()->current() == url('/approval')) ? '' : 'hidden' }}" href="/approval">
                Approval
            </div>
            <a class="w-[10vw] h-[3.25vw] hover:bg-[#A1A9B2] hover:text-[#1B2F45] flex items-center justify-center rounded-[1.6vw]" id="logoutbtn">
                Log Out
            </a>

        </div>
    </div>

    {{-- Modal Log Out --}}
    <div id="modallogout" class="modallogout">
        {{-- Modal Content --}}
        <div class="modal-contentlogout">
            <div class="kotakisimodal">
                <div class="boxjudulcloselogout">
                    <span class="closelogout">&times;</span>
                </div>
                <div class="isilogout">
                    <div class="kalimatlogout1">This action will <span style="color: red;">log</span> you <span style="color: red;">out</span></div>
                    <div class="kalimatlogout2">Do you want to continue?</div>
                </div>
                <div class="boxsubmitlogout">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btnyesmodal">Yes</button>
                    </form>
                    {{-- <a href="/logout"><button class="btnyesmodal">Yes</button></a> --}}
                    <button class="btncancelmodal" id="btncancelmodal2">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Log Out --}}

    <script>
        //SCRIPT MODAL LOG OUT======================================
        // Get modal
        var modallogout = document.getElementById("modallogout")

        // Get button that opens modal
        var btnlogout = document.getElementById("logoutbtn");

        // Get the <span> element that closes the modal
        var spanlogout = document.getElementsByClassName("closelogout")[0];
        var btncancel = document.getElementById("btncancelmodal2");

        // When the user clicks the button, open the modal
        btnlogout.onclick = function() {
            modallogout.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spanlogout.onclick = function() {
            modallogout.style.display = "none";
        }

        btncancel.onclick = function() {
            modallogout.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modallogout.style.display = "none";
            }
        }
        // SCRIPT MODAL LOG OUT========================================
 </script>
</body>
</html>
