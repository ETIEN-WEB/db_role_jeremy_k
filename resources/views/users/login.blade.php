@extends('users.template')

    @section('content')

	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{asset('login_template/images/bg-01.jpg') }}');">
			<div class="wrap-login100">
				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
					@csrf
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
						@error('email')
                                    <span class="focus-input100" data-placeholder="&#xf191;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						{{-- <span class="focus-input100" data-placeholder="&#xf207;"></span> --}}
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
						@error('password')
						<span class="focus-input100" data-placeholder="&#xf191;" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						{{-- <span class="focus-input100" data-placeholder="&#xf191;"></span> --}}
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
					@if (Route::has('password.request'))
					<div class="text-center p-t-90">
						<a class="txt1" href="{{ route('password.request') }}">
							Mot de passe oublié?
						</a>
					</div>
					@endif
				</form>
			</div>
		</div>
	</div>
    
    @endsection
    @push('scripts')
        <script>
    
        </script>
    @endpush