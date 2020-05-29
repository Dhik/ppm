@extends('admin.main')
@section('title','Dashboard')
@section('content')

@if(session('result') == 'success')
<div class="alert alert-success alert-dismissible fade show">
    <strong>Saved !</strong>Berhasil disimpan.
    <h1>Anda telah mengisi data diri. Disyukuri Alhamdulillah jazakillahu/jazakallahu khoiro :)
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
</div>
@endif
<h1>Selamat Datang di Halaman Dashboard</h1>
</br></br>
<div>
    <h2 class="sidenav-heading">Nama : {{ Auth::user()->name }}</h2>
    <h2 class="sidenav-heading">Kode : {{ Auth::user()->kode_mhs }}</h2>
    @if(Auth::user()->akses == 'admin')
    <h2 class="sidenav-heading">Status: Penerobos</h2>
    @elseif(Auth::user()->akses == 'sp_admin')
    <h2 class="sidenav-heading">Status: Super Admin</h2>
    @elseif(Auth::user()->akses == 'operator')
    <h2 class="sidenav-heading">Status: Santri</h2>
    @endif
</div></br>  
<hr>
<p>Anda adalah warga PPM Nurul Hakim</p>
@endsection
