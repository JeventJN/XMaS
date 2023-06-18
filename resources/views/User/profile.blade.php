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
    @include('User.navbarUser')

    {{-- popup --}}
    @if (session()->has('reportSent'))
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

            setTimeout(() => {
                const modal = document.getElementById("modalpopupSENT");
                modal.style.display = 'none';
            }, 3000);
        </script>
    @endif

    @if (session()->has('alrLeader'))
        <div id="modalLeaderAlr" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
            <div
                class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
                <div
                    class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                    You have already become a leader in another Xtra
                    <svg xmlns="http://www.w3.org/2000/svg" id="hideModalAlr"
                        class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z" />
                    </svg>
                </div>
            </div>
        </div>
        <script>
            var modal2 = document.getElementById('modalLeaderAlr');
            var hidemodal2 = document.getElementById('hideModalAlr');

            hidemodal2.addEventListener('click', closePopup2);

            function closePopup2() {
                modal2.style.display = "none";
            }

            setTimeout(() => {
                const modal = document.getElementById("modalLeaderAlr");
                modal.style.display = 'none';
            }, 3000);
        </script>
    @endif
    {{-- popup --}}

    <div class="batas">
        <div class="boxfotoprofile">
            <div class="boxluarfoto flex">
                @if (Auth::check() && Auth::user()->photo)
                    @if (Illuminate\Support\Str::contains(Auth::user()->photo, 'database-assets'))
                        <img class="m-auto mt-[-0.15vw] min-w-[24.7vw] max-w-[24.7vw] min-h-[27.65vw] max-h-[27.65vw]" src="{{ asset('storage/' . Auth::user()->photo) }}" alt="{{ asset('Assets/UserDP.png') }}" style="object-fit: cover; width: 24.7vw; height: 27.65vw; border-radius: 1.95vw;">
                    @else
                        <img class="" src="{{ asset('Assets/UserDP.png') }}" alt="{{ asset('Assets/UserDP.png') }}">
                    @endif
                @endif

                <form id="imageForm" action="/changeImage" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="iconcamera" id="iconcamera">
                        <img class="fotocamera" for="upload-photo" src="{{ asset('Assets/Profileassets/Edit Photo.svg') }}" alt>
                        <input type="file" name="fileupload" id="fileupload" style="display: none" accept=".png, .jpg, .jpeg">
                        <input type="hidden" name="NIP" value="{{ Auth::user()->NIP }}">
                    </div>
                </form>

                <script>
                    document.getElementById("fileupload").addEventListener("change", function() {
                        document.getElementById("imageForm").submit();
                    });
                </script>
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
                        <div class="identitasnama">{{Auth::User()->name}}</div>
                        <div class="identitasNIP">{{str_pad(Auth::user()->NIP, 4, '0', STR_PAD_LEFT)}}</div>

                        <div class="boxphoneedit">
                            <div class="" id="phonetext">
                                <div class="isiboxphoneedit">
                                    <div class="identitasphone" style="margin-right: 0.5vw;">{{ substr_replace(Auth::User()->phoneNumber, "0", 0, 2) }}</div>
                                    <button onclick="showphone()">
                                        <svg class="editphonenumbericon" xmlns="http://www.w3.org/2000/svg"
                                            width="1.7vw" height="1.7vw" viewBox="0 0 256 256">
                                            <path d="m227.32 73.37l-44.69-44.68a16 16 0 0 0-22.63 0L36.69 152A15.86 15.86 0 0 0 32 163.31V208a16 16 0 0 0 16 16h168a8 8 0 0 0 0-16H115.32l112-112a16 16 0 0 0 0-22.63ZM92.69 208H48v-44.69l88-88L180.69 120ZM192 108.69L147.32 64l24-24L216 84.69Z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="" id="phoneinput">
                                <div class="isiboxphoneedit">
                                    <form action="/changePhone" method="POST" onsubmit="return validate()" style="display: flex; align-items: center;">
                                        @csrf
                                        <input type="number" name="phone" placeholder="{{Auth::User()->phoneNumber}}" style="font-size: 1.8vw; padding-left: 1vw;" id="phoneinputform" autocomplete="off" value="{{ old('phone')}}">
                                        <input type="hidden" name="NIP" value="{{Auth::User()->NIP}}">
                                        <button type="submit">
                                            <svg class="editphonenumbericonsubmit" xmlns="http://www.w3.org/2000/svg" width="2.2vw" height="2.2vw" viewBox="0 0 24 24"><path fill="" d="m9.55 18l-5.7-5.7l1.425-1.425L9.55 15.15l9.175-9.175L20.15 7.4L9.55 18Z" /></svg>
                                        </button>
                                    </form>
                                    <button onclick="showphone()" class="boxcheckcross">
                                        <svg class="editphonenumbericoncancel" xmlns="http://www.w3.org/2000/svg" width="3vw" height="3vw" viewBox="0 0 24 24"><path fill="" d="M16.066 8.995a.75.75 0 1 0-1.06-1.061L12 10.939L8.995 7.934a.75.75 0 1 0-1.06 1.06L10.938 12l-3.005 3.005a.75.75 0 0 0 1.06 1.06L12 13.06l3.005 3.006a.75.75 0 0 0 1.06-1.06L13.062 12l3.005-3.005Z" /></svg>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="boxtempatsampah">
                        {{-- <img class="icontempatsampah" id="sampahbtn" src="{{ asset('Assets/Profileassets/tempatsampah.png') }}" alt=""> --}}
                        <img class="icontempatsampah w-[2.5vw] h-[3vw] scale-[0.8] hover:scale-[1]" id="sampahbtn"
                            src="{{ asset('Assets/delete.png') }}" alt="">
                        {{-- Modal Tempat Sampah --}}
                        <div id="modalsampah" class="modalsampah">
                            {{-- Modal Content --}}
                            <div class="modal-contentsampah">
                                <div class="kotakisimodal">
                                    <div class="boxjudulclosesampah">
                                        <span class="closesampah">&times;</span>
                                    </div>
                                    <div class="isisampah">
                                        <div class="kalimatsampah1">This action will <span
                                                style="color: red;">delete</span> your account</div>
                                        <div class="kalimatsampah2">Do you want to continue?</div>
                                    </div>
                                    <div class="boxsubmitsampah">
                                        <form action="/delete" method="POST">
                                            @csrf
                                            <button class="btnyesmodal">Yes</button>
                                            <input type="hidden" name="NIP" value="{{Auth::User()->NIP}}">
                                        </form>
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
                    @php
                        $members = App\Models\member::all()
                    @endphp

                    @foreach ($members as $member)
                        @if ($member->NIP == Auth::User()->NIP)
                            @if ($member->kdState == 2)
                                @php
                                    // ketua
                                    $flag = 1;
                                @endphp
                                @break

                            @elseif ($member->kdState == 3)
                                @php
                                    // waiting
                                    $flag = 3;
                                @endphp
                                @break

                            @elseif($member->kdState == 1)
                                @php
                                    // member
                                    $flag = 0;
                                @endphp
                                {{-- @break --}}
                            @endif
                        @else
                            @php
                                // not member
                                $flag = -1;
                            @endphp
                        @endif
                    @endforeach

                    {{-- ini untuk member --}}
                    @if($flag == 0)
                        <button type="submit" class="request" id="requestbtn">Request Leader Access</button>

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
                                    <form id="xtrareg" action="/reqLead" method="POST" onsubmit="return eventsubmits()" autocomplete="off">
                                        @csrf
                                        <div class="mt-[0.2vw] w-[25vw] rounded-[0.3vw] border-none">
                                            {{-- <select name="xtrachs" class="bg-gray-50 border border-gray-300 border-[0.1vw] rounded-[0.3vw] text-gray-900 text-sm focus:border-blue-500 block w-[25vw] h-[2.5vw] p-[0.2vw] focus:text-black text-[2vw]" required> --}}
                                            <div class="select-wrap" class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] border-none">
                                                <select name="xtrachs" id="xtrachs" class="input bg-gray-50 text-gray-900 text-sm block max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[2vw] scrollbar-hide" style="border: #1B2F45 0.2vw solid">
                                                    <div class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] border-none bg-red-500">
                                                        <option selected="false" disabled class="hidden" value="">Choose one of your Xtra</option>
                                                        <div class=" max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw]">
                                                            @php
                                                                $anggota = App\Models\userXmas::find(Auth::User()->NIP)->members;
                                                            @endphp

                                                            @foreach ($anggota as $member)
                                                                <option class="max-w-[25vw] min-w-[25vw] max-h-[2.5vw] min-h-[2.5vw] text-[1.5vw] border-none" name="xtra" value="{{ $member->xtras?->kdExtracurricular }}">{{ $member->xtras?->name }}</option>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="spasi1" style="height: 8.5vw;"></div>

                                        <input type="hidden" name="NIP" id="NIP" value="{{Auth::User()->NIP}}" >

                                        <div class="boxsubmitrequest">
                                            <button type="submit" class="btnsubmitmodal">Submit</button>
                                        </div>
                                    </form>
                                    {{-- dropdown jepeng --}}


                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($flag == 3)
                        <button class="requestdisable" id="requestbtn" disabled>Approval Leader on Progress</button>
                    @endif

                    {{-- ini untuk leader --}}
                    @if ($flag == 1)
                        <form action="/reportform" method="POST">
                            @csrf
                            <input type="hidden" name="NIP" id="NIP" value="{{Auth::User()->NIP}}">
                            <button type="submit" class="request">Extracurricular Report</button>
                        </form>
                    @endif

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
                                    <div class="kalimatlogout1">This action will <span style="color: red;">log</span>
                                        you <span style="color: red;">out</span></div>
                                    <div class="kalimatlogout2">Do you want to continue?</div>
                                </div>
                                <div class="boxsubmitlogout">
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="btnyesmodal">Yes</button>
                                    </form>
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
                @if ($flag == 1)
                    {{-- ini untuk leader --}}
                    <div class="boxstatus2leader">
                        <div class="boxstatus3leader">
                            Leader
                        </div>
                    </div>
                @elseif ($flag == 0 or $flag == 3)
                    {{-- ini untuk member --}}
                    <div class="boxstatus2member">
                        <div class="boxstatus3member">
                            Member
                        </div>
                    </div>
                @endif
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
            if (event.target == modallogout) {
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

            if (phone.value.length < 11 || phone.value.length > 13) {
                alert("Phone number must be around 11 to 13.")
                return false;
            }
        }
    </script>

    <script>
        // untuk validasi pilihan ekstra
        function eventsubmits() {
            const xtrachs = document.getElementById('xtrachs');
            // alert(xtrachs.value)
            if (xtrachs.value == "") {
                alert("Choose one xtra");
                return false;
            }


            return true;

        }
    </script>

    <script>
        function janganClose() {
            return false;
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>

</html>
