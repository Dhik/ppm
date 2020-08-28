<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title') PPM &mdash; Nurul Hakim</title>
    <link rel="icon" type="image/png" href="{{ url('main/images/download.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="{{ url('main/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ url('main/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('main/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('main/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ url('main/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('main/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ url('main/css/bootstrap-datepicker.css') }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="{{ url('main/css/aos.css') }}">
    <link rel="shortcut icon" href="{{ url('main/images/download.png') }}">

    <link rel="stylesheet" href="{{ url('main/css/sty.css') }}">
    <link rel="stylesheet" href="{{ url('main/css/styless.css') }}">
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

      @yield('content')
    
    @include('footer_home')
  </div>

  <script src="{{ url('main/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ url('main/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ url('main/js/jqueryx`-ui.js') }}"></script>
  <script src="{{ url('main/js/popper.min.js') }}"></script>
  <script src="{{ url('main/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('main/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('main/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ url('main/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ url('main/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('main/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ url('main/js/aos.js') }}"></script>

  <script src="{{ url('main/js/main.js') }}"></script>
    
  </body>
</html>