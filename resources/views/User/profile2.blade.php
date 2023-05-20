<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile-User</title>
    <link rel="stylesheet" href="{{ asset('css/profileuser.css') }}">
</head>
<body class="scrollbar-hide">

    @include('Non-User.navbarNU')

    <div class="batas">
        <div class="boxfotoprofile">
            <div class="boxluarfoto" >
                <img class="fotoprofile" src="{{ asset('Assets/Profile assets/Foto.png') }}" alt>
                <div class="iconcamera">
                    <img class="fotocamera" for="upload-photo" src="{{ asset('Assets/Profile assets/Edit Photo.svg') }}" alt>
                    <input type="file" name="" id="upload-photo">
                </div>
            </div>
            <div class="boxluarprofile">
                <div class="boxidentitastempatsampah">
                    <div class="boxidentitas">
                        <div class="formidentitas">Name</div>
                        <div class="formidentitas">NIP</div>
                        <div class="formidentitas">Phone</div>
                    </div>
                    <div class="titikdua">
                        :<br>
                        :<br>
                        :
                    </div>
                    <div class="isiidentitas">
                        <div class="identitasnama">Vanessa Kwandinata</div>
                        <div class="identitasNIP">0398</div>
                        <div class="boxphoneedit">
                            <form>
                                <input class="identitasphone" value="+62895635863956">
                            </form>
                            <a href="{{ route('profile')}}"><svg class="editphonenumbericon" xmlns="http://www.w3.org/2000/svg" width="1.7vw" height="1.7vw" viewBox="0 0 24 24"><path fill="currentColor" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4L9.55 18Z"/></svg></a>
                        </div>
                    </div>
                    <div class="boxtempatsampah">
                        <img class="icontempatsampah" id="sampahbtn" src="{{ asset('Assets/Profile assets/tempatsampah.png') }}" alt="">
                        {{-- Modal Tempat Sampah --}}
                        <div id="modalsampah" class="modalsampah">
                            {{-- Modal Content --}}
                            <div class="modal-contentsampah">
                                <div class="kotakisimodal">
                                    <div class="boxjudulclosesampah">
                                        <span class="closesampah">&times;</span>
                                    </div>
                                    <div class="isisampah">
                                        <div class="kalimatsampah1">This action will <span style="color: red;">delete</span> your account</div>
                                        <div class="kalimatsampah2">Do you want to continue?</div>
                                    </div>
                                    <div class="boxsubmitsampah">
                                        <button class="btnyesmodal">Yes</button>
                                        <button class="btncancelmodal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Modal Tempat Sampah --}}
                    </div>
                </div>
                <div class="spasi"></div>
                <div class="boxtombol">

                    {{-- ini untuk member --}}
                    <button type="button" class="request" id="requestbtn">Request Leader Access</button>
                    {{-- Modal Request --}}
                    <div id="modalrequest" class="modalrequest">
                        {{-- Modal Content --}}
                        <div class="modal-contentrequest">
                            <div class="kotakisimodal">
                                <div class="boxjudulcloserequest">
                                    <div class="judulmodal">What Xtra leader are you?</div>
                                    <span class="closerequest">&times;</span>
                                </div>

                                {{-- dropdown jepeng --}}
                                <div class="mt-[0.2vw] w-[25vw] rounded-[0.3vw] border-none" style="border: #1B2F45 0.2vw solid">
                                    <form id="xtrareg" action="/xtrareg" method="POST" onsubmit="return eventsubmits(this)" autocomplete="off">
                                        {{-- <select name="xtrachs" class="bg-gray-50 border border-gray-300 border-[0.1vw] rounded-[0.3vw] text-gray-900 text-sm focus:border-blue-500 block w-[25vw] h-[2.5vw] p-[0.2vw] focus:text-black text-[2vw]" required> --}}
                                        <div class="select-wrap" class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] border-none">
                                            <select name="xtrachs" class="input bg-gray-50 text-gray-900 text-sm block max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[2vw] scrollbar-hide">
                                                <div id="select-box" class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] border-none">
                                                <option selected="false" disabled class="hidden">Choose one of your Xtra</option>
                                                    <option class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[1.5vw] border-none" id="xtrachs" value="">Running</option>
                                                    <option class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[1.5vw] border-none" id="xtrachs" value="">Running</option>
                                                    <option class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[1.5vw] border-none" id="xtrachs" value="">Running</option>
                                                    <option class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[1.5vw] border-none" id="xtrachs" value="">Running</option>
                                                </div>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                {{-- dropdown jepeng --}}

                                <div class="spasi1" style="height: 8.5vw;"></div>
                                <div class="boxsubmitrequest">
                                    <button class="btnsubmitmodal">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Request --}}
                    {{-- ini untuk member --}}

                    {{-- ini untuk leader --}}
                    {{-- <button type="button" class="request">Extracurricular Report</button> --}}
                    {{-- ini untuk leader --}}

                    <button type="button" class="logout" id="logoutbtn">Log Out</button>
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
                                    <button class="btnyesmodal">Yes</button>
                                    <button class="btncancelmodal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Log Out --}}

                </div>
            </div>
        </div>

        <div class="boxstatus">
            <div class="boxstatus1">

                {{-- ini untuk member --}}
                <div class="boxstatus2member">
                    <div class="boxstatus3member">
                        Member
                    </div>
                </div>
                {{-- ini untuk member --}}

                {{-- ini untuk leader --}}
                {{-- <div class="boxstatus2leader">
                    <div class="boxstatus3leader">
                        Leader
                    </div>
                </div> --}}
                {{-- ini untuk leader --}}

            </div>
        </div>
    </div>
    @include('../footer')

    <script>
        //SCRIPT MODAL REQUEST LEADER ACCESS======================================
        // Get modal
        var modalrequest = document.getElementById("modalrequest")

        // Get button that opens modal
        var btnrequest = document.getElementById("requestbtn");

        // Get the <span> element that closes the modal
        var spanrequest = document.getElementsByClassName("closerequest")[0];

        // When the user clicks the button, open the modal
        btnrequest.onclick = function() {
            modalrequest.style.display = "block";
        }

            // When the user clicks on <span> (x), close the modal
        spanrequest.onclick = function() {
            modalrequest.style.display = "none";
        }

            // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modalrequest) {
                modalrequest.style.display = "none";
            }
        }
        // SCRIPT MODAL REQUEST LEADER ACCESS========================================

        //SCRIPT MODAL LOG OUT======================================
        // Get modal
        var modallogout = document.getElementById("modallogout")

        // Get button that opens modal
        var btnlogout = document.getElementById("logoutbtn");

        // Get the <span> element that closes the modal
        var spanlogout = document.getElementsByClassName("closelogout")[0];

        // When the user clicks the button, open the modal
        btnlogout.onclick = function() {
            modallogout.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spanlogout.onclick = function() {
            modallogout.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modallogout.style.display = "none";
            }
        }
        // SCRIPT MODAL LOG OUT========================================

        //SCRIPT MODAL TEMPAT SAMPAH======================================
        // Get modal
        var modalsampah = document.getElementById("modalsampah")

        // Get button that opens modal
        var btnsampah = document.getElementById("sampahbtn");

        // Get the <span> element that closes the modal
        var spansampah = document.getElementsByClassName("closesampah")[0];

        // When the user clicks the button, open the modal
        btnsampah.onclick = function() {
            modalsampah.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spansampah.onclick = function() {
            modalsampah.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modalsampah.style.display = "none";
            }
        }
        // SCRIPT MODAL TEMPAT SAMPAH========================================


        //SCRIPT DROPDOWN=============================================
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
        }
        //SCRIPT DROPDOWN=============================================
    </script>

</body>
</html>
