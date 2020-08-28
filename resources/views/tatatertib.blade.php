@extends('welcome')
@section('title','Tata Tertib')
<header class="site-navbar py-1" role="banner">

<div class="container">
  <div class="row align-items-center">
    
  <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><img src="{{ url('theme-sbadmin/img/download.png') }}" alt="logo"><a href="{{ url('/') }}" class="text-black h2 mb-0" style="font-size:20px; padding-left:5px;"> PPM NH</a></h1>
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
          <li class="active">
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
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h1 class="font-weight-light text-black">Tata Tertib PPM Nurul Hakim</h1>
          </div>
        </div>
        <ol style="font-size:25px;">
          <li>Seluruh penghuni PPM NH wajib menaati segala tata tertib PPM NH baik yang tertulis maupun tidak tertulis</li>

          <li>Seluruh penghuni PPM NH diharuskan mengikuti seluruh kegiatan amrin jami’ PPM sesuai dengan waktu yang telah dijadwalkan</li>

          <li>Seluruh penghuni PPM NH harus menjaga fatonah, bitonah dan 6 thabiat luhur baik kepada sesama penghuni PPM maupun masyarakat sekitar</li>
          
          <li>Seluruh penghuni PPM NH dilarang menonton televisi mulai waktu adzan hingga selesai sholat dan pada waktu pengajian berlangsung</li>

          <li>Seluruh penghuni PPM NH dilarang melihat, menyimpan dan menyebarkan hal-hal yang berbau porno, menonton film, membaca komik dan bermain game</li>

          <li>Seluruh penghuni PPM NH dilarang menyalakan tape, radio, serta komputer dengan suara keras</li>

          <li>Seluruh penghuni PPM NH Putra dilarang berambut gondrong dan dilarang mengecat rambut dengan warna apapun serta dilarang mencukur rambut dengan gaya urakan (tidak sopan)</li>

          <li>Seluruh penghuni PPM NH dilarang menggunakan barang milik orang lain tanpa seijin pemiliknya</li>

          <li>Seluruh penghuni PPM NH dilarang menyimpan atau mengkonsumsi rokok, narkoba dan makanan/ minuman yang memabukkan</li>

          <li>Seluruh penghuni PPM NH supaya berpakaian yang rapih dan sopan serta pada waktu sholat dilarang memakai pakaian yang ada gambar atau tulisan di belakangnya</li>

          <li>Seluruh penghuni PPM NH Putri (Akhwat) dilarang memasuki kawasan Putra (Ikhwan), begitu pula sebaliknya tanpa seijin pengurus</li>

          <li>Seluruh penghuni PPM NH dilarang berkhalwat (nyepi) baik sesama penghuni maupun luar penghuni</li>

          <li>Seluruh penghuni PPM NH dilarang ngobrol dengan lawan jenis di atas jam 22.00 WIB</li>

          <li>Bagi penghuni PPM yang membawa sepeda motor atau mobil supaya menempatkan kendaraannya dengan tertib, rapi dan terkunci ganda di parkir khusus penghuni (parkir bawah)</li>
          <li>Bagi santri PPM NH yang membawa kendaraan, baik motor ataupun mobil dilarang menggunakan/memasang knalpot racing (knalpot yang suaranya keras, tidak standar dan mengganggu)</li>
          <li>Bagi penghuni PPM yang membawa atau akan menerima tamu, supaya melapor kepada pengurus</li>
          <li>Seluruh penghuni PPM NH dilarang memiliki atau menyimpan senjata tajam</li>
          <li>Seluruh penghuni PPM NH dilarang menyimpan Al-Quran, Al-Hadits atau buku-buku lainnya di dalam Masjid</li>
          <li>Gerbang PPM dikunci paling lambat pukul 22.00 WIB</li>
          <li>Seluruh penghuni PPM NH putri diwajibkan berpakaian sesuai standar peraturan Allah, Rosul dan Imam. Yaitu pakaian atas longgar lengannya sampai menutup pergelangan tangan dan menutup sampai ½ paha, pakaian bawah longgar sampai menutup mata kaki, kerudung sampai menutup dada, dilarang memakai pakaian ketat dan/atau transparan. Dan khusus penghuni putra pakaian bawah di atas mata kaki</li>
        </ol>
      </div>
    </div>
    

@endsection