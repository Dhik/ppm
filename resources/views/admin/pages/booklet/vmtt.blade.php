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
<body class="vmtt-edition">
  <div class="wrapper ">
  @include('admin.pages.booklet.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      @include('admin.pages.booklet.navbar')
      <!-- End Navbar -->
  <div class="content">
    <div class="container-fluid">
      <div class="card-deck">
        <div class="card text-white bg-card-vmtt mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <h2 class="text-center title-berkshire tabus-title-color">Visi</h2>
          </div>
          <div class="card-body">
            <h5 class="card-title montserrat">Pondok Pesantren Mahasiswa Nurul Hakim sebagai wahana pembinaan yang berorientasi pada intelektualitas dan kepahaman agama.</h5>
          </div>
        </div>
        <div class="card text-white bg-card-vmtt mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <h2 class="text-center title-berkshire tabus-title-color">Misi</h2>
          </div>
          <div class="card-body">
            <h5 class="card-title">Pondok Pesantren Mahasiswa Nurul Hakim melestarikan Qur’an Hadits dan menjalin hubungan baik dengan masyarakat serta menghasilkan mahasiswa yang paham agama, cerdas, mandiri dan berakhlakul karimah.</h5>
          </div>
        </div>
      <!-- </div>
      <div class="card-deck"> -->
        <div class="card text-white bg-card-vmtt mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <h2 class="text-center title-berkshire tabus-title-color">Tujuan</h2>
          </div>
          <div class="card-body">
          <h4 class="card-title text-center">
                  <li>Menghasilkan mahasiswa sebagai generus penerus yang mampu menyampaikan dan mengembangkan Ilmu Qur’an Hadits melalui amar ma’ruf nahi munkar.</li>
                  <li>Membentuk mahasiswa teladan dan berprestasi serta mampu menerapkan disiplin ilmunya dalam kehidupan bermasyarakat secara aktif, kreatif dan inovatif.</li>
                  <li>Membentuk mahasiswa yang tertib dalam beribadah serta mampu bertabiat luhur dalam bermasyarakat.</li>
                  <li>Menjadikan Pondok Pesantren Mahasiswa Nurul Hakim sebagai tempat yang kondusif</li>
                  </h4>
          </div>
        </div>
        <div class="card text-white bg-card-vmtt mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <h2 class="text-center title-berkshire tabus-title-color">Trisatya</h2>
          </div>
          <div class="card-body">
            <h4 class="card-title text-center">
                <li>Kami berjanji InsyaAllah selalu menjaga nama baik PPM kapanpun, dimanapun dan dalam keadaan apapun.</li>
                <li>Kami berjanji insyaAllah selalu memberikan yang terbaik bagi PPM.</li>
                <li>Kami berjanji insyaAllah selalu menaati semua peraturan yang berlaku di PPM dengan sa’pol kemampuan dan diniati karena Allah.</li>
                </h4>
          </div>
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



