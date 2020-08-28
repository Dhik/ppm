@if(Auth::user()->angkatan == '2020')
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa-4x material-icons">assignment</i>
      </a>
      <ul class="dropdown-menu">
        <!-- <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li> -->
        <!-- <li class="header-title"></li> -->
        <!-- <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{ url('assets/img/sidebar-1.jpg') }}" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{ url('assets/img/sidebar-2.jpg') }}" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{ url('assets/img/sidebar-3.jpg') }}" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="{{ url('assets/img/sidebar-4.jpg') }}" alt="">
          </a>
        </li> -->
        <li class="button-container">
        <div class="sidenav-header-inner text-center">
            <h4>{{ Auth::user()->name }}</h4>
            <h4>Kode anda : {{ Auth::user()->kode_mhs }}</h4>
            @if(Auth::user()->akses == 'admin')
            <h6>Status: Penerobos</h6>
            @elseif(Auth::user()->akses == 'sp_admin')
            <h6>Status: Super Admin</h6>
            @elseif(Auth::user()->akses == 'operator')
            <h6>Status: Santri</h6>
            @endif
          </div>
        </li>
        <li class="button-container">
        @if(Auth::user()->akses != 'sp_admin')
          @if(Auth::user()->isi_biodata == 'sudah')
            <a href="{{ route('admin.biodata.datadiri') }}" class="btn btn-primary btn-block">
              <i class="material-icons">article</i>
                Biodata
            </a>
          @else
            <a href="{{ route('admin.biodata') }}" class="btn btn-primary btn-block">
              <i class="material-icons">article</i>
                Biodata
            </a>
          @endif
        @endif
          @if(Auth::user()->angkatan == '2020' && Auth::user()->akses == 'operator')
            <a href="{{ route('admin.booklet.list') }}" class="btn btn-info btn-block">
              <i class="material-icons">bubble_chart</i>
                Booklet Metamorph
            </a>
          @elseif(Auth::user()->angkatan != '2020' && Auth::user()->akses == 'operator')
            <a href="{{ route('admin.booklet.proses') }}" class="btn btn-info btn-block">
              <i class="material-icons">bubble_chart</i>
                Booklet Metamorph
            </a>
          @endif
          <a href="{{ route('admin.booklet.proses') }}" class="btn btn-warning btn-success">Ada yang mau kenalan</a>
        </li>
        <li class="header-title"></li>

        </li>
      </ul>
    </div>
  </div>
  @endif