<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Website Ikan Cupang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="front/assets/img/favicon.png" rel="icon">
  <link href="front/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="front/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="front/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="front/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="front/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="front/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v4.3.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Ikan Cupang</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>

          @if(Auth::check())
          Hi, {{auth()->user()->name}}
          @else
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="getstarted scrollto" href="/login">Login</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" >
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center" style="margin-bottom: 120px;margin-top: 20px;">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Website Ikan Cupang Bapak Indra</h1>
          
        </div>
      </div>
      <div class="text-center">
        @if(Auth::check())
        <a href="/ikan" class="btn-get-started scrollto">Manage Data Ikan</a>
        @else
        <a href="#ikan" class="btn-get-started scrollto">Lihat Ikan Cupang</a>
        @endif
      </div>
      <br>
      <br>
      <div class="row icon-boxes" id="ikan">
        @foreach($ikan as $ikan)
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><img title=" " alt=" " src="{{$ikan->image}}" style="width: 190px; height: 190px;display: block;margin-left: 8px;margin-right: auto; margin-bottom: 20px;" class="rounded-circle profile-widget-picture"/> </div>
            <h4 class="title"><a href="/ikan/{{$ikan->id}}/detail">{{$ikan->nama}}</a></h4>
            <div class="row">
                <div class="col-md-6">
            <p class="description">Harga :</p>
            </div>
            <div class="col-md-6">
            <p class="description">Rp. {{number_format($ikan->harga,0) }}</p>
            </div>
           </div>
           <div class="row">
                <div class="col-md-6">
                    <p class="description">Penjual :</p>
                </div>
                <div class="col-md-6">
                    <p class="description">{{$ikan->penjual}}</p>
                </div>
          </div>
          <div class="row">
                <div class="col-md-6">
                    <p class="description">Tanggal Beli</p>
                </div>
                <div class="col-md-6">
                    <p class="description">{{ date('d F Y',strtotime($ikan->tanggal)) }}</p>
                </div>
          </div>
        </div>
        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    
    
  </main><!-- End #main -->

 

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="front/assets/vendor/aos/aos.js"></script>
  <script src="front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="front/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="front/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="front/assets/vendor/php-email-form/validate.js"></script>
  <script src="front/assets/vendor/purecounter/purecounter.js"></script>
  <script src="front/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="front/assets/js/main.js"></script>

</body>

</html>