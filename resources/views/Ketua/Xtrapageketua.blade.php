<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />

    <!-- memanggil CSS di dalam folder CSS -->
    <link rel="stylesheet" href="{{ asset('css/Xtrapage.css') }}" />

    <!-- memanggil swiper JS  -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- memanggil font awesome  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- memanggil AOS  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <title></title>
  </head>
  <body>
    <!-- kalau ingin membuat navbar kita bisa buka web yang namanya botstrap.com lalu cari namanya navbar  -->

    <!-- navbar -->
    @include('Non-User.navbarNU')
    <!-- navbar -->

    <!-- jumbotron search di bootstrap  -->
    <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0vw !important">
      <div class="box-jumbotron">
        <!-- membuat baris dan kolom di bootstrap : row untuk membuat baris col untuk collom -->
        <div class="containerlogo">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="flex: 1;" >
                    <div class="cursor-default" style="position: absolute; margin-top: 6.5vw;">
                    <div class="button-elips" onmouseover ="hover()" onmouseout="out()">
                      <a class="buttons" href="#" data-value="Running" data-text="Xtra">Xtra</a>
                      <a class="buttons" href="" data-value="Wed(17.00 - 19.00)" data-text="Schedule">Schedule</a>
                      <a class="buttons" href="" data-value="Jevent Natthannael" data-text="Leader">Leader</a>
                    </div>
                  </div>

                {{-- JS untuk hover Xtra Schedule Leader --}}
                <script>
                  const buttons = document.querySelectorAll('.buttons');

                  buttons.forEach((button) => {

                      button.addEventListener('mouseover', (e) => {

                          const value = e.target.getAttribute('data-value');

                          e.target.innerHTML = value;
                          e.target.style.backgroundColor = '#1B2F45';
                          e.target.style.color = 'white';
                          e.target.style.fontSize = '2vw';
                        //   e.target.style.width = '40vw';

                        if (value == 'Running') {
                            e.target.classList.add('JudulXtra');
                            e.target.style.width = '30vw';
                            e.target.style.padding = '1.3vw 1vw 1.3vw 17.5vw';
                            e.target.style.marginBottom = '-0.5vw';
                        } else if (value == 'Wed(17.00 - 19.00)') {
                            e.target.style.padding = '1.3vw 1vw 1.3vw 17.5vw';
                            e.target.style.width = '38vw';
                            e.target.style.marginTop = '-0.28vw';
                            e.target.style.marginBottom = '-0.3vw';
                            e.target.classList.add('ScheduleXtra');
                        } else if (value == 'Jevent Natthannael') {
                            e.target.style.padding = '1.3vw 1vw 1.3vw 18vw';
                            e.target.style.width = '40vw';
                            e.target.style.marginTop = '-0.58vw';
                            e.target.classList.add('LeaderXtra');
                        }

                      });
                      button.addEventListener('mouseout', (e) => {
                          const text = e.target.getAttribute('data-text');

                          e.target.innerHTML = text;
                          e.target.style.backgroundColor = '#d9d9d9';
                          e.target.style.color = '#1B2F45';
                          e.target.style.fontSize = '1.7vw';
                        //   e.target.style.width = '25.5vw';

                          if (text == 'Xtra') {
                            e.target.style.padding = '1.3vw 1vw 1.3vw 18vw';
                            // e.target.style.marginBottom = '-0.08vw';
                            e.target.style.marginBottom = '0vw';
                            e.target.style.width = '25.2vw';
                            e.target.classList.remove('JudulXtra');
                          } else if (text == 'Schedule') {
                            e.target.style.padding = '1.3vw 1vw 1.3vw 18vw';
                            e.target.style.width = '29.2vw';
                            e.target.style.marginTop = '-0.08vw';
                            e.target.style.marginBottom = '-0.08vw';
                            e.target.classList.remove('ScheduleXtra');
                          } else if (text == 'Leader') {
                            e.target.style.padding = '1.3vw 1vw 1.3vw 18vw';
                            e.target.style.width = '27.6vw';
                            // e.target.style.marginTop = '-0.08vw';
                            e.target.style.marginTop = '0vw';
                            e.target.classList.remove('LeaderXtra');
                          }
                      });
                  });

                </script>
            {{-- JS untuk hover Xtra Schedule Leader --}}

              <div class="elips" style="border-radius: 50%; height: 20.8vw; width: 20.8vw; margin-left: -4vw; background-color: white;">
                <!--ganti margin-left-->
                <img src="{{ asset('Assets/Xtrapage assets/Ellipse 45.png') }}" alt="" class="elips" style="height: 20.8vw; width: 20.8vw;"/>
              </div>
            </div>

            <div
              class="col-lg-6 col-md-6 col-sm-6 col-6"
              id="bca"
            >
                <img src="{{ asset('Assets/Xtrapage assets/bca.png') }}" alt="" class="bca" style="width: 30vw; margin-left: 2.5vw;"/>
            </div>
          </div>
        </div>
      </div>
    </div>
{{-- <div class="bawahjumbotron" style=" height: 93.2vw; width: 99.2vw; border: cyan solid"> --}}
    <div class="SpJumbotronMain" style="height: 5.5vw;"> </div>

    <main style="height: auto;">
      <div class="containertengah" style="height: auto; margin-left: 2.2vw; margin-right: 2.2vw; margin-bottom: 0vw !important;">

        <div class="button-make-advance float-right">
          <a href="{{ asset('absensiketua') }}" class="btn">Make Attendance</a>
          <a type="button" class="btn" data-toggle="modal" data-target="#add">
            Add Schedule
          </a>
        </div>

        <div class="spasi" style="height: 8vw"></div>
        <!-- membuat navs di bootstrap -->
        {{-- Pilihan Sections --}}
        <ul
          class="nav nav-tabs"
          id="myTab"
          role="tablist"
        >
          <li class="nav-item">
            <a
              class="nav-link active"
              id="home-tab"
              data-toggle="tab"
              href="#home"
              role="tab"
              aria-controls="home"
              aria-selected="true"
              style="padding-top: 1vw; width: 18vw"
              >Description</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="profile-tab"
              data-toggle="tab"
              href="#profile"
              role="tab"
              aria-controls="profile"
              aria-selected="false"
              style="padding-top: 1vw; width: 18vw"
              >Documentation</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="contact-tab"
              data-toggle="tab"
              href="#contact"
              role="tab"
              aria-controls="contact"
              aria-selected="false"
              style="padding-top: 1vw; width: 18vw"
              >Member</a
            >
          </li>
        </ul>
        {{-- Pilihan Sections --}}

        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="home"
            role="tabpanel"
            aria-labelledby="home-tab"
          >
            <form action="" class="KotakForm">
              <div class="form-group" id="KotakDesc">
                <label for="exampleFormControlTextarea1" style="font-size: 1.5vw; margin-bottom: 0 !important;">Description :</label>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  name="descriptiontextarea"
                ></textarea>
              </div>

              <div class="form-group" id="KotakAct">
                <label for="exampleFormControlTextarea1" style="font-size: 1.5vw; margin-bottom: 0 !important;">Activity :</label>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  name="activitytextarea"
                ></textarea>
              </div>
            </form>
          </div>

          <div
            class="tab-pane fade"
            id="profile"
            role="tabpanel"
            aria-labelledby="profile-tab"
          >
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="card" style="width: 19vw">
                    <img
                      src="{{ asset('Assets/Xtrapage assets/foto/1.png') }}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 19vw">
                    <img
                      src="{{ asset('Assets/Xtrapage assets/foto/2.png') }}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 19vw">
                    <img
                      src="{{ asset('Assets/Xtrapage assets/foto/3.png') }}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 19vw">
                    <img
                      src="{{ asset('Assets/Xtrapage assets/foto/1.png') }}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 19vw">
                    <img
                      src="{{ asset('Assets/Xtrapage assets/foto/1.png') }}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 19vw">
                    <img
                      src="{{ asset('Assets/Xtrapage assets/foto/1.png') }}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 19vw">
                    <img
                      src="{{ asset('Assets/Xtrapage assets/foto/1.png') }}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 19vw">
                    <img
                      src="{{ asset('Assets/Xtrapage assets/foto/1.png') }}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
              </div>
              <!-- <div class="swiper-pagination"></div> -->
              <!-- <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div> -->
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="contact"
            role="tabpanel"
            aria-labelledby="contact-tab"
          >

          <div class="font-weight-bold" style="font-size: 1.45vw; padding-left: 1vw;">Member : <span class="nummember">14</span></div>

            <div class="row" id="member">
              <br />
              <div class="col-lg-6 col-sm-6 col-md-6 col-6">

                <div class="luarcard">

                    <h4 class="text-center text-dark font-weight-bold" style="font-size: 1.5vw; margin-top: 1vw; margin-bottom: 0.8vw">
                        Member List
                    </h4>

                    <div class="card">

                    <span class="badge">Jevent Natthannael</span>
                    <span class="badge">Jordan Cornelius</span>
                    <span class="badge">Jevent Natthannael</span>
                    <span class="badge">Jevent Natthannael</span>
                    <span class="badge">Michael Apen</span>
                    <span class="badge">Harris Wahyudi</span>
                    <span class="badge">Jevent Natthannael</span>
                    <span class="badge">Michael Apen</span>
                    <span class="badge">Harris Wahyudi</span>
                    <span class="badge">Jevent Natthannael</span>
                    <span class="badge">Michael Apen</span>
                    <span class="badge">Harris Wahyudi</span>
                    </div>
                </div>

              </div>

              <br />
              <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                <img src="{{ asset('Assets/Xtrapage assets/stop.png') }}" alt="" class="gambarstop"/>
                <div class="btn-member">
                  <button
                    type="button"
                    class="btn"
                    data-toggle="modal"
                    data-target="#staticBackdrop"
                  >
                    Leave Xtra
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="Sp3SeOML" style="height: -50vw; margin-top: 2.9vw; margin-bottom: -4vw; border: purple solid;"> </div> --}}
      <!-- presence member list -->

      <div class="presence" style="margin-top: 3vw;">
        <div class="containerbawah">
          <div class="TulisanPresenceMember" style="">Presence Member : <span class="numpresence">10</span> </div>
          {{-- <div class="float-right font-weight-bold" style="font-size: 1.4vw">Presence Member : <span class="numpresence">10</span> </div> --}}
          <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Choose date<img src="{{ asset('Assets/Xtrapage assets/chevron-down.png') }}" alt="" style="margin-left: 0.5vw; width: 2vw;"/></button>
            <div id="myDropdown" class="dropdown-content">
              <a href="#">March 12, 2023</a>
              <a href="#">March 12, 2023</a>
              <a href="#">March 12, 2023</a>
              <a href="#">March 12, 2023</a>
              <a href="#">March 12, 2023</a>
              <a href="#">March 12, 2023</a>
              <a href="#">March 12, 2023</a>
              <a href="#">March 12, 2023</a>
            </div>
          </div>

          <div class="luarPML">
              <h4 class="text-center font-weight-bold" style="color: white; font-size: 1.5vw; background-color: #1b2f45; margin-top: 0.5vw; padding-top:0.2vw; padding-bottom: 0.3vw;margin-right: 2vw; margin-left: 2vw;">
                  Presence Member List
              </h4>
              <div class="presence-list">

                      <div class="kotakisiPME">
                      <span class="badge">Jevent Natthannael</span>
                      <span class="badge">Jordan Cornelius</span>
                      <span class="badge">Nathaniel Calvin</span>
                      <span class="badge">Steven Felizion</span>
                      <span class="badge">Michael Apen</span>
                      <span class="badge">Harris Wahyudi</span>
                      <span class="badge">Nathaniel Calvin</span>
                      <span class="badge">Steven Felizion</span>
                      <span class="badge">Michael Apen</span>
                      <span class="badge">Harris Wahyudi</span>
                      </div>

              </div>
          </div>
        </div>
      </div>
    </main>

    <!-- modal -->
    <div
      class="modal fade"
      id="staticBackdrop"
      data-backdrop="static"
      data-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div
          class="modal-content"
          style="border-radius: 20px; border: 2px solid black"
        >
          <div class="modal-header" style="border: none">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4 class="font-weight-bold" style="margin-top: -2vw;">
              You Will <span class="text-danger">Leave</span> From This Xtra.
            </h4>
            <h4 class="font-weight-bold">Do You Want To Continue?</h4>

            <div class="btn-yes-or-close float-right">
              <button type="button" class="btn btn-success" id="btn_notif">
                Yes
              </button>
              <a href="" class="btn btn-danger">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal add schedule -->
    <div
      class="modal fade"
      id="add"
      data-backdrop="static"
      data-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" style="background-color: #1b2f45; border-radius: 2vw; padding: 1.8vw;">
          <div class="modal-header" style="border: none">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6 col-sm-6 col-md-6">
                <input
                  type="date"
                  class="form-control"
                  id="inputEmail3"
                  style="background-color: #d9d9d9;"
                />
              </div>
              <div class="col-lg-6 col-sm-6 col-md-6">
                <form class="form_add">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 1.5vw;"
                      >Xtra:</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="email"
                        class="form-control"
                        id="inputEmail3"
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 1.5vw;"
                      >Activity:</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="email"
                        class="form-control"
                        id="inputEmail3"
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 1.5vw;"
                      >Schedule:</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="email"
                        class="form-control"
                        id="inputEmail3"
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 1.5vw;"
                      >Location:</label
                    >
                    <div class="col-sm-10">
                      <input
                        type="email"
                        class="form-control"
                        id="inputEmail3"
                      />
                    </div>
                  </div>

                  <center>
                    <button class="btn" id="btn-confirm">Confirm</button>
                  </center>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
{{-- </div> --}}

    <!-- footer -->
    @include('../footer')
    <!-- </footer> -->

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3.5,
        spaceBetween: 30,
        // navigation: {
        //   nextEl: ".swiper-button-next",
        //   prevEl: ".swiper-button-prev",
        // },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });

      AOS.init();
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    <script>
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
    </script>

</body>
</html>
