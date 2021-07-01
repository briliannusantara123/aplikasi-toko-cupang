<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detail Ikan Cupang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="front/assets/img/favicon.png" rel="icon">
  <link href="front/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('front/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('front/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet">

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

      <h1 class="logo"><a href="/">Ikan Cupang</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>

          @if(Auth::check())
          Hi, {{auth()->user()->name}}
          @else
        <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="getstarted scrollto" href="/login">Login</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Ikan Cupang</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Detail Ikan Cupang</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{asset('/'.$ikan->image)}}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Tentang Cupang</h3>
              <ul>
                <li><strong>Nama</strong>: {{$ikan->nama}}</li>
                <li><strong>Harga Ikan</strong>: Rp. {{number_format($ikan->harga,0) }} </li>
                <li><strong>Penjual</strong>: {{$ikan->penjual}}</li>
                <li><strong>Tanggal Beli</strong>: {{ date('d F Y',strtotime($ikan->tanggal)) }}</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Ikan Cupang</h2>
              <p>
                Ikan cupang merupakan ikan air tawar yang berasal dari genus Betta. Para penggemar ikan cupang membagi ikan ini ke dalam tiga golongan, yaitu Ikan Cupang hias, Ikan Cupang aduan, dan Ikan Cupang liar. Sementara itu, ikan cupang hias dibagi lagi menjadi beberapa jenis, yaitu Halfmoon, Crowntail, Double Tail, Plakat Halfmoon, dan Giant.

                Sedangkan, untuk jenis ikan Cupang secara variasi genetik, sangat sulit untuk dihitung dengan angka. Pasalnya, perkembangan variasi ikan ini dari segi bentuk dan warna terbilang cukup pesat.
              </p>
              <a href="/" class="btn btn-danger col-12" style="margin-top: 40px;">Kembali</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('front/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('front/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('front/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('front/assets/js/main.js')}}"></script>

</body>

</html>