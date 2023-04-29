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

    <!-- memanggil css di dalam folder css -->
    <link rel="stylesheet" href="css/Xtrapage.css" />

    <!-- memanggil swiper js  -->
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

    <!-- memanggil aos  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <title></title>
  </head>
  <body>
    <!-- kalau ingin membuat navbar kita bisa buka web yang namanya botstrap.com lalu cari namanya navbar  -->

    <!-- navbar -->

    <!-- navbar -->

    <!-- jumbotron search di botstrap  -->

    <div class="jumbotron jumbotron-fluid">
      <div class="box-jumbotron">
        <!-- membuat baris dan kolom di bootstrap : row untuk membuat baris col untuk collom -->
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6" data-aos="fade-right ">

              <div class="cursor-default" onmouseover ="hover()" onmouseout="out()">
                <div class="button-elips" id="afterHover">
                  <a href="#" class="JudulXtra"
                  style="text-decoration: none;
                  color: #FFFFFF;
                  padding: 0.52vw 3.125vw;
                  padding-top: 0.74vw;
                  padding-bottom: 0.74vw;
                  padding-left: 13vw;
                  padding-right: 7vw;
                  width: 30vw;
                  border-radius: 0vw 1.3vw 1.3vw 0vw;
                  background-color: #1B2F45;
                  font-size: 30px;
                  font-weight: 900;">Running</a>
                  <a href="" class="ScheduleXtra"
                  style="text-decoration: none;
                  color: #FFFFFF;
                  padding: 0.52vw 3.125vw;
                  padding-top: 0.75vw;
                  padding-bottom: 0.75vw;
                  padding-left: 18vw;
                  padding-right: 1vw;
                  width: 45vw;
                  border-radius: 0vw 1.3vw 1.3vw 0vw;
                  background-color: #1B2F45;
                  font-size: 30px;
                  font-weight: 900;">Wed (17.00-19.00)</a>
                  <a href="" class="LeaderXtra"
                  style="text-decoration: none;
                  color: #FFFFFF;
                  padding: 0.52vw 3.125vw;
                  padding-top: 0.74vw;
                  padding-bottom: 0.74vw;
                  padding-left: 18vw;
                  padding-right: 1vw;
                  width: 45vw;
                  border-radius: 0vw 1.3vw 1.3vw 0vw;
                  background-color: #1B2F45;
                  font-size: 30px;
                  font-weight: 900;">Jevent Natthannael</a>
                </div>
                <div class="button-elips" id="beforeHover">
                  <a href="#" class="JudulXtra">Xtra</a>
                  <a href="" class="ScheduleXtra">Schedule</a>
                  <a href="" class="LeaderXtra">Leader</a>
                </div>
              </div>

            {{-- JS untuk hover Xtra Schedule Leader --}}
              <script>
                function hover() {
                    var x = document.getElementById("beforeHover");
                    var y = document.getElementById('afterHover');

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
                    var x = document.getElementById("beforeHover");
                    var y = document.getElementById('afterHover ');

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
            
            {{-- JS untuk hover Xtra Schedule Leader --}}

              <div class="elips" style="border-radius: 50%; height: 20.8vw; width: 20.8vw; margin-left: -4vw; background-color: white;">
                <!--ganti margin-left-->
                <img src="Assets/Xtrapage assets/Ellipse 45.png" alt="" class="elips" style="height: 20.8vw; width: 20.8vw;"/>
              </div>
            </div>

            <div
              class="col-lg-6 col-md-6 col-sm-6"
              id="bca"
              data-aos="fade-left"
            >
              <center>
                <img src="Assets/Xtrapage assets/bca.png" alt="" class="bca" style="width: 32vw; margin-left: 4.5vw;"/>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>

    <main>
      <br /><br />
      <div class="container">
        <div class="button-make-advance float-right" data-aos="fade-down">
          <a href="absensiketua" class="btn">Make Attendance</a>
          <a type="button" class="btn" data-toggle="modal" data-target="#add">
            Add Schedule
          </a>
        </div>

        <br /><br /><br />
        <!-- membuat navs di bootstrap  -->
        <ul
          class="nav nav-tabs"
          id="myTab"
          role="tablist"
          data-aos="fade-right"
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
              style="padding-top: 1vw;"
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
              style="padding-top: 1vw;"
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
              style="padding-top: 1vw;"
              >Member</a
            >
          </li>
        </ul>
        <div class="tab-content" id="myTabContent" data-aos="fade-down">
          <div
            class="tab-pane fade show active"
            id="home"
            role="tabpanel"
            aria-labelledby="home-tab"
          >
            <form action="">
              <div class="form-group">
                <label for="exampleFormControlTextarea1" style="font-size: 1.5vw;">Description :</label>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  name="descriptiontextarea"
                ></textarea>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1" style="font-size: 1.5vw;">Activity :</label>
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
                  <div class="card" style="width: 18rem">
                    <img
                      src="Assets/Xtrapage assets/foto/1.png"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 18rem">
                    <img
                      src="Assets/Xtrapage assets/foto/2.png"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 18rem">
                    <img
                      src="Assets/Xtrapage assets/foto/3.png"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 18rem">
                    <img
                      src="Assets/Xtrapage assets/foto/1.png"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 18rem">
                    <img
                      src="Assets/Xtrapage assets/foto/1.png"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 18rem">
                    <img
                      src="Assets/Xtrapage assets/foto/1.png"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 18rem">
                    <img
                      src="Assets/Xtrapage assets/foto/1.png"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card" style="width: 18rem">
                    <img
                      src="Assets/Xtrapage assets/foto/1.png"
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
          <h5 class="font-weight-bold">Member : 14</h5>
            <div class="row" id="member">
              <br />
              <div class="col-lg-6 col-sm-6 col-md-6">
                <div class="card">
                  <h4 class="text-center text-dark font-weight-bold">
                    Member List
                  </h4>

                  <span class="badge">Jevent Natthannael</span>
                  <span class="badge">Jordan Cornelius</span>
                  <span class="badge">Jevent Natthannael</span>
                  <span class="badge">Jevent Natthannael</span>
                  <span class="badge">Michael Apen</span>
                  <span class="badge">Harris Wahyudi</span>
                </div>
              </div>

              <br />
              <div class="col-lg-6 col-sm-6 col-md-6">
                <img src="Assets/Xtrapage assets/stop.png" alt="" class="gambarstop"/>
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

      <!-- presence member list -->

      <div class="presence" data-aos="fade-down">
        <div class="container">
          <h5 class="float-right font-weight-bold" style="padding-top: 1.8vw;">Presence Member : 10</h5>
          <div class="dropdown">
            <a
              class="btn dropdown-toggle"
              href="#"
              role="button"
              id="dropdownMenuLink"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Choose date
            </a>

            <form class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">March 12, 2023</a>
              <a class="dropdown-item" href="#">March 12, 2023</a>
              <a class="dropdown-item" href="#">March 12, 2023</a>
              <a class="dropdown-item" href="#">March 12, 2023</a>
              <a class="dropdown-item" href="#">March 12, 2023</a>
            </form>
          </div>

          <div class="presence-list">
            <div class="container">
              <div class="row p-5 d-flex justify-content-center">
                <div class="col-13">
                  <h4 class="text-center text-light font-weight-bold" style="margin-top: -1.8vw; position: fixed; width: 45vw; height: 4.5vw; margin-top: -3.75vw; padding-top: 1.8vw; background-color: #1b2f45;">
                    Presence Member List
                  </h4>

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
                <div style="position: fixed; margin-top: 18.25vw; width: 46vw; height: 3vw; background-color: #1b2f45;"></div>
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

    <!-- footer -->

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
        slidesPerView: 3,
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
  </body>
</html>
