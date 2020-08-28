
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Montserrat&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') PPM Nurul Hakim</title>
    <link rel="icon" type="image/png" href="{{ url('download.png') }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ url('theme-sbadmin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href=" {{ url('theme-sbadmin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ url('theme-sbadmin/css/fontastic.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ url('theme-sbadmin/css/style.sea.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ url('theme-sbadmin/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ url('theme-sbadmin/img/download.png') }}">
    <!-- Page level plugin CSS-->
    @stack('css')
  </head>
  <body>

  @include('admin.sidebar')
    <div class="page">
      <!-- navbar-->
      @include('admin.navbar')
      <!-- Content Section -->
      <section class="mt-30px mb-30px">
        <div class="container-fluid">
            @yield('content')
        </div>
      </section>
      @include('admin.footer')
    </div>
    @stack('modal')
    <!-- JavaScript files-->
    <script src="{{ url('theme-sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('theme-sbadmin/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ url('theme-sbadmin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('theme-sbadmin/js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script src="{{ url('theme-sbadmin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ url('theme-sbadmin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('theme-sbadmin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ url('theme-sbadmin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('theme-sbadmin/js/charts-home.js') }}"></script>
    <!-- Main File-->
    <script src="{{ url('theme-sbadmin/js/front.js') }}"></script>
    <script type="text/javascript" src="{{ url('theme-sbadmin/js/navbar-nav.js') }}"></script>
    @stack('js')
  </body>
</html>