@extends('welcome')
@section('title','Facility')
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
          
          <li><a href="{{ url('/about') }}" style="padding-right:10px;"> About Us </a></li>
          
          <li class="active"><a href="{{ url('/facility') }}" style="padding-right:10px;"> Facility </a></li>
          <!-- <li><a href="booking.html">Book Online</a></li> -->
          @if (Route::has('login'))                
          @auth
          <li>
            <a href="{{ route('admin.user.biodata') }}" style="padding-right:10px;"> Registrasi </a>
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
<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(main/images/facility.png); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div data-aos="fade-up">
            <h1 class="text-white font-weight-light">Facility</h1>
          </div>
        </div>
      </div>
    </div>  
<div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Our Facility</h2>
            <p class="color-black-opacity-5">Fasilitas di Pondok Pesantren Mahasiswa Nurul Hakim</p>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="main/images/kamarmandi.png" alt="Image" class="img-fluid">
              <h2 class="font-size-regular">Kamar Mandi</h2>
            </div> 
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="main/images/jemuran.png" alt="Image" class="img-fluid">
              <h2 class="font-size-regular">Jemuran</h2>
            </div>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="main/images/dapur.png" alt="Image" class="img-fluid">
              <h2 class="font-size-regular">Dapur</h2>
            </div> 
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="main/images/ukp.png" alt="Image" class="img-fluid">
              <h2 class="font-size-regular">UKP (Unit Kesehatan Pondok)</h2>
            </div>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="main/images/mesjid2.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular">Mesjid yang megah</h2>
            </div> 
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="main/images/kamar.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular">Kamar Tidur</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection