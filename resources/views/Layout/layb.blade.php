<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     @yield('meta')
    
    <title>@yield('title')</title>
    <meta content="SMK Budi Mulia Pakisaji" name="description">
    <meta content="SMK Budi Mulia Pakisaji" name="keywords">
    <meta content=" #005555" name="theme-color" />

  
    <!-- Favicons -->
    <link href="{{('/public/assets/aset/005441cb-ab2b-4c72-bfe9-6b8aa15f0ee5.png')}}" rel="icon">
    <link href="{{('/public/assets/aset/005441cb-ab2b-4c72-bfe9-6b8aa15f0ee5.png')}}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- owl -->
    <link rel="stylesheet" href="{{('/carosel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{('/carosel/owl.theme.default.min.css')}}">
    
    <!-- Vendor CSS Files -->
    <link href="{{('/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendor/glightbox/css/glightbox.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{('/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{('/assets/css/style.css')}}" rel="stylesheet">
  
  </head>
  <body class="container" style="background-color:  #080C21;">

        <nav id="nav-p" class="navbar navbar-expand-lg navbar-dark fixed-top sticked">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="/assets/aset/logo.png" class="img-fluid" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div style="width: 50%" class="offcanvas offcanvas-end mobil" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header justify-content-end">
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tentang Kami
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark rounded">
                    <li><a class="dropdown-item rounded" href="/blog">Berita Terkini</a></li>
                    <li><a class="dropdown-item rounded" href="/profil">Profil</a></li>
                    <li><a class="dropdown-item rounded" href="/">Sejarah</a></li>
                    <li><a class="dropdown-item rounded" href="/">Visi & Misi</a></li>
                    <li><a class="dropdown-item rounded" href="/">Pengajar</a></li>
                    <li><a class="dropdown-item rounded" href="/">Akreditasi</a></li>
                    <li><a class="dropdown-item rounded" href="/">Hubungan Industri</a></li>
                    <li><a class="dropdown-item rounded" href="/">Prestasi</a></li>
                    <li><a class="dropdown-item rounded" href="/kegiatan">Kegiatan</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Program</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Jurusan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Informasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/ppdb">PPDB</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    <div class"container" style="margin-top: 120px;">
    @yield('content')
    </div>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">

                <img src="{{('/assets/aset/logo.png')}}" alt="">

              <p class="pb-3 text-center"><em>SMK Budi Mulia Pakisaji berdiri sejak tahun 2003 dan salah satu lembaga dibawah naungan Yayasan Pendidikan Islam dan Kesejahteraan Ummat (YPTIKU) "BUDI MULIA"</em></p>
              <p><a href="https://www.google.com/maps/place/Smk+Budi+Mulia+Pakisaji,+Jl.+Anjasmoro+No.108,+Bendo,+Karangpandan,+Kec.+Pakisaji,+Kabupaten+Malang,+Jawa+Timur+65162/@-8.0721185,112.5892621,17z/data=!3m1!4b1!4m9!1m2!2m1!1ssmk+budi+mulia+pakisaji!3m5!1s0x2e789dc24973f83d:0xc3f6f84a45b5de37!8m2!3d-8.0721238!4d112.5934893!15sChdzbWsgYnVkaSBtdWxpYSBwYWtpc2FqaZIBEWNvbXBvdW5kX2J1aWxkaW5n4AEA">
                <i class="bi bi-geo-alt-fill me-2"></i>
                Jl. Anjasmoro No.108 Bendo, Karangpandan Kec. Pakisaji, Kabupaten Malang, Jawa Timur 65162, Indonesia<br></a>
                <a href="#"><strong><i class="bi bi-telephone-fill me-2"></i></strong>(0341) 837317<br></a>
                <a href="Official@smkbudimuliapakisaji.sch.id"><strong><i class="bi bi-envelope-fill me-2"></i></strong>Official@smkbudimuliapakisaji.sch.id<br></a>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4 class="text-light">Produk Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">E-Learning BM</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">BM-NET</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">BM-MART</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">BM-PRODUCTION</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">BM-VICTORY</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4 class="text-light">Layanan Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          

        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="copyright">
        &copy; Copyright <strong><span>SMKBM2022</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/multi-responsive-bootstrap-template/ -->
        Designed by <a href="#">Team Creative SMKBM</a>
      </div>
    </div>
  </footer><!-- End Footer -->
    <!--<div id="preloader"></div>-->
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <script src="{{('/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{('/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{('/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{('/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{('/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{('/assets/vendor/php-email-form/validate.js')}}"></script>
    @yield('scripts')

      <script src="{{('/assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>