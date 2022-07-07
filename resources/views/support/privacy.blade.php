@extends('layouts.app')

@section('content')
		<!-- Content -->
		<div class="container">
			<div class="row mb-2">
				<h1>Privacy Policy Untuk NgeKost</h1>
			</div>
			<div class="row">
				<div class="head">
					<p>
						Di NgeKost, dapat diakses dari NgeKos.com, salah satu prioritas utama kami adalah privasi pengunjung kami. Dokumen Kebijakan Privasi ini berisi jenis informasi yang dikumpulkan dan dicatat oleh NgeKost.com dan bagaimana kami
						menggunakannya.
					</p>
					<p>Jika Anda memiliki pertanyaan tambahan atau memerlukan informasi lebih lanjut tentang Kebijakan Privasi kami, jangan ragu untuk menghubungi kami.</p>
				</div>
			</div>
			<div class="row">
				<h4>A. Informasi yang Kami Kumpulkan</h4>
				<p>
					NgeKost.com mengikuti prosedur standar menggunakan file log. File-file ini mencatat pengunjung ketika mereka mengunjungi situs web. Semua perusahaan hosting melakukan ini dan merupakan bagian dari analisis layanan hosting.
					Informasi yang dikumpulkan oleh file log termasuk alamat protokol internet (IP), jenis browser, Penyedia Layanan Internet (ISP), tanggal dan waktu, halaman rujukan/keluar, dan mungkin jumlah klik. Ini tidak terkait dengan
					informasi apa pun yang dapat diidentifikasi secara pribadi. Tujuan informasi adalah untuk menganalisis tren, mengelola situs, melacak pergerakan pengguna di situs web, dan mengumpulkan informasi demografis.
				</p>
			</div>
			<div class="row">
				<h4>B. Cookies</h4>
				<p>
					Seperti situs web lainnya, NgeKost.com menggunakan ‘cookie’. Cookie digunakan untuk menyimpan informasi seperti preferensi pengunjung dan halaman yang diakses atau dikunjungi pengunjung pada situs web ini. Informasi tersebut kami
					gunakan untuk mengoptimalkan pengalaman pengguna dengan menyesuaikan konten halaman web kami.
				</p>
			</div>
			<div class="row">
				<h4>C. Kebijakan Privasi Pihak Ketiga</h4>
				<p>
					Kebijakan Privasi NgeKost.com tidak berlaku untuk pengiklan atau situs web lain. Karena itu, kami menyarankan Anda untuk membaca seksama masing-masing Kebijakan Privasi dari pihak ketiga untuk informasi yang lebih rinci. Anda
					berhak untuk menonaktifkan cookies pada browser Anda.
				</p>
			</div>
			<div class="row">
				<h4>D. Informasi Anak</h4>
				<p>Salah satu prioritas kami adalah membantu perlindungan untuk anak-anak saat menggunakan internet. Kami mendorong orang tua dan wali untuk mengamati, berpartisipasi, memantau, dan membimbing aktivitas online mereka.</p>
				<p>
					NgeKost.com tidak dengan sengaja mengumpulkan informasi identifikasi pribadi apa pun dari anak-anak di bawah umur. Jika menurut Anda anak Anda memberikan informasi semacam ini di situs web kami, kami sangat menganjurkan Anda untuk
					segera menghubungi kami dan kami akan melakukan upaya terbaik kami untuk segera hapus informasi tersebut dari catatan kami.
				</p>
			</div>
			<div class="row">
				<h4>E. Persetujuan</h4>
				<p>Dengan menggunakan situs web kami, Anda dengan ini menyetujui Kebijakan Privasi kami dan menyetujui syarat dan ketentuannya.</p>
			</div>
		</div>
		<br /><br /><br /><br /><br /><br /><br /><br />

		<!-- End Of Content -->

		<!-- Footer -->
		<footer class="footer mt-5">
			<div class="container">
				<div class="row">
					<div class="footer-col">
						<h4>NgeKost</h4>
						<ul>
							<li><a href="#">Tentang Kami</a></li>
							<li><a href="{{url('support/help')}}">Pusat Bantuan</a></li>
						</ul>
					</div>
					<div class="footer-col">
						<h4>Kebijakan</h4>
						<ul>
							<li><a href="{{url('support/help')}}">Kebijakan Privasi</a></li>
						</ul>
					</div>
					<div class="footer-col">
						<h4>Hubungi Kami</h4>
						<ul>
							<li>
								<a href="#"><img src="{{asset('css2/image/logo/Gmail_white.svg')}}" alt="" width="30px" /> Admin@Ngekos.co.id</a>
							</li>
							<li>
								<a href="#"><img src="{{asset('css2/image/logo/whatsapp-logo.svg')}}" alt="" width="40px" />(+62) 853 3344 5566</a>
							</li>
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
						<small>
							&copy; 2022, Hak Cipta Dilindungi Oleh Undang - Undang <a href="#"><u>NgeKos</u></a>
						</small>
					</div>
				</div>
			</div>
		</footer>
		<!-- End of Footer -->
@endsection
