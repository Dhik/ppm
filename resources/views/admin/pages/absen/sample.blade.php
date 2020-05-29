@extends('admin.main')
@section('title','Prensensi')
@section('content')

<h1>Sample</h1>
@foreach($data as $dt)
    @if($dt->id != Auth::id() )
        @if($loop->first)
            <h1>Prensensi {{ $dt->name}}</h1>  
            <hr>
            @if(Auth::user()->akses == 'admin')
                @foreach($data as $dt)
                    @if($loop->first)
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('admin.absen.add',['id'=>$dt->kode_mhs]) }}" class="btn btn-primary">[+] Tambah</a>
                        </div>
                        <!-- <div class="col-md-6 mb-3">
                            <a href="{{ route('admin.absen.export') }}" class="btn btn-info">Download Excel</a>
                        </div> -->
                    @endif
                @endforeach
            @elseif(Auth::user()->akses == 'sp_admin')
                <!-- <div class="col-md-6 mb-3">
                    <a href="{{ route('admin.absen.export') }}" class="btn btn-info">Download Excel SP Admin</a>
                </div> -->
            @endif
        @endif
    @else
        @if($loop->first)
            <h1>Prensensi Anda</h1>  
            <hr>
            <div class="col-md-6 mb-3">
                <a href="{{ url('se_ppm') }}" class="btn btn-info">Download Excel Anda</a>
            </div>
        @endif
    @endif
@endforeach
            <!-- <div class="col-md-4 mb-3">
                <select class="form-control" id="gender">
                    <option value="gender">Jenis Kelamin</option>
                    <option value="Laki-laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div> -->
        <div class="col-md-6 mb-3">
        <form method="get" action="{{ route('admin.absen.cari') }}">
            <div class="input-group">
            <select class="form-control" id="bulan">
                    <option value="">Pilih Bulan</option>
                    <option value="1">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">
                        Cari !
                    </button>
                </div>
            </div>
        </form>
    </div>
        


@if(session('result') == 'success')
<div class="alert alert-success alert-dismissible fade show">
    <strong>Saved !</strong>Berhasil disimpan.
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
</div>
@endif

@if(session('result') == 'delete')
<div class="alert alert-success alert-dismissible fade show">
    <strong>Deleted!</strong>Berhasil dihapus.
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
</div>
@endif
@if(session('result') == 'update')
<div class="alert alert-success alert-dismissible fade show">
    <strong>Updated!</strong>Berhasil diupdate.
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
</div>
@endif
@if(session('result') == 'fail-delete')
<div class="alert alert-danger alert-dismissible fade show">
    <strong>Failed!</strong>Gagal Dihapus.
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
</div>
@endif

<!-- Baris Tambah dan Pencarian -->
<div class="row">
    <!-- Tombol Tambah -->

    @if(Auth::user()->akses == 'sp_admin')
    @foreach($data as $dt)
        @if($dt->akses == 'admin')
            @if($loop->first)
                <div class="col-md-6 mb-3">
                    <a href="{{ route('admin.absen.add',['id'=>$dt->kode_mhs]) }}" class="btn btn-primary">[+] Tambah</a>
                </div>
            @endif
        @endif
    @endforeach
    @endif

    
    
</div><!-- end row -->
<?php 
$jumlah = 10000;
?>
<!-- Baris Daftar Data -->
<table class="table table-striped mb-3">
    <tr>
        <th>Jenis Pengajian</th>
        <th>Status</th>
        <th>Keterangan</th>
        <th>&nbsp;</th>
    </tr>
    
    @foreach($data as $dt)
    <tr>
        <td>
            {{ $dt->jenis_pengajian}}
        </td>
        <td>
            {{ $dt->status }}
        </td>
        <td>
            {{ $dt->keterangan }}
        </td>
        <!-- Kolom Tombol -->
        <td>
            <!-- Tombol Edit -->
            @if($dt->keterangan != 'primary')
                @if($dt->id != Auth::id())
                    <a href="{{ route('admin.absen.edit',['id'=>$dt->id]) }}" class="btn btn-success btn-sm">
                        <i class="fa fa-w fa-edit"></i>
                    </a>
                <!-- Tombol Hapus -->
                    <button type="button" data-id="{{ $dt->id }}" class="btn btn-danger btn-sm btn-trash">
                        <i class="fa fa-w fa-trash"></i>
                    </button>
                @endif
            @endif
        </td>
    </tr>
    @endforeach
</table>


@endsection
@push('js')
<script type="text/javascript">
$(function(){
    $('.btn-trash').click(function(){
        id = $(this).attr('data-id');
        $('#input-id').val(id);
        $('#deleteModal').modal('show');
    });
    $('.btn-delete').click(function(){
        // alert( $('#input-id').val() );
        $('#form-delete').submit();
    });
})
</script>
@endpush