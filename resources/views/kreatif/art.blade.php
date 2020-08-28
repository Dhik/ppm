@extends('welcome')
@section('title','Art')
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
          <li class="active">
            <a style="padding-right:10px;" href="{{ url('/team') }}"> Team </a>
          </li>
          
          <li><a href="{{ url('/about') }}" style="padding-right:10px;"> About Us </a></li>
          
          <li><a href="{{ url('/facility') }}" style="padding-right:10px;"> Facility </a></li>
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
<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(main/images/art_back1.jpg); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div data-aos="fade-up">
            <h1 class="text-white font-weight-light">Tim Kreatif Art</h1>
          </div>
        </div>
      </div>
    </div>  
<div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Tim Kreatif Art</h2>
            <p class="color-black-opacity-5">Tim yang menangani bagian Desain dan Dekorasi</p>
          </div>
        </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 text-center mb-5" data-aos="fade-up">
            <img src="main/images/1-1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">Innovation</h2>
            <p class="mb-4">Seni selalu muncul dengan hal – hal baru melalui kaya yang dihadirkan</p>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5" data-aos="fade-up">
            <img src="main/images/2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">Satisfaction</h2>
            <p class="mb-4">Seni merupakan kepuasan bagi pembuatnya karena seni adalah sesuatu yang dinikmati</p>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5" data-aos="fade-up">
            <img src="main/images/3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">Discover</h2>
            <p class="mb-4">Tak perlu takut untuk berkarya, semua barang bisa diolah dan memiliki nilai seni</p>
          </div>
        </div>
      </div>
    </div>
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Program Kerja</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a class="unit-1 text-center">
              <img src="main/images/dekor2.png" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Dekorasi</h3>
              </div>
            </a>
            <p>The Artist hadir untuk kamu kamu yang butuh nuansa baru  Dekorasi stand bazar, ruangan, dekorasi hati juga bisa *eh</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a class="unit-1 text-center">
              <img src="main/images/gte.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Goes to Exhibition</h3>
              </div>
            </a>
            <p>Weekend / liburan ga ada kegiatan?
Kuy jalan jalan sambil main ke pameran seni bareng bareng!! :D</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a class="unit-1 text-center">
              <img src="main/images/mading.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Majalah Dinding</h3>
              </div>
            </a>
            <p>Info – info unik dan up to date bisa dibaca di Majalah Dinding PPM NH. Teman – teman yang mau share info boleh banget di share disini ^^</p>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a class="unit-1 text-center">
              <img src="main/images/award.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">PPM Awards</h3>
              </div>
            </a>
            <p>Ajang bergengsi untuk anak – anak PPM nih! Kira kira dapat nominasi apa yaa??</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a class="unit-1 text-center">
              <img src="main/images/diy.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Do It Yourself</h3>
              </div>
            </a>
            <p>Ngapain beli kalau kita bisa bikin sendiri? Mari kita berkarya!! :D</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a class="unit-1 text-center">
              <img src="main/images/artclass1.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Tutor, Art Class</h3>
              </div>
            </a>
            <p>Banyak hal hal yang bisa kita pelajari.
Crafting, Calligraphy, Digital Art, dll . Pokoknya belajar bareng, improves bareng! ^^</p>
          </div>
        </div>
      </div>
    </div>

@endsection