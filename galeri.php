<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Content-Type" content="text//html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta itemprop="name" content="Komunitas ">
  <meta itemprop="description"
    content="Sekolah Coding Jakarta merupakan tempat belajar pemogramman berbahasa indonesia yang memiliki beberapa fitur yaitu course online, diskusi online, dan update pengetahuan tentang pemrograman">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/Vendor/bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <script defer src="assets/JS/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="assets/Vendor/bootstrap-4.4.1-dist/js/bootstrap.min.js">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/CSS/gallery.css">
  <link rel="stylesheet" href="css/fixed.css">
  <link href="assets/Vendor/icofont/icofont.min.css" rel="stylesheet">
  <!--ICON-->
  <link rel="stylesheet" href="assets/Vendor/fontawesome-free-5.12.1-web/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/Vendor/fontawesome-free-5.12.1-web/css/all.css">
  <link rel="stylesheet" href="assets/Vendor/fontawesome-free-5.12.1-web/js/all.js">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">

  <title>Galeri | Sekolah Coding Jakarta</title>
  <!--Title Icon -->
  <link rel="shortcut icon" href="assets/Images/logo/scjblue.ico">



</head>

<body>

  <!-- START NAVIGATION -->
  <nav class="navbar navbar-expand-lg  sticky-top">
    <div class="container">
      <a class="navbar-home" href="homeadmin.php">
        <span class="fa fa-home"></span> Home
      </a>
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main_nav"
        aria-expanded="false" aria-label="Toggle navigation" aria-controls="navbar">
        <span class="fa fa-align-justify text-black"></span>
      </button>
      <div class="collapse navbar-collapse" id="main_nav">

        <ul class="navbar-nav ml-auto">
         
          <li class="nav-item" id="nav-item"><a class="nav-link" href="berita.php"> Berita </a></li>
          <li class="nav-item" id="nav-item"><a class="nav-link" href="galeri.php"> Galeri </a></li>
          <li class="nav-item" id="nav-item"><a class="nav-link" href="logout.php"> Logout </a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END NAVIGATION -->

  <!-- SECTION CONTENT -->
  <section class="content mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <!-- BERITA TERBARU -->
          <h5 class="page-title mt-5 mb-3">All About Sekolah Coding Jakarta </h5>


          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card h-100 card-content border-secondary rounded-0 ">
                <img class="ard-img rounded-0 img-fluid p-2" src="assets/Images/albumss/ujian.jpg"
                  alt="outing class mim01">
                <div class="card-body pb-2">
                  <h5 class="card-title">Ujian Kelas</h5>
                  <p class="card-text">
                    Potret ketika ujian sedang berlangsung
                  </p>
                </div>
                <div class="card-footer">
                  <button class="btn action-button rounded-0 float-right" type="button" id="gallery" data-toggle="modal"
                    data-target="#modal1">
                    <i class="fa fa-search"></i>
                  </button>
                </div>

              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselExample" class="carousel slide" data-ride="carousel">

                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="assets/Images/albumss/ujian.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/Images/albumss/ujian2.jpg" alt="Second slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="card h-100 card-content border-secondary rounded-0 ">
                <img class="ard-img rounded-0 img-fluid p-2" src="assets/Images/albumss/kegiatan-kelas.jpg"
                  alt="pramuka mim01">
                <div class="card-body pb-2">
                  <h5 class="card-title">Pembelajaran Di Kelas</h5>
                  <p class="card-text">
                    Dokumentasi ketika pembicara dan peserta sedang presentasi di depan kelas
                  </p>
                </div>
                <div class="card-footer">
                  <button class="btn action-button rounded-0 float-right" type="button" id="gallery" data-toggle="modal"
                    data-target="#modal2">
                    <i class="fa fa-search"></i>
                  </button>
                </div>

              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselExample2" class="carousel slide" data-ride="carousel">

                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="assets/Images/albumss/kegiatan-kelas.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/Images/albumss/kegiatan-kelas2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/Images/albumss/kegiatan-kelas3.jpg" alt="Third slide">
                        </div>

                      </div>
                      <a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExample2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="card h-100 card-content border-secondary rounded-0 ">
                <img class="ard-img rounded-0 img-fluid p-2" src="assets/Images/albumss/kegiatan-discuss2.jpg"
                  alt="sholat duha mim01">
                <div class="card-body pb-2">
                  <h5 class="card-title">Diskusi</h5>
                  <p class="card-text">
                    Potret kegiatan peserta ketika sedang melakukan diskusi bersama
                  </p>
                </div>
                <div class="card-footer">
                  <button class="btn action-button rounded-0 float-right" type="button" id="gallery" data-toggle="modal"
                    data-target="#modal3">
                    <i class="fa fa-search"></i>
                  </button>
                </div>

              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselExample3" class="carousel slide" data-ride="carousel">

                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="assets/Images/albumss/kegiatan-discuss2.jpg"
                            alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/Images/albumss/kegiatan-discuss3.jpg"
                            alt="Second slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExample3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExample3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="card h-100 card-content border-secondary rounded-0 ">
                <img class="card-img rounded-0 img-fluid p-2" src="assets/Images/albumss/kegiatan-praktik.jpg"
                  alt="sholat jama'ah mim01">
                <div class="card-body pb-2">
                  <h5 class="card-title">Praktikum</h5>
                  <p class="card-text">
                    Foto para peserta dan setup dalam materi praktikum di SCJ
                  </p>
                </div>
                <div class="card-footer">
                  <button class="btn action-button rounded-0 float-right" type="button" id="gallery" data-toggle="modal"
                    data-target="#modal4">
                    <i class="fa fa-search"></i>
                  </button>
                </div>

              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselExample4" class="carousel slide" data-ride="carousel">

                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="assets/Images/albumss/kegiatan-praktik.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/Images/albumss/kegiatan-praktik2.jpg"
                            alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/Images/albumss/kegiatan-praktik3.jpg"
                            alt="Third slide">
                        </div>


                      </div>
                      <a class="carousel-control-prev" href="#carouselExample4" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExample4" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="card h-100 card-content border-secondary rounded-0 ">
                <img class="ard-img rounded-0 img-fluid p-2" src="assets/Images/albumss/kegiatan-break.jpg"
                  alt="guru-guru mim01">
                <div class="card-body pb-2">
                  <h5 class="card-title">Break Time</h5>
                  <p class="card-text">
                    Foto para peserta SCJ sedang melakukan break setelah menyelesaikan kelas
                  </p>
                </div>
                <div class="card-footer">
                  <button class="btn action-button rounded-0 float-right" type="button" id="gallery" data-toggle="modal"
                    data-target="#modal5">
                    <i class="fa fa-search"></i>
                  </button>
                </div>

              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselExample5" class="carousel slide" data-ride="carousel">

                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="assets/Images/albumss/kegiatan-break.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/Images/albumss/kegiatan-break2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="assets/Images/albumss/kegiatan-break3.jpg" alt="Third slide">
                        </div>

                      </div>
                      <a class="carousel-control-prev" href="#carouselExample5" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExample5" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-4 mb-3">
              <div class="card h-100 card-content border-secondary rounded-0 ">
                <img class="ard-img rounded-0 img-fluid p-2" src="assets/Images/albumss/kegiatan-perpus.jpg" alt="Perpustakaan">
                <div class="card-body pb-2">
                  <h5 class="card-title">Perpustakaan</h5>
                  <p class="card-text">
                    Suasana Perpustakaan di SCJ
                  </p>
                </div>
                <div class="card-footer">
                  <button class="btn action-button rounded-0 float-right" type="button" id="gallery" data-toggle="modal"
                    data-target="#modal7">
                    <i class="fa fa-search"></i>
                  </button>
                </div>

              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div id="carouselExample7" class="carousel slide" data-ride="carousel">

                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="assets/Images/albums/assets/Images/albumss/kegiatan-perpus.jpg" alt="First slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExample7" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExample7" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

          </div>

  </section>
  <!-- END SECTION -->


  <!-- BACK BUTTON -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <!-- Footer -->
  <footer id="contact">
    
    <!-- COPYRIGHT -->
    <div class="container-fluid secondary-footer">
      <div class="container copyright">
        <div class="row">
          <div class="col-md-6 col-xs-12 text-md-left text-center"> Copyright © 2021
            <a href="#">Sekolah Coding Jakarta</a> All rights reserved
          </div>
          <div class="col-md-6 col-xs-12 text-md-right text-center">
            Built with
            <a href="https://andhip.github.io/links/"> <i class="fa fa-heart love" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script defer src="assets/JS/script.js"></script>
  <script defer src="assets/JS/popper.min.js"></script>
  <script defer src="assets/JS/jquery.easing.1.3.js"></script>
  <script defer src="assets/Vendor/wow/wow.min.js"></script>
  <script defer src="assets/Vendor/morphext/morphext.min.js"></script>
  <script defer src="assets/Vendor/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
</body>

</html>