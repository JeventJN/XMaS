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
  <link href="{{ asset('gabunganfooter.css') }}" rel="stylesheet">

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
            <div id="smallFooter" style="margin-top: 10.9vw">
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
                </footer>
            </div>
            <div id="bigFooter">
                <footer id="footerB">
                    <div class="footer-flex">
                        <div class="copyright">
                            &copy;<strong><span>2023 Sneakys</span></strong>.
                        </div>
                        <div class="tengah flex flex-col">
                            <div class="judul">
                                Extracurricular
                            </div>

                            @php
                                $xtras = App\Models\extracurricular::all()
                            @endphp

                            <div class="border-[0.1vw] w-[0.1vw] h-[11.8vw] absolute ml-[24.6vw] mt-[5.5vw] leading-[-3vw]"></div>

                            <div class="footertengah w-[30vw] h-[auto] mt-[0.1vw] m-auto grid grid-cols-2">
                                @foreach ($xtras as $xtra)
                                    @if ($xtra->kdExtracurricular % 2 == 1)
                                        <a href="/xtrapage/{{$xtra->kdExtracurricular}}" class="text-right  hover:no-underline hover:font-semibold hover:text-white mr-[0.5vw]">{{$xtra->name}}</a>
                                    @else
                                        <a href="/xtrapage/{{$xtra->kdExtracurricular}}" class="text-left hover:no-underline hover:font-semibold hover:text-white ml-[0.5vw]">{{$xtra->name}}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="kanan">
                            <div class="needhelp">
                                Need Help?
                            </div>
                            <div class="contact">
                                <div class="contact-icon">
                                    <object data="{{asset("/Assets/Footerassets/smartphone.svg")}}" class="antara"></object>
                                    <object data="{{asset("/Assets/Footerassets/mail.svg")}}" class="antara"></object>
                                    <object data="{{asset("/Assets/Footerassets/instagram.svg")}}" class="antara"></object>
                                    <object data="{{asset("/Assets/Footerassets/phone.svg")}}" class="antara"></object>
                                    <object data="{{asset("/Assets/Footerassets/home.svg")}}" class="antara"></object>
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
                </footer>
            </div>
        {{-- </div> --}}
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
