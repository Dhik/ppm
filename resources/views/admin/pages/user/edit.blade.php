@extends('admin.main')
@section('title','User Edit')
@section('content')
<h1>User<small class="text-muted">Edit</small></h1>
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
    <div class="col-md-6">
        <form method="post" action="{{ route('admin.user.edit',['id'=>$rc->id]) }}">
            {{ csrf_field() }}
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data User</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="form-group form-label-group">
                        <input type="text" name="name" class="form-control {{ $errors->has('name')?'is-invalid':'' }}" value="{{ old('name',$rc->name) }}" id="iName" placeholder="Name" required>
                        <label for="iName">Name</label>
                        @if($errors->has('name'))
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                        @endif 
                    </div><!-- end form group -->
                    <div class="form-group form-label-group">
                        <input type="email" name="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" value="{{ old('email',$rc->email) }}" id="iEmail" placeholder="Email" required>
                        <label for="iEmail">Email</label>
                        @if($errors->has('email'))
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        @endif 
                    </div><!-- end form group -->
                    <div class="form-group form-label-group">
                        <input type="password" name="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" value="{{ old('password') }}" id="iPassword" placeholder="Password">
                        <label for="iPassword">Password</label>
                        @if($errors->has('password'))
                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                        @endif
                        <div class="form-text text-muted">
                            <small>Kosongkan Password apabila tidak diubah.</small>
                        </div> 
                    </div><!-- end form group -->
                    <div class="form-group form-label-group">
                        <input type="password" name="repassword" class="form-control {{ $errors->has('repassword')?'is-invalid':'' }}" id="iRePassword" placeholder="Re Password">
                        <label for="iRePassword">Re Password</label>
                        @if($errors->has('repassword'))
                        <div class="invalid-feedback">{{ $errors->first('repassword') }}</div>
                        @endif 
                    </div><!-- end form group -->

                    <div class="form-group form-label-group">
                        <?php
                        $val=old('akses',$rc->akses);
                        ?>
                        <select class="form-control" name="akses">
                            <option value="" {{ $val==""?'selected':'' }}>Pilih Akses Sebagai : </option>
                            <option value="operator" {{ $val=="operator"?'selected':'' }}>Operator</option>
                            <option value="admin" {{ $val=="admin"?'selected':'' }}>Administrator</option>
                        </select>
                        @if($errors->has('akses'))
                        <div class="invalid-feedback">{{ $errors->first('akses') }}</div>
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