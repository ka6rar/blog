@include('inclode.header')





<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">DevFolio</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="/postss">{{$query}}</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll" href=""></a>
          </li>

          @if (Route::has('login'))
          @auth
            <li  class="nav-item"><a class="nav-link js-scroll" href="{{ url('/home') }}">Home</a></li>
          @else
               <li  class="nav-item"><a class="nav-link js-scroll" href="{{ route('login') }}">Login</a></li>

              @if (Route::has('register'))
          <li  class="nav-item"><a class="nav-link js-scroll "href="{{ route('register') }}">Register</a></li>
              @endif
          @endauth
  @endif
        </ul>
      </div>
    </div>
  </nav>




                    <div class="container">

                    <div class="row">


                      <div class="col-md-4">
                        <div class="work-box">
                            <div class="work-img">
                            <img  style="width:100px;" src="" alt="" class="img-fluid" >
                            </div>
                            <div class="work-content">
                              <div class="row">
                                <div class="col-sm-8">
                                <h2 class="w-title"></h2>
                                  <div class="w-more">
                                  <span class="w-ctegory">Web Design</span> / <span class="w-date"></span>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="w-like">
                                  <span class="ion-ios-plus-outline"></span>

                                  </div>

                                </div>

                              </div>

                            </div>

                          </a>


                        </div>
                        <h5>Tag</h5>
                        <span class="badge badge-pill badge-primary"></span>
                        @endforeach
                      </div>
                    </div>


@include('inclode.disqus')

                    </div>
                  </div>

                </section>




                <!-- JavaScript Libraries -->
                <script src="lib/jquery/jquery.min.js"></script>
                <script src="lib/jquery/jquery-migrate.min.js"></script>
                <script src="lib/popper/popper.min.js"></script>
                <script src="lib/bootstrap/js/bootstrap.min.js"></script>
                <script src="lib/easing/easing.min.js"></script>
                <script src="lib/counterup/jquery.waypoints.min.js"></script>
                <script src="lib/counterup/jquery.counterup.js"></script>
                <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                <script src="lib/lightbox/js/lightbox.min.js"></script>
                <script src="lib/typed/typed.min.js"></script>
                <!-- Contact Form JavaScript File -->
                <script src="contactform/contactform.js"></script>

                <!-- Template Main Javascript File -->
                <script src="js/main.js"></script>

              </body>
              </html>
