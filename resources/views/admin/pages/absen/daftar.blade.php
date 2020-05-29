@extends('admin.main')
@section('title','Prensensi')
@section('content')


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
                <a href="{{ route('admin.absen.perminggu') }}" class="btn btn-info">Perminggu</a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="{{ url('se_ppm') }}" class="btn btn-primary">Download Excel Anda</a>
            </div>
        @endif
    @endif
@endforeach


        


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
@if(Auth::user()->akses != 'operator')
@push('modal')
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete</h5>
                <button class="close" type="button" data-dismiss="modal">
                    <span>x</span>
                </button>
            </div><!-- end modal header   -->
            <div class="modal-body">
            Apakah anda yakin ingin menghapusnya?
                <form id="form-delete" method="post" action="{{ route('admin.absen',['id'=>$dt->kode_mhs]) }}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <input type="hidden" name="id" id="input-id">
                </form>
            </div><!-- end modal body -->
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary btn-delete" type="button">Delete</button>
            </div>
        </div><!-- end modal content -->
    </div><!-- end modal dialog -->
</div>
@endpush
@endif
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