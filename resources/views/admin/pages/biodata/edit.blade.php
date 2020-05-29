@extends('admin.main')
@section('title','Biodata Edit')
@section('content')
<h1>Biodata <small class="text-muted">Edit</small></h1>
<hr>
@if(session('result') == 'fail')
<div class="alert alert-danger alert-dismissible fade show">
    <strong>Failed !</strong>Gagal diupdate.
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
</div>
@endif

<div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h1 class="font-weight-light text-black">Data Diri</h1>
          </div>
        </div>
        <form method="post" action="{{ route('admin.biodata.edit',['id'=>$rc->id]) }}">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" value="{{ old('nama',$rc->nama) }}" id="nama" name="nama" required>
          </div></br>
          <div class="row">
            <div class="col">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('name',$rc->tempat_lahir) }}" class="form-control" required>
            </div>
            <div class="col">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{ old('name',$rc->tanggal_lahir) }}" required>
            </div>
          </div></br>
          <div class="form-group">
            <label for="nama">Jenis Kelamin</label>
            @if($rc->jenis_kelamin == 'Laki-laki')
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Laki-laki" checked>
              <label class="form-check-label" for="exampleRadios1">Laki - laki</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Perempuan">
              <label class="form-check-label" for="exampleRadios2">Perempuan</label>
            </div>
            @else
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Laki-laki">
              <label class="form-check-label" for="exampleRadios1">Laki - laki</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Perempuan" checked>
              <label class="form-check-label" for="exampleRadios2">Perempuan</label>
            </div>
            @endif
          </div></br>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationCustom01">Asal Daerah</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Daerah" name="asal_daerah" value="{{ old('asal_daerah',$rc->asal_daerah) }}"required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">Asal Desa</label>
              <input type="text" class="form-control" id="validationCustom02" value="{{ old('asal_desa',$rc->asal_desa) }}" placeholder="Desa" name="asal_desa" required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">Asal Kelompok</label>
              <input type="text" class="form-control" id="validationCustom02" placeholder="Kelompok" value="{{ old('asal_kelompok',$rc->asal_kelompok) }}" name="asal_kelompok" required>
            </div>
          </div></br>
          <div class="form-group">
            <?php
              $val=old('universitas',$rc->universitas);
            ?>
            <label for="univ">Universitas / Institut</label>  
            <select class="form-control" id="univ" name="universitas">
              <option value="" {{ $val==""?'selected':'' }}>Pilih : </option>
              <option value="Universitas Padjadjaran" {{ $val=="Universitas Padjadjaran"?'selected':'' }}>Universitas Padjadjaran</option>
              <option value="Institut Teknologi Bandung" {{ $val=="Institut Teknologi Bandung"?'selected':'' }}>Institut Teknologi Bandung</option>
              <option value="Institut Koperasi Indonesia" {{ $val=="Institut Koperasi Indonesia"?'selected':'' }}>Institut Koperasi Indonesia</option>
              <option value="Universitas Pendidikan Indonesia" {{ $val=="Universitas Pendidikan Indonesia"?'selected':'' }}>Universitas Pendidikan Indonesia</option>
              <option value="Universitas Islam Negeri Sunan Gunung Djati" {{ $val=="Universitas Islam Negeri Sunan Gunung Djati"?'selected':'' }}>Universitas Islam Negeri Sunan Gunung Djati</option>
              <option value="Sekolah Tinggi Farmasi Bandung" {{ $val=="Sekolah Tinggi Farmasi Bandung"?'selected':'' }}>Sekolah Tinggi Farmasi Bandung</option>
            </select>
          </div></br>
          <div class="row">
            <div class="col">
              <label for="fakultas">Fakultas</label>
              <input type="text" id="fakultas" class="form-control" name="fakultas" value="{{ old('fakultas',$rc->fakultas) }}">
            </div>
            <div class="col">
              <label for="jurusan">Jurusan</label>
              <input type="text" id="jurusan" class="form-control" name="jurusan" value="{{ old('jurusan',$rc->jurusan) }}">
            </div>
          </div></br>
          <div class="row">
            <div class="col">
              <label for="tahun_masuk">Tahun Masuk Kuliah</label>
              <input type="number" id="tahun_masuk" class="form-control" name="tahun_masuk" value="{{ old('tahun_masuk_kuliah',$rc->tahun_masuk_kuliah) }}">
            </div>
            <div class="col">
            </div>
          </div></br> 
          <div class="form-group">
            <label for="nama">Status Mubaligh</label>
            @if($rc->status_mubaligh == 'sudah')
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="sudah" checked>
              <label class="form-check-label" for="exampleRadios1">Sudah</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="belum">
              <label class="form-check-label" for="exampleRadios2">Belum</label>
            </div>
            @else
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="sudah">
              <label class="form-check-label" for="exampleRadios1">Sudah</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="belum" checked>
              <label class="form-check-label" for="exampleRadios2">Belum</label>
            </div>
            @endif
          </div>
          <div class="form-group">
            <label for="nama_ayah">Nama Ayah</label>
            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="{{ old('nama_ayah',$rc->nama_ayah) }}">
          </div></br>
          <div class="form-group">
            <label for="nama_ibu">Nama Ibu</label>
            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{ old('nama_ibu',$rc->nama_ibu) }}">
          </div></br>
          <div class="row">
            <div class="col">
              <label for="no_telp">Nomor Telepon anda</label>
              <input type="number" id="no_telp" class="form-control" name="no_telp" value="{{ old('no_telp_anda',$rc->no_telp_anda) }}">
            </div>
            <div class="col">
            </div>
          </div></br>
          <div class="row">
            <div class="col">
              <label for="no_telp_ortu">Nomor Telepon Orang Tua</label>
              <input type="number" id="no_telp_ortu" class="form-control" name="no_telp_ortu" value="{{ old('no_telp_ortu',$rc->no_telp_ortu) }}">
            </div>
            <div class="col">
            </div>
          </div></br>
          <div class="form-group">
            <label for="riwayat_penyakit">Riwayat Penyakit</label>
            <input type="text" class="form-control" id="riwayat_penyakit" name="riwayat_penyakit" value="{{ old('riwayat_penyakit',$rc->riwayat_penyakit) }}">
          </div></br>
          <div class="row">
            <?php
              $val=old('goldar',$rc->goldar);
            ?>
            <div class="col">
            <label for="goldar">Golongan Darah</label>  
            <select class="form-control" id="goldar" name="goldar">
              <option value="" {{ $val==""?'selected':'' }}>Pilih : </option>
              <option value="A" {{ $val=="A"?'selected':'' }}>A</option>
              <option value="AB" {{ $val=="AB"?'selected':'' }}>AB</option>
              <option value="B" {{ $val=="B"?'selected':'' }}>B</option>
              <option value="O" {{ $val=="O"?'selected':'' }}>O</option>
            </select>
            </div>
            <div class="col">
            </div>
          </div></br> 
          <div class="form-group">
            <label for="motivasi">Motivasi Masuk PPM</label>
            <p style="font-size:12px; color:blue;">*amal sholih diisi dengan jujur</p>
            <input type="text" class="form-control" id="motivasi" name="motivasi" value="{{ old('motivasi',$rc->motivasi) }}"required>
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
      </div>
    </div>
@endsection