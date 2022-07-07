<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NgeKos') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('styles/boostrap.min.css')}}">
    <link href="{{ asset('styles/style.css') }}" rel="stylesheet">  
    <style>
    body{
    	background-size:100% 100%;
		background-attachment:fixed;
		background-repeat:no-repeat;
		
		background-blend-mode: multiply;
		font-family: 'Nunito', sans-serif;
		font-weight: 200;
		margin: 0; }
	</style>
</head>
<body style="">
		<div class=" col-md 12 col-sm-12 col-lg-12">
			<div class="container">
				<div class="row logo">
					<div class="mx-auto mt-5">
						<span><img src="{{asset('pic/logo.png')}}" width="180" class="mt-5" alt="tes"></span>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-7 mt-5 login-img ">
						<img src="{{asset('image/ilustrasi/login.svg')}}" width="500" class="mt-5 col-sm-7" alt="tes" />
					</div>
					<div class="col-md-5 login-form col-sm-5">
						<div class="card mt-5 shadow">
							<div class="card-body">
								<h2 class="card-title">Login</h2>
								<a  class="btn btn-light btn-block btn-login" href="{{ url('auth/google') }}"><img src="image/logo/google.svg" alt="google" width="24" /> Login with Google</a>
								<a  class="btn btn-light btn-block btn-login" href="#"><img src="image/logo/facebook.svg" alt="fb" width="24" /> Login with Facebook</a>
								<a  class="btn btn-light btn-block btn-login" href="#"><img src="image/logo/apple.svg" alt="apple" width="20" /> Login with Apple</a>
								<h6 class="card-text mx-auto">Masuk dengan akun NgeKos</h6>
								<form method="POST" action="{{ route('login') }}">
									@csrf
									<div class="form-group">
										<label for="email">{{ __('E-Mail Address') }}</label>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
									</div>
									<div class="form-group">
										<label for="password">{{ __('Password') }}</label>
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
									</div>
									<div class="form-group form-check">
										<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
									</div>
									<button type="submit" class="btn btn-light btn-block btn-login">{{ __('Login') }}</button>
								</form>
								<h6>Belum Punya Akun? <a href="{{ route('register') }}">Register</a></h6>
								<h6>@if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	</body>
</html>