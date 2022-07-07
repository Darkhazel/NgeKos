<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
		<link rel="stylesheet" href="{{asset('css2/styles/style.css')}}" />

		<title>Register | NgeKos</title>
	</head>
	<body>
		<div class="background">
			<div class="container">
				<div class="row logo">
					<div class="mx-auto mt-5">
						<h1 style="color: white">Register</h1>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-6 register-form">
						<div class="card mt-5 shadow">
							<div class="card-body">
								<h2 class="register">
									<a href="login.html"><img src="{{asset('css2/image/ilustrasi/arrow-left-short.svg')}}" alt="" width="50px" /></a> Daftar Akun Pencari Kost
								</h2>
								<form method="POST" action="{{ route('register') }}">
									@csrf
									<div class="form-group">
										<label for="name">Nama Lengkap</label>
										<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
										@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="form-group">
										<label for="telp">Nomor Telepon</label>
										<input id="telp" type="tel" class="form-control @error('name') is-invalid @enderror" name="telp" value="{{ old('telp') }}" required autocomplete="telp" autofocus>
										@error('telp')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="form-group">
										<label for="email">Email address</label>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
										@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<div class="input-group mb-3">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
											<div class="input-group-append">
												<button class="btn" type="button" id="eye" onclick="showPass()"><img src="{{asset('css2/image/ilustrasi/eye-slash-fill.svg')}}" alt="" width="20px" id="mata"></button>
											</div>
											@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Ulangi Password</label>
										<div class="input-group mb-3">
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
											<div class="input-group-append">
												<button class="btn" type="button" id="eye1" onclick="showPass1()"><img src="{{asset('css2/image/ilustrasi/eye-slash-fill.svg')}}" alt="" width="20px" id="mata1"></button>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-light btn-block btn-login">{{ __('Register') }}</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-6 mt-5 register-img">
						<img src="{{asset('css2/image/ilustrasi/regristasi.svg')}}" width="500" class="mt-5" alt="" />
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	</body>
	<script>
		function showPass() {
			var x = document.getElementById("password");
			
			if (x.type === "password") {
				x.type = "text";
			}else{
				x.type = "password";
			}
			
		}
		function showPass1() {
			var y = document.getElementById("password-confirm");
			if(y.type === "password") {
				y.type = "text";
			}else{
				y.type = "password";
			}
		}
	</script>
</html>
