<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
		<link rel="stylesheet" href="{{asset('styles/style.css')}}" />

		<title>Login | NgeKos</title>
	</head>
	<body>
		<div class="background">
			<div class="container">
				<div class="row logo">
					<div class="mx-auto mt-5">
						<h1>Logo</h1>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-7 mt-5 login-img">
						<img src="image/ilustrasi/login.svg" width="500" class="mt-5" alt="" />
					</div>
					<div class="col-md-5 login-form">
						<div class="card mt-5 shadow">
							<div class="card-body">
								<h2 class="card-title">Login</h2>
								<button type="submit" class="btn btn-light btn-block btn-login"><img src="image/logo/google.svg" alt="" width="24" /> Login with Google</button>
								<button type="submit" class="btn btn-light btn-block btn-login"><img src="image/logo/facebook.svg" alt="" width="24" /> Login with Facebook</button>
								<button type="submit" class="btn btn-light btn-block btn-login"><img src="image/logo/apple.svg" alt="" width="20" /> Login with Apple</button>
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
								<h6>Belum Punya Akun? <a href="#">Register</a></h6>
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
