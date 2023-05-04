<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FOOTER</title>

  <!-- Google Fonts Footer -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Feather Icons Footer -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Template Main CSS File Footer -->
  <link href="gabunganfooter.css" rel="stylesheet">
  <style>
    #min{
        display: flex;
        flex-direction: column;
        justify-content: end;
        align-items: end;
        position: absolute;
        width: 100%;
        display: block;
    }
    #max{
        display:none;
    }
  </style>
</head>

<body>
    <button class="cursor-default" onmouseover ="hover()" onmouseout="out()">
        <div id="smallFooter">
            <footer id="footerA">
                <div class="footer-flex">
                    <div class="copyright">
                        &copy;<strong><span>2023 Sneakys</span></strong>.
                    </div>
                    <div class="credits">
                        Xtracurricular Management System
                    </div>
                    <div class="learnabout">
                        <div class="text">
                            Learn About Us Here
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="bigFooter">
            <footer id="footerB">
                <div class="footer-flex">
                    <div class="copyright">
                        &copy;<strong><span>2023 Sneakys</span></strong>.
                    </div>
                    <div class="tengah">
                        <div class="judul">
                            Extracurricular
                        </div>
                        <div class="isi">
                            <div class="isikiri">
                                <a class="linktext" href="">Running<br></a>
                                <a class="linktext" href="">Dance<br></a>
                                <a class="linktext" href="">Badminton<br></a>
                                <a class="linktext" href="">Basketball<br></a>
                                <a class="linktext" href="">Ping-Pong<br></a>
                                <a class="linktext" href="">Soccer<br></a>
                                <a class="linktext" href="">Chess<br></a>
                            </div>
                        <div class="isitengah"></div>
                        <div class="isikanan">
                            <a class="linktext" href="">Choir<br></a>
                            <a class="linktext" href="">Band<br></a>
                        </div>
                    </div>
                </div>
            <div class="kanan">
                <div class="needhelp">
                    Need Help?
                </div>
                <div class="contact">
                    {{-- <i data-feather="smartphone" class="antara"></i>+62-82175932808<br>
                    <i data-feather="mail" class="antara"></i>jeventjn@gmail.com<br>
                    <i data-feather="instagram" class="antara"></i>XtracurricularMaS<br>
                    <i data-feather="phone" class="antara"></i>+1 234 567 890<br>
                    <i data-feather="home" class="antara"></i>Sentul City, Jl. Pakuan No.3, Sumur Batu, Babakan Madang, Bogor Regency, West Java 16810<br> --}}
                    <div class="contact-icon">
                        <object data="Assets/Footer assets/smartphone.svg" class="antara"></object>
                        <object data="Assets/Footer assets/mail.svg" class="antara"></object>
                        <object data="Assets/Footer assets/instagram.svg" class="antara"></object>
                        <object data="Assets/Footer assets/phone.svg" class="antara"></object>
                        <object data="Assets/Footer assets/home.svg" class="antara"></object>
                    </div>

                    <div class="contact-data">
                        <div class="datasmartphone">+62-82175932808</div>
                        <div class="datamail">jeventjn@gmail.com</div>
                        <div class="datainstagram">XtracurricularMaS</div>
                        <div class="dataphone">+1 234 567 890</div>
                        <div class="datahome">Sentul City, Jl. Pakuan No.3, Sumur Batu, Babakan Madang, Bogor Regency, West Java 16810</div>
                    </div>
                </div>
            </div>
        </div>
    </button>

    <script>
        function hover() {
            var x = document.getElementById("smallFooter");
            var y = document.getElementById('bigFooter');

            if(y.style.display=="block") {
                y.style.display="none";
                x.style.display="block";
            }
            else{
                y.style.display="block";
                x.style.display="none";
            }
        }
        function out() {
            var x = document.getElementById("smallFooter");
            var y = document.getElementById('bigFooter');

            if(x.style.display=="block") {
                x.style.display="none";
                y.style.display="block";
            }
            else{
                x.style.display="block";
                y.style.display="none";
            }
        }
    </script>

</body>

</html>
