@extends('auth.main')
@section('title','Login')
@section('content')
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/login.JPG);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="{{ route('login') }}">
					{{csrf_field()}}
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}">
						<span class="focus-input100" required autocomplete="email" autofocus></span>

						@error('email')
                            <!-- <span class="invalid-feedback" role="alert"> -->
                                <strong style="font-size:10px; color:red;">{{ $message }}</strong>
                            <!-- </span> -->
                    	@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter password" required autocomplete="current-password">
						<span class="focus-input100"></span>
						@error('password')
                        	<!-- <span class="invalid-feedback" role="alert"> -->
                                <strong style="font-size:10px; color:red;">{{ $message }}</strong>
                            <!-- </span> -->
                        @enderror
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="{{ route('password.request') }}" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
		@endsection