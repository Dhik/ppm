<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
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
        </li>
        <li class="header-title"></li>
        <li>
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
        </li>
        <li class="button-container">
        <div class="sidenav-header-inner text-center">
            <h2 class="h5">{{ Auth::user()->name }}</h2>
            <h2 class="sidenav-heading">Kode anda : {{ Auth::user()->kode_mhs }}</h2>
            @if(Auth::user()->akses == 'admin')
            <h6 class="sidenav-heading" style="font-size:10px;">Status: Penerobos</h6>
            @elseif(Auth::user()->akses == 'sp_admin')
            <h6 class="sidenav-heading" style="font-size:10px;">Status: Super Admin</h6>
            @elseif(Auth::user()->akses == 'operator')
            <h6 class="sidenav-heading" style="font-size:10px;">Status: Santri</h6>
            @endif
          </div>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        </li>
      </ul>
    </div>
  </div>