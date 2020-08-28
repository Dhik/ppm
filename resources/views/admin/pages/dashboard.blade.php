@extends('admin.main')
@section('title','Dashboard')
@section('content')

@if(session('result') == 'success')
<div class="alert alert-success alert-dismissible fade show">
    <strong>Saved !</strong>Berhasil disimpan.
    <h1>Anda telah mengisi data diri. Disyukuri Alhamdulillah jazakillahu/jazakallahu khoiro :)
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
</div>
@endif
<h1></h1>
</br>
<div class="card text-white bg-primary mb-3 rounded" style="max-width: 100rem;">
  <div class="card-body">
    <h2 class="card-title" style="padding-top:30px; padding-left:40px;">Selamat Datang di Halaman Dashboard</h2>
    <ul>
      <li>Nama : {{ Auth::user()->name }}</li>
      <li>Kode : {{ Auth::user()->kode_mhs }}</li>
      @if(Auth::user()->akses == 'admin')
        <li>Status: Penerobos</li>
      @elseif(Auth::user()->akses == 'sp_admin')
        <li>Status: Super Admin</li>
      @elseif(Auth::user()->akses == 'operator')
        <li>Status: Santri</li>
    @endif
    </ul>
  </div>
</div>
<hr>
@if(Auth::user()->angkatan == 2020)
<h2>Sambutan Ketua PPM NH</h2></br>
        <div class="container-fluid">
          <div class="card income text-center">
            <div class="col-md-12">
               <img style="height:150px; display: block;
    margin-left: auto;
    margin-right: auto;" class="img-fluid rounded-circle" src="{{ url('/foto/paksamsul.jpg') }}"/>
                </div>
                <div class="card-body" style="text-align:center;">
                  <h5 class="card-category">Samsul Bahri</h5>
                  <p>Assalamualaikum, wr.wb.</p>
<p>Bismillahirahmanirrahim</p>
<p>Untuk semua teman-teman yang baru, selamat datang semuanya, selamat menjadi keluarga besar PPM NH ini, kami gembira bahwa kita semua disini adalah saudara lahir batin, tidak hanya di dunia saja, tapi kita akan terus menjadi saudara di surga. Untuk itu marilah kita jalin kerukunan dan kekompakan diantara kita. Tidak ada suudzon, dendam apalagi permusuhan. Kita punya tujuan yang sama yaitu ingin sukses dunia dan akhirat-Nya. Disinilah tempatnya, di PPM yang megah inilah insyaAllah awal dari kesuksesan kita semua. Kita bisa belajar banyak hal disini. Mulai dari kemandirian, ketertiban dan kedisiplinan. Mudah-mudahan semuanya berhasil menjadi orang yang sukses dunia akhirat.</p>
<p>Selamat dating, selamat bergabung, selamat menjadi pejuang. Semoga Allah paring pertolongan yang barokah, Amiin. Alhamdulillah Jaza Kumullahu Khoiro.
</p>
<p>Wassalamualalkum, wr.wb</p>
                  <p class="card-description">
                  </p>
            </div>
          </div>
        </div>
        @endif
<p style="text-align:center;">Anda adalah warga PPM Nurul Hakim</p>


@endsection
