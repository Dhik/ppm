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
  <div class="row">
    <div class="col-md-6 mb-3">
        <a href="{{ route('admin.biodata.edit',['id'=>$dt->id]) }}" class="btn btn-info">Edit Biodata</a>
    </div>
  </div>
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
      <td>Tempat Lahir</td>
      <td>{{ $dt->tempat_lahir }}</td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td>{{ $dt->tanggal_lahir }}</td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>{{ $dt->jenis_kelamin }}</td>
    </tr>
    <tr>
      <td>Asal Daerah</td>
      <td>{{ $dt->asal_daerah }}</td>
    </tr>
    <tr>
      <td>Asal Desa</td>
      <td>{{ $dt->asal_desa }}</td>
    </tr>
    <tr>
      <td>Asal Kelompok</td>
      <td>{{ $dt->asal_kelompok }}</td>
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
      <td>Status Mubaligh</td>
      <td>{{ $dt->status_mubaligh }}</td>
    </tr>
    <tr>
      <td>Nama Ayah</td>
      <td>{{ $dt->nama_ayah }}</td>
    </tr>
    <tr>
      <td>Nama Ibu</td>
      <td>{{ $dt->nama_ibu }}</td>
    </tr>
    <tr>
      <td>Nomor Telepon Anda</td>
      <td>{{ $dt->no_telp_anda }}</td>
    </tr>
    <tr>
      <td>Nomor Telepon Orang Tua</td>
      <td>{{ $dt->no_telp_ortu }}</td>
    </tr>
    <tr>
      <td>Riwayat Penyakit</td>
      <td>{{ $dt->riwayat_penyakit }}</td>
    </tr>
    <tr>
      <td>Golongan Darah</td>
      <td>{{ $dt->goldar }}</td>
    </tr>
    <tr>
      <td>Motivasi Masuk PPM</td>
      <td>{{ $dt->motivasi }}</td>
    </tr>
  </tbody>
</table>
@endforeach
@endsection