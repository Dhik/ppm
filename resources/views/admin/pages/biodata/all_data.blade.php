@extends('admin.main')
@section('title','Daftar User')
@section('content')
<h1>User</h1>
<hr>       
@if(session('result') == 'success')
<div class="alert alert-success alert-dismissible fade show">
    <strong>Saved !</strong>Berhasil disimpan.
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

@if(session('result') == 'delete')
<div class="alert alert-success alert-dismissible fade show">
    <strong>Deleted!</strong>Berhasil dihapus.
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
</div>
@endif

@if(session('result') == 'fail-delete')
<div class="alert alert-success alert-dismissible fade show">
    <strong>Failed!</strong>Gagal Dihapus.
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
</div>
@endif
@if(Auth::user()->akses == 'sp_admin')
<div class="row">
    <div class="col-md-6 mb-3">
        <a href="{{ route('admin.user.add') }}" class="btn btn-primary">[+] Tambah</a>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <a href="{{ url('/bio') }}" class="btn btn-info">Download Biodata</a>
    </div>
    <div class="col-md-6 mb-3">
        <form method="get" action="{{ route('admin.user.cari') }}">
            <div class="input-group">
                <input type="text" name="keyword" value="{{ request('keyword') }}" class="form-control">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">
                        Cari !
                    </button>
                </div>
            </div>
        </form>
    </div>
    @endif
    
    <table class="table table-striped mb-3">
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Data Santri</th>
            <th>Edit / Hapus</th>
        </tr>
        @foreach($data as $dt)
        <tr>
            <td>{{ $dt->name }}</td>
            @if($dt->akses == 'operator')
            <td>Santri</td>
            @elseif($dt->akses == 'admin')
            <td>Penerobos</td>
            @elseif($dt->akses == 'sp_admin')
            <td>Super Admin</td>
            @endif
            <td>
            @if($dt->id != Auth::id())
             @if($dt->akses != 'sp_admin')
                <a href="{{ route('admin.biodata.uncomp',['id'=>$dt->kode_mhs]) }}" class="btn btn-info btn-sm">
                    <i class="fa fa-w icon-bars"></i>
                </a>
            @endif
            @endif
            </td>
            <td>
                <a href="{{ route('admin.user.edit',['id'=>$dt->id]) }}" class="btn btn-success btn-sm">
                    <i class="fa fa-w fa-edit"></i>
                </a>

                @if($dt->id != Auth::id())
                <button class="btn btn-danger btn-sm btn-trash" data-id="{{ $dt->id }}" type="button">
                    <i class="fa fa-w fa-trash"></i>
                </button>
                @endif
            </td>
        </tr>
        @endforeach
    </table>


@endsection

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
                <form id="form-delete" method="post" action="{{ route('admin.user') }}">
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