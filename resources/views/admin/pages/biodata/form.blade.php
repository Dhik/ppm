@extends('admin.main')
@section('title','Biodata')
@section('content')

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h1 class="font-weight-light text-black">Data Diri</h1>
          </div>
        </div>
        <form method="post" action="{{ route('admin.biodata') }}">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div></br>
          <div class="row">
            <div class="col">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" required>
            </div>
            <div class="col">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required>
            </div>
          </div></br>
          <div class="form-group">
            <label for="nama">Jenis Kelamin</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Laki-laki" checked>
              <label class="form-check-label" for="exampleRadios1">Laki - laki</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Perempuan">
              <label class="form-check-label" for="exampleRadios2">Perempuan</label>
            </div>
          </div></br>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationCustom01">Asal Daerah</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Daerah" name="asal_daerah" required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">Asal Desa</label>
              <input type="text" class="form-control" id="validationCustom02" placeholder="Desa" name="asal_desa" required>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">Asal Kelompok</label>
              <input type="text" class="form-control" id="validationCustom02" placeholder="Kelompok" name="asal_kelompok" required>
            </div>
          </div></br>
          <div class="form-group">
            <label for="univ">Universitas / Institut</label>  
            <select class="form-control" id="univ" name="universitas">
              <option value="">Pilih : </option>
              <option value="Universitas Padjadjaran">Universitas Padjadjaran</option>
              <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
              <option value="Institut Koperasi Indonesia">Institut Koperasi Indonesia</option>
              <option value="Universitas Pendidikan Indonesia">Universitas Pendidikan Indonesia</option>
              <option value="Universitas Islam Negeri Sunan Gunung Djati">Universitas Islam Negeri Sunan Gunung Djati</option>
              <option value="Sekolah Tinggi Farmasi Bandung">Sekolah Tinggi Farmasi Bandung</option>
              <option value="Institut Seni Budaya Indonesia">Institut Seni Budaya Indonesia</option>
            </select>
          </div></br>
          <div class="row">
            <div class="col">
              <label for="fakultas">Fakultas</label>
              <input type="text" id="fakultas" class="form-control" name="fakultas">
            </div>
            <div class="col">
              <label for="jurusan">Jurusan</label>
              <input type="text" id="jurusan" class="form-control" name="jurusan">
            </div>
          </div></br>
          <div class="row">
            <div class="col">
              <label for="tahun_masuk">Tahun Masuk Kuliah</label>
              <input type="number" id="tahun_masuk" class="form-control" name="tahun_masuk">
            </div>
            <div class="col">
            </div>
          </div></br> 
          <div class="form-group">
            <label for="nama">Status Mubaligh</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="sudah" checked>
              <label class="form-check-label" for="exampleRadios1">Sudah</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="belum">
              <label class="form-check-label" for="exampleRadios2">Belum</label>
            </div>
          </div>
          <div class="form-group">
            <label for="nama_ayah">Nama Ayah</label>
            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
          </div></br>
          <div class="form-group">
            <label for="nama_ibu">Nama Ibu</label>
            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
          </div></br>
          <div class="row">
            <div class="col">
              <label for="no_telp">Nomor Telepon anda</label>
              <input type="number" id="no_telp" class="form-control" name="no_telp">
            </div>
            <div class="col">
            </div>
          </div></br>
          <div class="row">
            <div class="col">
              <label for="no_telp_ortu">Nomor Telepon Orang Tua</label>
              <input type="number" id="no_telp_ortu" class="form-control" name="no_telp_ortu">
            </div>
            <div class="col">
            </div>
          </div></br>
          <div class="form-group">
            <label for="riwayat_penyakit">Riwayat Penyakit</label>
            <input type="text" class="form-control" id="riwayat_penyakit" name="riwayat_penyakit">
          </div></br>
          <div class="row">
            <div class="col">
            <label for="goldar">Golongan Darah</label>  
            <select class="form-control" id="goldar" name="goldar">
              <option value="">Pilih : </option>
              <option value="A">A</option>
              <option value="AB">AB</option>
              <option value="B">B</option>
              <option value="O">O</option>
            </select>
            </div>
            <div class="col">
            </div>
          </div></br> 
          <div class="form-group">
            <label for="motivasi">Motivasi Masuk PPM</label>
            <p style="font-size:12px; color:blue;">*amal sholih diisi dengan jujur</p>
            <input type="text" class="form-control" id="motivasi" name="motivasi" required>
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
      </div>
    </div>
@endsection

    
  
