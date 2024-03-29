@extends('welcome')
@section('title','About')
<link rel="icon" type="image/png" href="{{ url('main/images/download.png') }}">
<header class="site-navbar py-1" role="banner">

<div class="container">
  <div class="row align-items-center">
    
  <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><img src="main/images/download.png" alt="logo"><a href="{{ url('/') }}" class="text-black h2 mb-0" style="font-size:20px; padding-left:5px;"> PPM NH</a></h1>
          </div>
    <div class="col-10 col-md-8 d-none d-xl-block">
      <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
        <li>
            <a href="{{ url('/') }}" style="padding-right:10px;">Home </a>
          </li>
          @if (Route::has('login'))                
          @auth
          <li>
            <a href="{{ route('admin.home') }}" style="padding-right:10px;"> Dashboard </a>
          </li>
          <li>
            <a href="{{ route('admin.tatatertib') }}" style="padding-right:10px;"> Tata Tertib </a>
          </li>
          @else
          <li><a href="{{ route('login') }}" style="padding-right:10px;"> Login </a></li>
          @endauth
          @endif
          <li>
            <a style="padding-right:10px;" href="{{ url('/team') }}"> Team </a>
          </li>
          
          <li class="active"><a href="{{ url('/about') }}" style="padding-right:10px;"> About Us </a></li>
          
          <li><a href="{{ url('/facility') }}" style="padding-right:10px;"> Facility </a></li>
          <!-- <li><a href="booking.html">Book Online</a></li> -->
          @if (Route::has('login'))                
                @auth
                <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('admin.user.setting') }}">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                            </form>
                        </div>
                    </li>
                @endauth
                @endif
        </ul>
      </nav>
    </div>

    <div class="col-6 col-xl-2 text-right">
      <div class="d-none d-xl-inline-block">
        <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
          <li>
            <a href="#" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
          </li>
          <li>
            <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
          </li>
          
        </ul>
      </div>

      <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

    </div>

  </div>
</div>

</header>
@section('content')
<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(main/images/ppm.jpg); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div data-aos="fade-up">
            <h1 class="text-white font-weight-light">About Us</h1>
          </div>
        </div>
      </div>
    </div>  
<div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">About Us</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 col-lg-4 text-center mb-5" data-aos="fade-up">
            <img src="main/images/visi.png" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">Visi</h2>
            <p class="color-black-opacity-5">Pondok Pesantren Mahasiswa Nurul Hakim sebagai wahana pembinaan yang berorientasi pada intelektualitas dan kepahaman agama</p>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5" data-aos="fade-up">
            <img src="main/images/misi.png" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">Misi</h2>
            <p class="color-black-opacity-5">Pondok Pesantren Mahasiswa Nurul Hakim melestarikan Al-Qur'an dan Al-Hadist dan menjalin hubungan baik dengan masyarakat serta menghasilkan mahasiswa yang paham agama, cerdas, mandiri dan berakhlakul karimah</p>
          </div>
        </div>
      </div>
    </div>
@endsection