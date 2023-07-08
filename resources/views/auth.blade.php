<html>
   <head>
      <title>Phone Number Authentication</title>
      <!-- CSS only -->
       {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
       <link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
       <!-- Js only -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        @vite('resources/css/app.css')

   </head>

   <body>
    <div id="modalpopupLO" class="fixed w-screen flex justify-center items-center mt-[2.7vw] z-50">
        <div class="w-[67vw] h-[5vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#FFFFFF] rounded-[1.5vw]">
            <div class="w-[66vw] h-[4vw] flex items-center justify-center text-nunito font-semibold text-[1.7vw] bg-[#D9D9D9] rounded-[1vw] border-[#395474] border-[0.4vw]">
                Successfully logged out
                <svg xmlns="http://www.w3.org/2000/svg" id="hidemodalLO" class="absolute ml-[61.5vw] w-[2vw] h-[2vw] cursor-pointer" viewBox="0 0 256 256"><path fill="currentColor" d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z"/></svg>
            </div>
        </div>
    </div>
    <script>
        var modal2 = document.getElementById('modalpopupLO');
        var hidemodal2 = document.getElementById('hidemodalLO');

        hidemodal2.addEventListener('click', closePopup2);

        function closePopup2(){
            modal2.style.display="none";
        }
    </script>
    
        <div class="bgimg">
            <div class="containerall">
                <div class="alert alert-danger" id="error" style="display: none;"></div>
                <div class="section1">
                    <div class="judul">Authentication</div>
                    <div class="perintah1">
                    Please enter your phone number
                    </div>
                    <div class="sub-section1">
                    <div class="alert alert-success" id="sentSuccess" style="display: none;"></div>
                    <form class="formAuth1">
                        <div class="boxPN">
                            <label class="keteranganPN">Phone Number:</label>
                            <input type="text" id="number" class="formPNV" placeholder="+62********" value="{{ '+' . $data['phoneNumber'] }}">
                        </div>
                        <div id="recaptcha-container" class="captcha"></div>
                        <button type="button" class="btn btn-successSend" onclick="phoneSendAuth();">Send Code</button>
                    </form>
                    </div>
                </div>

                <div class="section2">
                    <div class="perintah2">
                    Enter Verification code
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success" id="successRegsiter" style="display: none;"></div>
                        <form class="formAuth2">
                            <input type="text" id="verificationCode" class="formPNV" placeholder="Input verification code">
                            <button type="button" class="btn btn-successVerify" onclick="codeverify();">Verify Code</button>
                        </form>
                        <form action="{{ route('confirm-phone-number') }}" method="POST" id="confirmPN">
                            @csrf
                            @foreach($data as $key => $value)
                                <input type="hidden" name="data[{{ $key }}]" value="{{ $value }}">
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
      <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
      <script>
         var firebaseConfig = {
           apiKey: "AIzaSyC1c9dF0Vrlig7O58Xkjlu584EjN8RcdnI",
           authDomain: "xmas-59579.firebaseapp.com",
           projectId: "xmas-59579",
           storageBucket: "xmas-59579.appspot.com",
           messagingSenderId: "243776550760",
           appId: "1:243776550760:web:3f41ddbdbcd5ec9b3448dd",
           measurementId: "G-LM1P3FPXEX"
         };

         firebase.initializeApp(firebaseConfig);
      </script>
      <script type="text/javascript">
        window.onload=function () {
        render();
        };

        function render() {
            window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
            recaptchaVerifier.render();
        }

        function phoneSendAuth() {
            var number = $("#number").val();

            firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {

                window.confirmationResult=confirmationResult;
                coderesult=confirmationResult;
                console.log(coderesult);

                $("#sentSuccess").text("Message Sent Successfully.");
                $("#sentSuccess").show();
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }

        function codeverify() {
            var code = $("#verificationCode").val();

            coderesult.confirm(code).then(function (result) {
            var user=result.user;

            $("#confirmPN").submit();
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }
      </script>
   </body>
</html>
