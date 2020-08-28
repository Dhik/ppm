@extends('admin.pages.booklet.temp')
@section('title','Booklet')
@section('content')
<!-- <style>  
    img {  
        height:160px;
        padding-left:20px; 
    } 
</style> -->
<style>
  .tombol{
    height:200px;
    width:250px;
  }
</style>
<body class="jadwal-edition">
  <div class="wrapper ">
  @include('admin.pages.booklet.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      @include('admin.pages.booklet.navbar')
      <!-- End Navbar -->
      
      <div class="content">
        <div class="container-fluid">
        <h1 class="text-center title-berkshire" style="font-size:70px; color:white;">Reciting Schedule</h1>
        <div class="card-deck">
          <div class="card text-white bg-fact mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Bangunan PPM NH mulanya bernama Griya Mahasiswa yang bertempat di Jl.Cibeusi No. 18A</h5>
            </div>
          </div>
          <div class="card text-white bg-fact mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Karena satu dan lain hal nama Griya Mahasiswa diganti menjadi PPM Nurul Hakim</h5>
            </div>
          </div>
          <div class="card text-white bg-fact mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Pada Tanggal 20 Oktober 2001, PPM NH diresmikan oleh Bapak H. Toyyibun (ke luar).</h5>
            </div>
          </div>
        </div>
        <div class="card-deck">
          <div class="card text-white bg-fact mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Pada tanggal 13 Juni 2002, PPM NH diresmikan oleh Bapak Abdul Dhohir (ke dalam).</h5>
            </div>
          </div>
          <div class="card text-white bg-fact mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Untuk Gedung baru PPM NH yang bertempat di Jl, Raya Jatinangor No. 138 diresmikan pada tanggal 9 Januari 2015</h5>
            </div>
          </div>
          <div class="card text-white bg-fact mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">PPM NH termasuk kelompok jatinangor, Desa Cinunuk Timur, dan Daerah Bandung Timur.</h5>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right" id="date">
            , made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  @include('admin.pages.booklet.popup')
</body>
@endsection

