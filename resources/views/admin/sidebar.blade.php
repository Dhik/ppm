<nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center">
          @if(Auth::user()->angkatan != '2020')
          <img src="{{ url('/foto/'.Auth::user()->foto) }}" alt="person" class="img-fluid rounded-circle">
          @elseif(Auth::user()->angkatan == '2020')
          <img src="{{ url('/foto/user3.png') }}" alt="person" class="img-fluid rounded-circle">
          @endif
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
          <div class="sidenav-header-logo"><a href="{{ url('/') }}" class="brand-small text-center"> <strong>N</strong><strong class="text-primary">H</strong></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="{{ route('admin.home') }}"> <i class="icon-home"></i>Home                             </a></li>
            <li><a href="{{ route('admin.jadwal') }}"> <i class="icon-list-1"></i>Jadwal PPM                             </a></li>
              @if(Auth::user()->akses == 'sp_admin') 
                <li><a href="{{ route('admin.biodata.alldata') }}"> <i class="icon-bars"></i>Data Santri PPM                             </a></li>
              @elseif(Auth::user()->akses == 'admin')
                <li><a href="{{ route('admin.user') }}"> <i class="icon-user"></i>Terobosan                             </a></li>
                <li><a href="{{ route('admin.booklet.eval') }}"> <i class="icon-user"></i>Evaluasi Perkenalan                             </a></li>
                <li><a href="{{ route('admin.biodata.alldata') }}"> <i class="icon-bars"></i>Data Santri PPM                             </a></li>
              @elseif(Auth::user()->akses == 'operator')
                @if(Auth::user()->angkatan != '2020')
                <li><a href="{{ route('admin.biodata.alldata') }}"> <i class="icon-bars"></i>Data Santri PPM                             </a></li>
                @endif
              @endif
              @if(Auth::user()->angkatan == '2020' && Auth::user()->akses == 'operator')
              <li><a href="{{ route('admin.booklet') }}"> <i class="icon-picture"></i>Metamorph                             </a></li>
              @elseif(Auth::user()->angkatan != '2020' && Auth::user()->akses == 'operator')
              <li><a href="{{ route('admin.booklet.proses') }}"> <i class="icon-picture"></i>Perkenalan                             </a></li>
              @endif
            <!-- @if(Auth::user()->akses == 'admin' || Auth::user()->akses == 'operator')
                <li><a href="{{ route('admin.target') }}"> <i class="icon-list-1"></i>Hafalan                             </a></li>
            @endif -->
            @if(Auth::user()->akses != 'sp_admin')
            @if(Auth::user()->isi_biodata == 'sudah')
                <li><a href="{{ route('admin.biodata.datadiri') }}"> <i class="icon-form"></i>Biodata                             </a></li>
            @else
                <li><a href="{{ route('admin.biodata') }}"> <i class="icon-form"></i>Biodata                             </a></li>
            @endif
            @endif
          </ul>
        </div>
      </div>
    </nav>
