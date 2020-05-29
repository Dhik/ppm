@extends('admin.main')
@section('title','User Tambah')
@section('content')
<h1>User <small class="text-muted"> Tambah</small></h1>
<hr>
@if(session('result') == 'fail')
<div class="alert alert-danger alert-dismissible fade show">
    <strong>Failed !</strong>Gagal disimpan.
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
</div>
@endif

<div class="row">
    <div class="col-md-6">
        <form method="post" action="{{ route('admin.user.add') }}">
            {{ csrf_field() }}
            <div class="card">
                <div class="card-header">
                    <h5>Buat User Baru</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="form-group form-label-group">
                        <label for="iName">Name</label>
                        <input type="text" name="name" class="form-control {{ $errors->has('name')?'is-invalid':'' }}" value="{{ old('name') }}" id="iName" placeholder="Name" required>
                        @if($errors->has('name'))
                        <div style="font-size:10px; color:red;">{{ $errors->first('name') }}</div>
                        @endif 
                    </div><!-- end form group -->
                    <div class="form-group form-label-group">
                        <label for="iEmail">Email</label>
                        <input type="email" name="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" value="{{ old('email') }}" id="iEmail" placeholder="Email" required>
                        @if($errors->has('email'))
                        <div style="font-size:10px; color:red;">{{ $errors->first('email') }}</div>
                        @endif 
                    </div><!-- end form group -->
                    <div class="form-group form-label-group">
                        <label for="iPassword">Password</label>
                        <input type="password" name="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" value="{{ old('password') }}" id="iPassword" placeholder="Password" required>
                        @if($errors->has('password'))
                        <div style="font-size:10px; color:red;">{{ $errors->first('password') }}</div>
                        @endif 
                    </div><!-- end form group -->
                    <div class="form-group form-label-group">
                        <label for="iRePassword">Re Password</label>
                        <input type="password" name="repassword" class="form-control {{ $errors->has('repassword')?'is-invalid':'' }}" id="iRePassword" placeholder="Re Password" required>
                        @if($errors->has('repassword'))
                        <div style="font-size:10px; color:red;">{{ $errors->first('repassword') }}</div>
                        @endif 
                    </div><!-- end form group -->
                    <div class="form-group form-label-group">
                        <label for="iKode">Kode Santri</label>
                        <input type="number" name="kode_mhs" class="form-control {{ $errors->has('kode_mhs')?'is-invalid':'' }}" value="{{ old('kode_mhs') }}" id="iKode" placeholder="kode" required>
                        @if($errors->has('kode_mhs'))
                        <div style="font-size:10px; color:red;">{{ $errors->first('kode_mhs') }}</div>
                        @endif 
                    </div><!-- end form group -->
                    <div class="form-group form-label-group">
                        <?php
                        $val=old('akses');
                        ?>
                        @if(Auth::user()->akses == 'admin')
                        <input class="form-control" name="akses" type="hidden" value="operator">
                        @elseif(Auth::user()->akses == 'sp_admin')
                        <select class="form-control" name="akses">
                            <option value="" {{ $val==""?'selected':'' }}>Pilih Akses Sebagai : </option>
                            <option value="admin" {{ $val=="admin"?'selected':'' }}>Penerobos</option>
                            <option value="sp_admin" {{ $val=="sp_admin"?'selected':'' }}>Super Admin</option>
                        </select>
                        @endif
                    </div><!-- end form group -->

                </div><!-- end card body -->

                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div><!-- end card footer -->
            </div><!-- end card -->
        </form>
    </div>
</div>
@endsection