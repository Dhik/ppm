@extends('admin.main')
@section('title','Prensensi')
@section('content')

<!-- Baris Tambah dan Pencarian -->
<div class="row">
    <!-- Tombol Tambah -->

    @if(Auth::user()->akses == 'sp_admin')
    @foreach($data as $dt)
        @if($dt->akses == 'admin')
            @if($loop->first)
            <div class="col-md-6 col-lg-4 text-center mb-5">
                <div class="col-md-6 mb-3">
                    <a href="{{ route('admin.target.add',['id'=>$dt->kode_mhs]) }}" class="btn btn-primary">[+] Tambah</a>
                </div>
            </div>
            @endif
        @endif
    @endforeach
    @endif
        @foreach($data as $dt)
            @if($loop->first)
                <div style="margin-left:400px; margin-top:100px;">
                    <a href="{{ route('admin.target.add',['id'=>$dt->kode_mhs]) }}" class="btn btn-primary">
                        <img src="{{ url('theme-sbadmin/img/rotate.png') }}" class="mr-4 ml-4 mt-4"></br>
                        <h2 class="font-weight-light mt-4">Update Hafalan</h2>
                    </a>
                </div>
            @endif
    @endforeach
    
</div><!-- end row -->
@endsection