<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

		<link rel="stylesheet" href="{{asset('css2/styles/pusat-bantuan-style.css')}}" />
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

		<title>Pusat Bantuan | NgeKos</title>
	</head>
	<body>
		<!-- Navbar -->
		<div class="header">
			<div class="menu-bar mb-5">
				<nav class="navbar navbar-expand-lg navbar-light bg-transparant d-flex flex-row-reverse person">
					<a class="navbar-brand" href="#"><img src="image/ilustrasi/person-circle.svg" alt="" width="30px" /></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="{{url('/home')}}">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{url('/support/privacy')}}">Kebijakan Privasi</a>
							</li>
							<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Notifikasi <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <p class="dropdown-item">
                                       tidak ada notifikasi
									</p>
                                </div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- end of Navbar -->

		<!-- Content -->
		<div class="container">
			<div class="row mb-4">
				<h1>Hai, Ada Yang Bisa Kami Bantu?</h1>
			</div>
			<div class="row mb-5">
				<form action="" class="search-bar">
						<img src="image/ilustrasi/Icon-MagnifyingGlass.svg" alt="" />
						<input type="text" placeholder="Masukkan apa yang ingin Anda cari" name="q" />
						<button class="btn btn-secondary my-2 my-sm-0  mr-3 type="submit">Cari</button>
				</form>
				
			</div>
			<div class="row mb-4">
				<h1>Paling Sering Ditanyakan</h1>
			</div>
			<div class="row mb-4 faq">
				<div class="col-md-4">
					<div class="faq-header">
						<img src="image/ilustrasi/feature_search_outline_icon_139039 1.svg" alt="" width="20px">
						<span>Fitur dan Layanan Lain</span>
					</div>
					<h6>Bagaimana Pencari Kost menghubungi Pemilik Kost?</h6>
				</div>
				
				<div class="col-md-4">
					<div class="faq-header">
						<img src="image/ilustrasi/person-circle.svg" alt="" width="20px">
						<span>Akun Pemilik Kos</span>
					</div>
					<h6>Bagaimana cara mengelola notifikasi akun pemilik yang dikirimkan untuk saya?</h6>
				</div>
				<div class="col-md-4">
					<div class="faq-header">
						<img src="image/ilustrasi/person-circle.svg" alt="" width="20px">
						<span>Akun Pemilik Kos</span>
					</div>
					<h6>Cara mengganti password akun penyewa</h6>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-4">
					<div class="faq-header">
						<img src="image/ilustrasi/person-circle.svg" alt="" width="20px">
						<span>Akun Pencari Kos</span>
					</div>
					<h6>Bagaimana cara mengubah password akun penyewa</h6>
				</div>
				<div class="col-md-4">
					<div class="faq-header">
						<img src="image/ilustrasi/person-circle.svg" alt="" width="20px">
						<span>Akun Pencari Kos</span>
					</div>
					<h6>Bagaimana jika saya ingin membatalkan penyewaan yang saya sudah DP?</h6>
				</div>
				<div class="col-md-4">
					<div class="faq-header">
						<img src="image/ilustrasi/person-circle.svg" alt="" width="20px">
						<span>Akun Pencari Kos</span>
					</div>
					<h6>Bagaimana agar transaksi kita tetap aman?</h6>
				</div>
			</div>
			<div>
				<br><br><br><br><br><br>
			</div>
		</div>
		<!-- End Of Content -->

		<!-- Footer -->
		<footer class="footer mt-5">
			<div class="container">
				<div class="row">
					<div class="footer-col">
						<h4>NgeKos</h4>
						<ul>
							<li><a href="#">Tentang Kami</a></li>
							<li><a href="pusat-bantuan.html">Pusat Bantuan</a></li>
						</ul>
					</div>
					<div class="footer-col">
						<h4>Kebijakan</h4>
						<ul>
							<li><a href="kebijakan-privasi.html">Kebijakan Privasi</a></li>
						</ul>
					</div>
					<div class="footer-col">
						<h4>Hubungi Kami</h4>
						<ul>
							<li><a href="#"><img src="image/logo/Gmail_white.svg" alt="" width="30px"> Admin@Ngekos.co.id</a></li>
							<li><a href="#"><img src="image/logo/whatsapp-logo.svg" alt="" width="40px">(+62) 853 3344 5566</a></li>
						</ul>
					</div>
					<div class="footer-col">
						<h4>follow us</h4>
						<div class="social-links">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
					<div class="">
						<div class="">
							<small> &copy; 2022, Hak Cipta Dilindungi Oleh Undang - Undang <a href="#"><u>NgeKos</u></a> </small>
						</div>
					</div>
			</div>
	   </footer>
	   <!-- End of Footer -->

		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	</body>
</html>
