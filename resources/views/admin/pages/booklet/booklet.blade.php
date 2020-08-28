@extends('admin.pages.booklet.temp')
@section('title','Booklet')
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
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header-success card-header-icon">
                    <div class="card-icon">
                        <img src="{{ url('assets/img/faces/marc.jpg') }}" />
                    </div>
                    <p class="card-category">Revenue</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header-success card-header-icon">
                    <div class="card-icon">
                        <img src="{{ url('assets/img/faces/marc.jpg') }}" />
                    </div>
                    <p class="card-category">Revenue</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header-success card-header-icon">
                    <div class="card-icon">
                        <img src="{{ url('assets/img/faces/marc.jpg') }}" />
                    </div>
                    <p class="card-category">Revenue</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header-success card-header-icon">
                    <div class="card-icon">
                        <img src="{{ url('assets/img/faces/marc.jpg') }}" />
                    </div>
                    <p class="card-category">Revenue</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
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
