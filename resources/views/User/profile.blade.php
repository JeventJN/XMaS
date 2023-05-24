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

    {{-- popup --}}
    <div id="modalpopupSENT" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
        <div
            class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
            <div
                class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                Report sent
                <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalSENT"
                    class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256">
                    <path fill="currentColor"
                        d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z" />
                </svg>
            </div>
        </div>
    </div>
    <script>
        var modal2 = document.getElementById('modalpopupSENT');
        var hidemodal2 = document.getElementById('hidemodalSENT');

        hidemodal2.addEventListener('click', closePopup2);

        function closePopup2() {
            modal2.style.display = "none";
        }
    </script>
    {{-- popup --}}

    <div class="batas">
        <div class="boxfotoprofile">

            <div class="boxluarfoto">
                <img class="fotoprofile" src="{{ asset('Assets/Profile assets/Foto.png') }}" alt>
                <form method="GET" enctype="multipart/form-data">
                    <div class="iconcamera" id="iconcamera">
                        <img class="fotocamera" for="upload-photo"
                            src="{{ asset('Assets/Profile assets/Edit Photo.svg') }}" alt>
                        <input type="file" name="fileupload" id="fileupload" style="display: none"
                            accept=".png, .jpg, .jpeg">
                    </div>
                </form>
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
                            <div class="" id="phonetext">
                                <div class="isiboxphoneedit">
                                    <div class="identitasphone" style="margin-right: 0.5vw;">+62895635863956</div>
                                    <button onclick="showphone()">
                                        <svg class="editphonenumbericon" xmlns="http://www.w3.org/2000/svg" width="1.7vw" height="1.7vw" viewBox="0 0 256 256"><path d="m227.32 73.37l-44.69-44.68a16 16 0 0 0-22.63 0L36.69 152A15.86 15.86 0 0 0 32 163.31V208a16 16 0 0 0 16 16h168a8 8 0 0 0 0-16H115.32l112-112a16 16 0 0 0 0-22.63ZM92.69 208H48v-44.69l88-88L180.69 120ZM192 108.69L147.32 64l24-24L216 84.69Z" /></svg>
                                    </button>
                                </div>
                            </div>

                            <div class="" id="phoneinput">
                                <div class="isiboxphoneedit">
                                    <form action="{{ route('profile') }}" onsubmit="return validate()">
                                        <input type="text" name="" value="+62895635863956" style="font-size: 1.8vw;" id="phoneinputform">
                                        <button type="submit">
                                            <svg class="editphonenumbericon" xmlns="http://www.w3.org/2000/svg" width="1.7vw" height="1.7vw" style="margin-top: 1.2vw; margin-left: 0.2vw; margin-right: 0.5vw" viewBox="0 0 24 24"><path fill="currentColor" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4L9.55 18Z" /></svg>
                                        </button>
                                    </form>
                                    <button onclick="showphone()" class="boxcheckcross">
                                        <svg class="editphonenumbericon" xmlns="http://www.w3.org/2000/svg" width="1.7vw" height="1.7vw" viewBox="0 0 24 24"><path fill="currentColor"d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" /></svg>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="boxtempatsampah">
                        {{-- <img class="icontempatsampah" id="sampahbtn" src="{{ asset('Assets/Profile assets/tempatsampah.png') }}" alt=""> --}}
                        <img class="icontempatsampah w-[2.5vw] h-[3vw] scale-[0.8] hover:scale-[1]" id="sampahbtn" src="{{ asset('Assets/delete.png') }}" alt="">
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
                                        <a href="/logout"><button class="btnyesmodal">Yes</button></a>
                                        <button class="btncancelmodal" id="btncancelmodal1">Cancel</button>
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
                                <div class="mt-[0.2vw] w-[25vw] rounded-[0.3vw] border-none"
                                    style="border: #1B2F45 0.2vw solid">
                                    <form id="xtrareg" action="/xtrareg" method="POST"
                                        onsubmit="return eventsubmits(this)" autocomplete="off">
                                        {{-- <select name="xtrachs" class="bg-gray-50 border border-gray-300 border-[0.1vw] rounded-[0.3vw] text-gray-900 text-sm focus:border-blue-500 block w-[25vw] h-[2.5vw] p-[0.2vw] focus:text-black text-[2vw]" required> --}}
                                        <div class="select-wrap"
                                            class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] border-none">
                                            <select name="xtrachs"
                                                class="input bg-gray-50 text-gray-900 text-sm block max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[2vw] scrollbar-hide">
                                                <div id="select-box"
                                                    class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] border-none">
                                                    <option selected="false" disabled class="hidden">Choose one of
                                                        your Xtra</option>
                                                    <option
                                                        class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[1.5vw] border-none"
                                                        id="xtrachs" value="">Running</option>
                                                    <option
                                                        class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[1.5vw] border-none"
                                                        id="xtrachs" value="">Running</option>
                                                    <option
                                                        class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[1.5vw] border-none"
                                                        id="xtrachs" value="">Running</option>
                                                    <option
                                                        class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[1.5vw] border-none"
                                                        id="xtrachs" value="">Running</option>
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
                                    <a href="/logout"><button class="btnyesmodal">Yes</button></a>
                                    <button class="btncancelmodal" id="btncancelmodal2">Cancel</button>
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
    </script>

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

    <script>
        //SCRIPT MODAL TEMPAT SAMPAH======================================
        // Get modal
        var modalsampah = document.getElementById("modalsampah")

        // Get button that opens modal
        var btnsampah = document.getElementById("sampahbtn");

        // Get the <span> element that closes the modal
        var spansampah = document.getElementsByClassName("closesampah")[0];
        var btncancel = document.getElementById("btncancelmodal1");

        // When the user clicks the button, open the modal
        btnsampah.onclick = function() {
            modalsampah.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        spansampah.onclick = function() {
            modalsampah.style.display = "none";
        }

        btncancel.onclick = function() {
            modalsampah.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modalsampah.style.display = "none";
            }
        }
        // SCRIPT MODAL TEMPAT SAMPAH========================================
    </script>

    <script>
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

    <script>
        document.getElementById('iconcamera').addEventListener('click', function() {
            document.getElementById('fileupload').click();
        });

        document.getElementById('fileupload').addEventListener('change', function() {
            var files = this.files;
            // Handle uploaded files here
            console.log(files);
        });
    </script>

    <script>
        function showphone() {
            var phonetext = document.getElementById('phonetext');
            var phoneinput = document.getElementById('phoneinput');

            if (phonetext.style.display == 'block') {
                phonetext.style.display = 'none';
                phoneinput.style.display = 'block';
            } else {
                phonetext.style.display = 'block';
                phoneinput.style.display = 'none';
            }
        }

        function validate() {
            var phone = document.getElementById('phoneinputform');

            if (phone.value.length < 12) {
                alert("Phone number can't be less than 12 characters!")
                return false;
            }
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>

</html>
