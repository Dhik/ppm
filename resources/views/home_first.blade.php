@extends('welcome')
@section('title','Home')
<link rel="icon" type="image/png" href="{{ url('main/images/download.png') }}">
<header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><img src="{{ url('main/images/download.png') }}" alt="logo"><a href="{{ url('/') }}" class="text-black h2 mb-0" style="font-size:20px; padding-left:5px;"> PPM NH</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
              <li class="active">
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
                
                <li><a href="{{ url('/facility') }}" style="padding-right:10px;"> Facility </a></li>
                @if (Route::has('login'))                
                @auth
                <li>
                  <a href="{{ route('admin.home') }}" style="padding-right:10px;">Logout</a>
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
<div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: {{ url('../images/bg_top_home.png') }};" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">PPM Nurul Hakim</h1>
              <p class="mb-5">Pondok Pesantren Mahasiswa Nurul Hakim</p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(main/images/bg_top_home.png);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white font-weight-light">PPM Nurul Hakim</h1>
              <p class="mb-5">Pondok Pesantren Mahasiswa Nurul Hakim</p>
            </div>
          </div>
        </div>
      </div>  

    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">PPM Nurul Hakim</h2>
            <p class="color-black-opacity-5">Pondok Pesantren Mahasiswa Nurul Hakim</p>
          </div>
        </div>
      </div>
    </div>
    <section class="blog-area blog-page section-padding-100">
        <div class="container-fluid">
              <div class="row">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="main/images/quran-36704.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>PPM's Event</h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Activity</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">PPM Nurul Hakim</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="main/images/vegetables-stall-868110.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>PPM's Market</h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Dana Usaha</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">PPM Nurul Hakim</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </section>
<div class="site-section block-13 bg-light">
  <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7">
          <h2 class="font-weight-light text-black text-center">Hikmah Hadist</h2>
        </div>
      </div>

      <div class="nonloop-block-13 owl-carousel">

        <div class="item">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-5">
                <img src="main/images/poeme_11.jpg" alt="Image" class="img-md-fluid">
              </div>
              <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                <p class="text-black lead">Kemarin di dunia yang berbeda banyak insan saling jumpa belum nampak senyum, apalagi tawa. Kutanya diri &ldquo;Siapa mereka ?&rdquo;</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-5">
                <img src="main/images/poeme_2.JPG" alt="Image" class="img-md-fluid">
              </div>
              <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                <p class="text-black lead">Yang satu terlihat sangat muda lainnya, sedikit lebih tua ada si nona bergaun merah merona ada juga si penjual canda.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-5">
                <img src="main/images/poeme_4.JPG" alt="Image" class="img-md-fluid">
              </div>
              <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                <p class="text-black lead">Pada saatnya, ku mengenal mereka semua selalu menyapa saat berjumpa. Terjawab sudah yang sebelumnya ku tanya, mereka adalah .... saudara saling mendukung, saling menjaga, saling mengingatkan ketika lupa.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-5">
                <img src="main/images/poeme_3.JPG" alt="Image" class="img-md-fluid">
              </div>
              <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                <p class="text-black lead">Subhanallah, sejuk nan senang di jiwa memang ini adalah pemberiannya-Nya, kasih sayang terhadap sesama selamanya, saling mencinta.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


    <div class="site-section">
      
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Our Photos</h2>
            <p class="color-black-opacity-5">Our Activity Always be Barokah</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="main/images/_DSC4162.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="main/images/EXHIBITION_180225_0015.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="main/images/IMG_7980.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="main/images/IMG_2053.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="{{ url('/main/images/IMG_2685.jpg') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="{{ url('/main/images/11502604604813.jpg') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
              </div>
            </a>
          </div>
        </div>
      </div>
    
    </div>

    <!-- <div class="site-section bg-light">
      
    </div> -->
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Nearest Campus</h2>
            <p class="color-black-opacity-5">Kampus Terdekat</p>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="main/images/itb.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular">Institut Teknologi Bandung</h2>
            </div> 
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="main/images/unpad_2.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular">Universitas Padjadjaran</h2>
            </div>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="main/images/uin_3.jpeg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular">Universitas Islam Negeri Sunan Gunung Djati</h2>
            </div> 
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="main/images/ikopin.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular">Ikopin</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(main/images/bg_bwh_home.png); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div data-aos="fade-up">
            <a href="https://www.google.com/maps/place/PPM+Nurul+Hakim/@-6.9352734,107.7684478,17z/data=!4m7!3m6!1s0x2e68c4a5b891a01f:0xfe2dbcd57cc81a56!8m2!3d-6.9352734!4d107.7706365!9m1!1b1"><img src="main/images/blue26.png"></a>
            <h2 class="text-white font-weight-light mb-5 h1">Find Us</h2>
            
          </div>
        </div>
      </div>
    </div>  
    @endsection