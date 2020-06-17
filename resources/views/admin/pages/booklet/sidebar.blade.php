<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ url('assets/img/sidebar-2.jpg') }}">
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
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('admin.biodata.alldata') }}">
              <i class="material-icons">library_books</i>
              <p>Data Santri PPM</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.booklet.list') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Booklet Metamorph</p>
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