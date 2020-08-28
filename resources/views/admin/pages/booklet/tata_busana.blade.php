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
<body class="tata-busana">
  <div class="wrapper ">
  @include('admin.pages.booklet.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      @include('admin.pages.booklet.navbar')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        <h1 class="text-center title-berkshire tabus-title-color" style="font-size:70px;">Tata Busana</h1>
          <div class="card-deck">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ url('/assets/img/woman1.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Pakaian perempuan</h5>
                <ul>
                  <li>Sanggul rambut tidak tinggi / seperti punuk unta</li>
                  <li>Kerudung menutupi dada serta belahan ketiak, berbahan tebal tidak tembus pandang</li>
                  <li>Untuk celana kullat, panjang baju 3/4 paha</li>
                  <li>Untuk rok panjang baju 1/2 paha</li>
                  <li>Pakaian bawah, rok/celana kullat sampai menutupi mata kaki</li>
                </ul>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ url('/assets/img/man1.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Pakaian laki - laki</h5>
                <ul>
                  <li>Rambut rapi, tidak gondrong dan tidak qoza</li>
                  <li>Panjang celana diatas mata kaki</li>
                </ul>
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

