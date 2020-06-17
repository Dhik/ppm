@extends('admin.pages.booklet.temp')
@section('title','Dashboard')
@section('content')
<style>  
    img {  
        height:160px;
        padding-left:20px; 
    } 
</style>
<body class="dark-edition">
  <div class="wrapper ">
  @include('admin.pages.booklet.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
      @include('admin.pages.booklet.navbar')
      <!-- End Navbar -->
      @if(session('result') == 'success')
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Saved !</strong>Berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert">
                &times;
            </button>
        </div>
        @endif

        @if(session('result') == 'update')
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Updated!</strong>Berhasil diupdate.
            <button type="button" class="close" data-dismiss="alert">
                &times;
            </button>
        </div>
        @endif
      <div class="content">
        <div class="container-fluid">
          <div class="row">
          @foreach($data as $dt)
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header-success card-header-icon">
                    <div>
                        <img src="{{ url('/foto/'.$dt->foto) }}" />
                    </div>
                    <p class="card-category">{{ $dt->nama }}</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>{{ $dt->ttd }}
                  </div>
                  <a href="{{ route('admin.booklet.edit',['id'=>$dt->id]) }}" class="btn btn-primary btn-round">Kenalan</a>
                </div>
              </div>
            </div>
            @endforeach
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

