@extends('admin.main')
@section('title','Biodata')
@section('content')

@if(session('result') == 'update')
<div class="alert alert-success alert-dismissible fade show">
    <strong>Updated!</strong>Berhasil diupdate.
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
</div>
@endif

@foreach($data as $dt)
<table class="table table-bordered table-dark">
  <thead>
    <tr class="bg-primary">
    <td colspan="2" style="text-align:center; font-size:25px;">Biodata</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nama</td>
      <td>{{ $dt->nama }}</td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>{{ $dt->jenis_kelamin }}</td>
    </tr>
    <tr>
      <td>Universitas</td>
      <td>{{ $dt->universitas }}</td>
    </tr>
    <tr>
      <td>Fakultas</td>
      <td>{{ $dt->fakultas }}</td>
    </tr>
    <tr>
      <td>Prodi</td>
      <td>{{ $dt->jurusan }}</td>
    </tr>
    <tr>
      <td>Tahun Masuk Kuliah</td>
      <td>{{ $dt->tahun_masuk_kuliah }}</td>
    </tr>
    <tr>
      <td>Nomor Telepon Anda</td>
      <td>{{ $dt->no_telp_anda }}</td>
    </tr>
  </tbody>
</table>
@endforeach
@endsection