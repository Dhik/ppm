@extends('welcome')
@section('title','Registrasi')
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
          <!-- <li><a href="booking.html">Book Online</a></li> -->
          @if (Route::has('login'))                
          @auth
          <li class="active">
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
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h1 class="font-weight-light text-black">Data Diri</h1>
          </div>
        </div>
        <form method="post" action="{{ route('admin.user.add') }}">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="row">
            <div class="col">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" required>
            </div>
            <div class="col">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required>
            </div>
          </div></br>
          <div class="form-group">
            <label for="nama">Jenis Kelamin</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Laki-laki" checked>
              <label class="form-check-label" for="exampleRadios1">
            Laki - laki
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Perempuan">
              <label class="form-check-label" for="exampleRadios2">
            Perempuan
              </label>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationCustom01">Asal Daerah</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Daerah" name="asal_daerah" required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">Asal Desa</label>
              <input type="text" class="form-control" id="validationCustom02" placeholder="Desa" name="asal_desa" required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">Asal Kelompok</label>
              <input type="text" class="form-control" id="validationCustom02" placeholder="Kelompok" name="asal_kelompok" required>
            </div>
          </div>
          <div class="form-group">
            <label for="univ">Universitas / Institut</label>  
            <select class="form-control" id="univ" name="universitas">
              <option value="">Pilih : </option>
              <option value="Universitas Padjadjaran">Universitas Padjadjaran</option>
              <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
              <option value="Institut Koperasi Indonesia">Institut Koperasi Indonesia</option>
              <option value="Universitas Pendidikan Indonesia">Universitas Pendidikan Indonesia</option>
              <option value="Universitas Islam Negeri Sunan Gunung Djati">Universitas Islam Negeri Sunan Gunung Djati</option>
              <option value="Sekolah Tinggi Farmasi Bandung">Sekolah Tinggi Farmasi Bandung</option>
            </select>
          </div>
          <div class="row">
            <div class="col">
              <label for="fakultas">Fakultas</label>
              <input type="text" id="fakultas" class="form-control" name="fakultas">
            </div>
            <div class="col">
              <label for="jurusan">Jurusan</label>
              <input type="text" id="jurusan" class="form-control" name="jurusan">
            </div>
          </div></br>
          <div class="row">
            <div class="col">
              <label for="tahun_masuk">Tahun Masuk Kuliah</label>
              <input type="number" id="tahun_masuk" class="form-control" name="tahun_masuk">
            </div>
            <div class="col">
            </div>
          </div></br> 
          <div class="form-group">
            <label for="nama">Status Mubaligh</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="sudah" checked>
              <label class="form-check-label" for="exampleRadios1">Sudah</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="belum">
              <label class="form-check-label" for="exampleRadios2">Belum</label>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="nama_ayah">Nama Ayah</label>
              <input type="text" id="nama_ayah" class="form-control" name="nama_ayah" required>
            </div>
            <div class="col">
              <label for="nama_ibu">Nama Ibu</label>
              <input type="text" id="nama_ibu" class="form-control" name="nama_ibu" required>
            </div>
          </div></br>
          <div class="row">
            <div class="col">
              <label for="no_telp">Nomor Telepon anda</label>
              <input type="number" id="no_telp" class="form-control" name="no_telp">
            </div>
            <div class="col">
            </div>
          </div></br>
          <div class="row">
            <div class="col">
              <label for="no_telp_ortu">Nomor Telepon Orang Tua</label>
              <input type="number" id="no_telp_ortu" class="form-control" name="no_telp_ortu">
            </div>
            <div class="col">
            </div>
          </div></br>
          <div class="form-group">
            <label for="riwayat_penyakit">Riwayat Penyakit</label>
            <input type="text" class="form-control" id="riwayat_penyakit" name="riwayat_penyakit">
          </div></br>
          <div class="row">
            <div class="col">
            <label for="goldar">Golongan Darah</label>  
            <select class="form-control" id="goldar" name="goldar">
              <option value="">Pilih : </option>
              <option value="A">A</option>
              <option value="AB">AB</option>
              <option value="B">B</option>
              <option value="O">O</option>
            </select>
            </div>
            <div class="col">
            </div>
          </div></br> 
          <div class="form-group">
            <label for="motivasi">Motivasi Masuk PPM</label>
            <p>*amal sholih diisi dengan jujur</p>
            <input type="text" class="form-control" id="motivasi" name="motivasi" required>
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
      </div>
    </div>
    

@endsection