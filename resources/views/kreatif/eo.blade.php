@extends('welcome')
@section('title','EO')
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
<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(main/images/eo.png); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div data-aos="fade-up">
            <h1 class="text-white font-weight-light">Tim Kreatif Event Organizer (EO)</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Apa itu EO ?</h2>
            <p class="color-black-opacity-5">Tim yang menjadi Penyelenggara Acara</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="row mb-5">
      <div class="col-md-7 text-center">
        <h2 class="font-weight-light text-black">Tugas Tim EO PPM NH : </h2>
      </div>
    </div>
    <ul style="font-size:20px;">
      <li>Menentukan tema dan konsep acara</li>
      <li>Membuat rundown dan konten acara</li>
      <li>Menentukan PIC (Person In Charge) untuk setiap kegiatan</li>
      <li>Mengontrol jalannya acara pada hari-h</li>
    </ul>
  </div>
      <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Program Kerja</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a class="unit-1 text-center">
              <img src="main/images/ppm.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Foto PPM NH</h3>
              </div>
            </a>  
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a class="unit-1 text-center">
              <img src="main/images/wisuda.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Wisuda PPM</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a class="unit-1 text-center">
              <img src="main/images/public1.JPG" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Public Speaking</h3>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a class="unit-1 text-center">
              <img src="main/images/touring.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Touring</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a class="unit-1 text-center">
              <img src="main/images/syukuran.png" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Syukuran Alumni</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a class="unit-1 text-center">
              <img src="main/images/toy.JPG" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Toy Story (Try Out Sambil Talk Show Biar Happy)</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
      </div>

    <div class="site-section">
    <div class="container">
    <div class="row mb-5">
      <div class="col-md-7 text-center">
        <h2 class="font-weight-light text-black">The Reason Why You Should Come and Join Us!</h2>
      </div>
    </div>
    <ul style="font-size:20px;">
      <li>Membangun koneksi tidak hanya di lingkungan PPM</li>
      <li>Bisa belajar caranya membuat dan menjalankan sebuah acara</li>
      <li>Bisa pegang HT</li>
      <li>Nyantai Abis</li>
    </ul>
  </div>
  </div>
    

@endsection