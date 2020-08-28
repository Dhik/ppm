@extends('admin.pages.booklet.temp')
@section('title','Kenalan')
@section('content')
<style>  
    img {  
        height:160px; 
    } 
</style>
<body class="grey-edition">
  <div class="wrapper ">
  @include('admin.pages.booklet.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      @include('admin.pages.booklet.navbar')
      <!-- End Navbar -->
      @if(session('result') == 'fail')
        <div class="alert alert-danger alert-dismissible fade show">
            <strong>Failed !</strong>Gagal diupdate.
            <button type="button" class="close" data-dismiss="alert">
                &times;
            </button>
        </div>
        @endif
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Kenalan</h4>
                </div>
                <div class="card-body">
                  <form method="post" action="{{ route('admin.booklet.acc',['id'=>$rc->id]) }}">
                  {{ csrf_field() }}
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <h4 class="card-title">Nama Lengkap : {{ ($rc->nama) }}</h4>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <h4 class="card-title">Prodi/Angkatan : {{ ($rc->prodi) }} / {{ ($rc->angkatan) }}</h4>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <h4 class="card-title">No. Tlp/WhatsApp : {{ ($rc->prodi) }}</h4>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <h4 class="card-title">Id Line : {{ ($rc->id_line) }}</h4>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <h4 class="card-title">Pesan : {{ ($rc->pesan) }}</h4>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <input type="radio" value="sudah" id="sudah" name="ttd">
                        <label for="sudah">Accept</label><br>
                        <input type="radio" value="belum" id="belum" name="ttd">
                        <label for="belum">Decline</label><br>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="{{ url('/foto/'.$rc->foto) }}" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category">{{ $rc->angkatan }}</h6>
                  <h4 class="card-title">{{ $rc->nama }}</h4>
                  <p class="card-description">
                  {{ $rc->pesan }}
                  </p>
                </div>
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

