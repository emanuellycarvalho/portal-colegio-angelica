<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('img/public/favicon.png') }}" rel="icon">
  <link href="{{ url('img/public/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/public/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/public/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/public/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/public/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/public/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/public/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/public/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/public/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/public/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.1.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Segunda à Sexta, 7h às 17h
      </div>
      <!-- <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Atendimento em (31) 99999-9999
      </div> -->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ asset('img/public/logo-texto-lateral.jpg') }}" alt="Logo"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/working') }}">Sobre nós</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/working') }}">Comunicados Oficiais</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/#contact') }}">Contato</a></li>
          <li class="dropdown"><a href="{{ url('/working') }}"><span>Ensino</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <!-- <li><a href="{{ url('/ei') }}">Ensino Infantil</a></li>
              <li><a href="{{ url('/ef1') }}">Ensino Fundamental I</a></li>
              <li><a href="{{ url('/ef2') }}">Ensino Fundamental II</a></li>
              <li><a href="{{ url('/em') }}">Ensino Médio</a></li>
              <li><a href="{{ url('/et') }}">Técnico</a></li> -->
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Plataformas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a target="_blank" href="https://www.santillanaconnect.com/Account/Login/?wtrealm=http%3a%2f%2flms30.uno-internacional.com%2flogin%2funoe%2f&wreply=https%3a%2f%2flms30.uno-internacional.com%2flogin%2fsso%2floginconnect">UNOi</a></li>
              <li><a target="_blank" href="http://186.226.229.74:8080/webgiz/">WebGiz</a></li>
              <li><a target="_blank" href="https://www.eduno.com.br/">Eduno</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Mais</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/#gallery') }}">Galeria</a></li>
              <!-- <li><a href="{{ url('/working') }}">Materiais didáticos</a></li>
              <li><a href="{{ url('/working') }}">Parceiros</a></li>
              <li><a href="{{ url('/working') }}">Editais</a></li> -->
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ url('/working') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Projetos e Eventos</a>

    </div>
  </header><!-- End Header -->

    @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Colégio Angélica</h3>
              <p>
                Rua Maria Matos, 128 <br>
                Coronel Fabriciano - MG<br><br>
                <strong>Telefone:</strong><br> (31) 3841-1995<br>
                <strong>Email:</strong><br> colegioangelica@colegioangelicamg.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/colegioangelicamg/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/colegioangelicamg/" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/#contact') }}">Contatos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/working') }}">Sobre nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/#gallery') }}">Galeria</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/working') }}">Parceiros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/working') }}">Editais</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Segmentos</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/working') }}">Educação Infantil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/working') }}">Ensino Fundamental</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/working') }}">Ensino Médio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/working') }}">Técnico</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/working') }}">Graduação</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h2>+70 anos de <br> tradição e <br> inovação!</h2>
            <p>Faça parte da nossa Família!</p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Medicio</span></strong>. Todos os direitos reservados.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Design por <a href="https://bootstrapmade.com/">BootstrapMade</a>. Desenvolvido por <a target="_blank" href="https://www.linkedin.com/in/emanuelly-carvalho/">Emanuelly Carvalho</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/public/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/public/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/public/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/public/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/public/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/public/js/main.js') }}"></script>

</body>

</html>