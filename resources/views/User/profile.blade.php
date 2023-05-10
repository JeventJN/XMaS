<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile-User</title>
    <link rel="stylesheet" href="{{ asset('css/profileuser.css') }}">
</head>
<body>
    <div class="batas">
        <div class="boxfotoprofile">
            <div class="boxluarfoto">

            </div>
            <div class="boxluarprofile">
                <div class="boxidentitastempatsampah">
                    <div class="boxidentitas">
                        <div class="formidentitas">Nama</div>
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
                        <div class="identitasphone">+62895635863956</div>
                    </div>
                    <div class="boxtempatsampah">
                        <img class="icontempatsampah" src="{{ asset('Assets/Profile assets/tempatsampah.png') }}" alt="">
                    </div>
                </div>
                <div class="spasi"></div>
                <div class="boxtombol">

                    {{-- ini untuk member --}}
                    <button type="button" class="request" id="requestbtn">Request Leader Access</button>

                    {{-- Modal Request --}}
                    <div id="modalrequest" class="modal">
                        {{-- Modal Content --}}
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <div class="kotakisimodal">
                                <div class="judulmodal">What extracurricular leader are you?</div>
                                <div class="dropdown">
                                    {{-- <button onclick="myFunction()" class="dropbtn">Choose one of your extracurricular</button> --}}
                                    <select name="Choose" id="">Choose your ekskul</select>
                                    <div id="myDropdown" class="dropdown-content">
                                      <a href="#">Running</a>
                                      <a href="#">Volley</a>
                                      <a href="#">Basketball</a>
                                      <a href="#">Chess</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <script>
                        //SCRIPT MODAL======================================
                        // Get modal
                        var modal = document.getElementById("modalrequest")

                        // Get button that opens modal
                        var btn = document.getElementById("requestbtn");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks the button, open the modal
                        btn.onclick = function() {
                            modal.style.display = "block";
                        }

                            // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        }

                            // When the user clicks anywhere outside of the modal, close it
                        window.onclick = function(event) {
                            if (event.target == modal) {
                                modal.style.display = "none";
                            }
                        }
                        // SCRIPT MODAL========================================

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

                    {{-- ini untuk member --}}

                    {{-- ini untuk leader --}}
                    {{-- <button type="button" class="request">Extracurricular Report</button> --}}
                    {{-- ini untuk leader --}}

                    <button type="button" class="logout">Logout</button>

                </div>
            </div>
        </div>

        <div class="boxstatus">
            <div class="boxstatus1">

                {{-- ini untuk member --}}
                {{-- <div class="boxstatus2member">
                    <div class="boxstatus3member">
                        Member
                    </div>
                </div> --}}
                {{-- ini untuk member --}}

                {{-- ini untuk leader --}}
                <div class="boxstatus2leader">
                    <div class="boxstatus3leader">
                        Leader
                    </div>
                </div>
                {{-- ini untuk leader --}}

            </div>
        </div>

    </div>

</body>
</html>
