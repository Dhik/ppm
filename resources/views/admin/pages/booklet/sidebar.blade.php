<div class="sidebar" data-color="sand" data-background-color="blue" data-image="{{ url('assets/img/sidebar-01.png  ') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          PPM Nurul Hakim
        </a></div>
        
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home') }}">
              <i class="material-icons">Home</i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.jadwal') }}">
              <i class="material-icons">list</i>
              <p>Jadwal PPM</p>
            </a>
          </li>
          @if(Auth::user()->akses == 'sp_admin') 
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin.biodata.alldata') }}">
              <i class="material-icons">person</i>
              <p>Data Santri PPM</p>
            </a>
          </li>
          @elseif(Auth::user()->akses == 'admin')
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin.user') }}">
              <i class="material-icons">content_paste</i>
              <p>Terobosan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin.biodata.alldata') }}">
              <i class="material-icons">content_paste</i>
              <p>Data Santri PPM</p>
            </a>
          </li>
          @elseif(Auth::user()->akses == 'operator')
          @if(Auth::user()->angkatan != '2020')
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.biodata.alldata') }}">
              <i class="material-icons">library_books</i>
              <p>Data Santri PPM</p>
            </a>
          </li>
          @endif
          @endif
          @if(Auth::user()->angkatan == '2020' && Auth::user()->akses == 'operator')
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('admin.booklet') }}">
                <i class="material-icons">bubble_chart</i>
                <p>Metamorph</p>
              </a>
            </li>
          @elseif(Auth::user()->angkatan != '2020' && Auth::user()->akses == 'operator')
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('admin.booklet.proses') }}">
                <i class="material-icons">bubble_chart</i>
                <p>Perkenalan</p>
              </a>
            </li>
          @endif
          @if(Auth::user()->akses != 'sp_admin')
            @if(Auth::user()->isi_biodata == 'sudah')
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin.biodata.datadiri') }}">
              <i class="material-icons">location_ons</i>
              <p>Biodata</p>
            </a>
          </li>
          @else
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin.biodata') }}">
              <i class="material-icons">notifications</i>
              <p>Biodata</p>
            </a>
          </li>
          @endif
        @endif
        </ul>
      </div>
    </div>