<html>

<head>
    <title>Phone Number Authentication</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}" />

    <!-- Js only -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bgimg" style="background-image: url('Assets/Auth.png');">
        {{-- <div class="alert alert-success" id="sentSuccess" style="display: none; margin-bottom: 0;"></div>
            <div class="alert alert-success" id="successRegsiter" style="display: none; margin-bottom: 0;"></div>
            <div class="alert alert-danger" id="error" style="display: none; margin-bottom: 0;"></div> --}}
        <div class="containerall">
            <div class="section1">
                <div class="judul">Authentication</div>
                <div class="sub-section1">
                    <form class="formAuth1">
                        <div class="boxPN">
                            <div class="keteranganPN">Phone Number:</div>
                            <input type="text" id="number" class="formPNV1" placeholder="+62********" value="{{ '+' . $data['phoneNumber'] }}" disabled>
                        </div>
                        <div class="captchaContainer">
                            <div id="recaptcha-container" class="captcha"></div>
                        </div>
                        <button type="button" class="btn-successSend" onclick="phoneSendAuth();">Send Code</button>
                        <div class="alertContainer1">
                            <div class="flex text-red-500 text-[1vw] mt-[0.5vw] items-left w-full font-semibold" id="error" style="display: none"></div>
                            <div class="flex text-green-500 text-[1vw] mt-[0.5vw] items-left w-full font-semibold" id="sentSuccess" style="display: none"></div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="section2">
                <div class="perintah">
                    Verification code
                </div>
                <div class="sub-section2">
                    <form class="formAuth2">
                        <input type="text" id="verificationCode" class="formPNV2" placeholder="Input verification code" autocomplete="off">
                        <button type="button" class="btn-successVerify" onclick="codeverify();">Verify Code</button>
                    </form>
                    <div class="alertContainer2">
                        <div class="flex text-red-500 text-[1vw] mt-[0.5vw] items-left w-full font-semibold" id="errorV" style="display: none;"></div>
                    </div>
                    <form action="{{ route('confirm-phone-number') }}" method="POST" id="confirmPN">
                        @csrf
                        @foreach ($data as $key => $value)
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
        window.onload = function() {
            render();
        };

        function render() {
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
            recaptchaVerifier.render();
        }

        function phoneSendAuth() {
            var number = $("#number").val();

            firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {

                window.confirmationResult = confirmationResult;
                coderesult = confirmationResult;
                console.log(coderesult);

                $("#error").hide(); // Hide the error alert
                $("#sentSuccess").text("Message Sent Successfully.");
                $("#sentSuccess").show();
            }).catch(function(error) {
                $("#sentSuccess").hide(); // Hide the success alert
                $("#error").text(error.message);
                $("#error").show();
            });
        }

        function codeverify() {
            var code = $("#verificationCode").val();

            coderesult.confirm(code).then(function(result) {
                var user = result.user;
                $("#confirmPN").submit();
            }).catch(function(error) {
                $("#sentSuccess").hide(); // Hide the success alert
                $("#error").hide(); // Hide the error alert
                $("#errorV").text(error.message);
                $("#errorV").show();
            });
        }
    </script>
</body>

</html>
