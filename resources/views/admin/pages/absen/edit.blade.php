@extends('admin.main')
@section('title','Absen Edit')
@section('content')
<h1>Presensi <small class="text-muted">Edit</small></h1>
<hr>
@if(session('result') == 'fail')
<div class="alert alert-danger alert-dismissible fade show">
    <strong>Failed !</strong>Gagal diupdate.
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
</div>
@endif

<div class="row">
    <div class="col-md-6 mb-3">
        <form method="post" action="{{ route('admin.absen.edit',['id'=>$rc->id]) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card">

                <div class="card-header">
                    <h5>Edit Presensi</h5>
                </div><!-- end card header   -->

                <div class="card-body">

                <!-- Input Gambar -->

                <div class="form-group form-label-group">
                        <?php
                        $val=old('jenis_pengajian',$rc->jenis_pengajian);
                        ?>
                        <select class="form-control" name="jenis_pengajian">
                            <option value="" {{ $val==""?'selected':'' }}>Pilih Jenis Pengajian : </option>
                            <option value="Pengajian Shubuh" {{ $val=="Pengajian Shubuh"?'selected':'' }}>Pengajian Shubuh</option>
                            <option value="Pengajian Kelompokan" {{ $val=="Pengajian Kelompokan"?'selected':'' }}>Pengajian Kelompokan</option>
                            <option value="Halaqoh" {{ $val=="Halaqoh"?'selected':'' }}>Halaqoh</option>
                            <option value="Apel Malam" {{ $val=="Apel Malam"?'selected':'' }}>Apel Malam</option>
                            <option value="Pengajian Maghrib" {{ $val=="Pengajian Maghrib"?'selected':'' }}>Pengajian Maghrib</option>
                            <option value="Pengajian Muda-Mudi" {{ $val=="Pengajian Muda-Mudi"?'selected':'' }}>Pengajian Muda-Mudi</option>
                        </select>
                        @if($errors->has('akses'))
                        <div class="invalid-feedback">{{ $errors->first('akses') }}</div>
                        @endif
                    </div>

                    <div class="form-group form-label-group">
                        <?php
                        $val=old('status',$rc->status);
                        ?>
                        <select class="form-control" name="status">
                            <option value="" {{ $val==""?'selected':'' }}>Pilih Status Kehadiran : </option>
                            <option value="Tepat Waktu" {{ $val=="Tepat Waktu"?'selected':'' }}>Tepat Waktu</option>
                            <option value="Terlambat" {{ $val=="Terlambat"?'selected':'' }}>Terlambat</option>
                            <option value="Tidak Hadir" {{ $val=="Tidak Hadir"?'selected':'' }}>Tidak Hadir</option>
                        </select>
                        @if($errors->has('akses'))
                        <div class="invalid-feedback">{{ $errors->first('akses') }}</div>
                        @endif
                    </div>

                    <!-- Input harga -->
                    <div class="form-group form-label-group">
                        <label for="iKeterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control {{ $errors->has('keterangan')?'is-invalid':'' }}"    value="{{ old('keterangan',$rc->keterangan) }}" id="iKeterangan" placeholder="Keterangan">
                        
                        @if( $errors->has('harga') )
                        <div class="invalid-feedback">{{ $errors->first('harga') }}</div>
                        @endif
                    </div><!-- end form group -->

                    <!-- Input Stok -->
                    <div class="form-group form-label-group">
                        <label for="iTanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control {{ $errors->has('tanggal')?'is-invalid':'' }}"    value="{{ old('tanggal',$rc->tanggal) }}" id="iTanggal" required>
                        
                        @if( $errors->has('stok') )
                        <div class="invalid-feedback">{{ $errors->first('stok') }}</div>
                        @endif
                    </div><!-- end form group -->
                </div><!-- end card body -->

                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div><!-- End Card Footer -->

                <!-- <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button> -->
                <!-- </div>end card footer -->
            </div><!-- end card -->
        </form>
    </div>
</div>
@endsection