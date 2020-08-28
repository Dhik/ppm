@extends('admin.pages.booklet.temp')
@section('title','Kenalan')
@section('content')
<style>  
    img {  
        height:160px; 
    } 
</style>
<body class="vmtt-edition">
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
						<div class="card text-white bg-card-vmtt">
							<div class="card-header">
                <h2 class="text-center title-berkshire tabus-title-color">Perkenalan</h2>
                <h5 class="text-center montserrat" style="color:white;">Amal sholeh lengkapi ya</h5>
							</div>
							<div class="card-body">
                  <form method="post" action="{{ route('admin.booklet.edit',['id'=>$rc->id]) }}">
                  {{ csrf_field() }}
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="iName" style="color:white;">Nama Lengkap</label>
                          <input type="text" name="nama" class="form-control" value="{{ old('nama',$rc->nama) }}" id="iName">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="iProdi" style="color:white;">Prodi</label>
                          <input type="text" name="prodi" class="form-control" value="{{ old('prodi',$rc->prodi) }}" id="iProdi">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="iAngkatan" style="color:white;">Angkatan</label>
                          <input type="text" name="angkatan" class="form-control" value="{{ old('angkatan',$rc->angkatan) }}" id="iAngkatan">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="iWa" style="color:white;">No. Tlp/WhatsApp</label>
                          <input type="text" name="wa" class="form-control" value="{{ old('wa',$rc->wa) }}" id="iWa">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="iId" style="color:white;">Id Line</label>
                          <input type="text" name="id_line" class="form-control" value="{{ old('id_line',$rc->id_line) }}" id="iId">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating" for="iPesan" style="color:white;">Pesan</label>
                          <input type="text" name="pesan" class="form-control" value="{{ old('pesan',$rc->pesan) }}" id="iPesan">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating" style="color:white;">Status : {{ $rc->ttd }} kenal </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
						</div>
          </div>
          <div class="col-md-4">
              <div class="card card-profile bg-card-vmtt">
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

