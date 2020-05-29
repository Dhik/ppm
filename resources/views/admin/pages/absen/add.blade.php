@extends('admin.main')
@section('title','Tambah Presensi')
@section('content')
<h1>Tambah <small> Presensi</small></h1>
<hr>
<script>
function tambah(){
    var angka1=$kode
    document.calc.hasil.value = angka1+angka2;
}
</script>
<div class="row">
    <div class="col-md-6 mb-3">
        <form method="post" action="{{ route('admin.absen.add',['id'=>$kode]) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card">

                <div class="card-header">
                    <h5>Tambah Presensi Baru</h5>
                </div><!-- end card header   -->

                <div class="card-body">

                <!-- Input Gambar -->

                <div class="form-group form-label-group">
                        <?php
                        $val=old('jenis_pengajian');
                        ?>
                        <select class="form-control" name="jenis_pengajian">
                            <option value="">Pilih Jenis Pengajian : </option>
                            <option value="Pengajian Shubuh">Pengajian Shubuh</option>
                            <option value="Pengajian Kelompokan">Pengajian Kelompokan</option>
                            <option value="Halaqoh">Halaqoh</option>
                            <option value="Apel Malam">Apel Malam</option>
                            <option value="Pengajian Maghrib">Pengajian Maghrib</option>
                            <option value="Pengajian Muda-Mudi">Pengajian Muda-Mudi</option>
                        </select>
                        @if($errors->has('akses'))
                        <div class="invalid-feedback">{{ $errors->first('akses') }}</div>
                        @endif
                    </div>

                    <div class="form-group form-label-group">
                        <?php
                        $val=old('status');
                        ?>
                        <select class="form-control" name="status">
                            <option value="">Pilih Status Kehadiran : </option>
                            <option value="Tepat Waktu">Tepat Waktu</option>
                            <option value="Terlambat">Terlambat</option>
                            <option value="Tidak Hadir">Tidak Hadir</option>
                        </select>
                        @if($errors->has('akses'))
                        <div class="invalid-feedback">{{ $errors->first('akses') }}</div>
                        @endif
                    </div>

                    <!-- Input harga -->
                    <div class="form-group form-label-group">
                        <label for="iKeterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control {{ $errors->has('keterangan')?'is-invalid':'' }}"    value="{{ old('keterangan') }}" id="iKeterangan" placeholder="Keterangan">
                        
                        @if( $errors->has('harga') )
                        <div class="invalid-feedback">{{ $errors->first('harga') }}</div>
                        @endif
                    </div><!-- end form group -->

                    <!-- Input Stok -->
                    <div class="form-group form-label-group">
                        <label for="iTanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control {{ $errors->has('tanggal')?'is-invalid':'' }}"    value="{{ old('tanggal') }}" id="iTanggal" required>
                        
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

@push('js')
<script type="text/javascript">
// Fungsi menampilkan gambar yang dipilih
function filePreview(input) {
    if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#iGambar + img').remove();
            $('#iGambar').after('<img src="'+e.target.result+'"width="100" class="mt-3" />');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
// Perintah menjalankan fungsi filepreview
$(function(){
    $('#iGambar').change(function(){
        filePreview(this);
    })
})
</script>
@endpush