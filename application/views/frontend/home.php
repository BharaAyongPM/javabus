<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>JAVABUS</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">
	<?php $this->load->view('frontend/include/base_css'); ?>


</head>


<body>
	<?php $this->load->view('frontend/header'); ?>
	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

			<div class="carousel-inner" role="listbox">

				<!-- Slide 1 -->
				<div class="carousel-item active" style="background-image: url(assets/img/slide/a.jpg)">
					<div class="carousel-container">
						<div class="container">
							<h2 class="animate__animated animate__fadeInDown">Selamat datang di <span>JAVABUS</span></h2>
							<p class="animate__animated animate__fadeInUp">Sekarang cari tiket bus semakin mudah, bisa pesan online di Tiket Javabus. Tak perlu repot ke terminal atau kantor agen, sekarang Anda bisa beli tiket dengan mudah. Booking Cepat dan Mudah. Bebas Pilih Kursi. Termurah Setiap Hari. Customer Service 24/7. Semua Kelas dan Rute.</p>
							<a href="<?php echo base_url() ?>tiket" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pesan Tiket</a>
						</div>
					</div>
				</div>

				<!-- Slide 2 -->
				<div class="carousel-item" style="background-image: url(assets/img/slide/b.jpg)">
					<div class="carousel-container">
						<div class="container">
							<h2 class="animate__animated animate__fadeInDown">PESAN TIKET BUS ONLINE BERSAMA JAVABUS INDONESIA!</h2>
							<p class="animate__animated animate__fadeInUp">Javabus adalah jasa pemesanan tiket bis secara online terbesar di dunia. Telah dipercaya lebih dari 25 juta pelanggan secara global.</p>
							<a href="<?php echo base_url() ?>tiket" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pesan Tiket</a>
						</div>
					</div>
				</div>

				<!-- Slide 3 -->
				<div class="carousel-item" style="background-image: url(assets/img/slide/c.jpg)">
					<div class="carousel-container">
						<div class="container">
							<h2 class="animate__animated animate__fadeInDown">Tiket Bus Kusus Pulau Jawa</h2>
							<p class="animate__animated animate__fadeInUp">redBus menawarkan pemesanan tiket bis melalui website, iOS dan aplikasi android untuk rute-rute utama di pulau jawa</p>
							<a href="<?php echo base_url() ?>tiket" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pesan Tiket</a>
						</div>
					</div>
				</div>

			</div>

			<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
			</a>

			<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
			</a>

		</div>
	</section><!-- End Hero -->

	<main id="main">

		<!-- ======= Services Section ======= -->
		<section class="service-area section-gap relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">

				<div class="row d-flex justify-content-center">
					<div class="col-md-8 pb-40 header-text">
						<h1>CARA PEMESANAN TIKET BIS</h1>
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-service" ,>

								<img class="img-fluid" src="<?php echo base_url() ?>assets/img/service/a1.png" width="100" height="100" alt="">
								<h4>Pilih rincian perjalanan
								</h4>
								<p>
									Masukkan tempat keberangkatan, tujuan, tanggal perjalanan dan kemudian klik 'Cari'
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/img/service/a3.png" width="100" height="100" alt="">
								<h4>Pilih bis dan tempat duduk anda</h4>
								<p>
									Pilih bis, tempat duduk, tempat keberangkatan, tujuan, isi rincian penumpang dan klik 'Pembayaran'
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/img/service/a2.png" width="100" height="100" alt="">
								<h4>Cara Pembayaran yang Mudah</h4>
								<p>
									Pembayaran dapat dilakukan melalui transfer ATM, Internet banking.
								</p>
							</div>
						</div>

					</div>

				</div>
		</section><!-- End Services Section -->


		<!-- ======= Our Clients Section ======= -->
		<section id="clients" class="clients">
			<div class="container">

				<div class="section-title">
					<h2>PERUSAHAAN MITRA</h2>
					<p>Perusahaan Oto Bis yang telah bekerja sama dengan Javabus</p>
				</div>

				<div class="clients-slider swiper">
					<div class="swiper-wrapper align-items-center">
						<div class="swiper-slide"><img src="assets/img/logobus/logo1.png" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="assets/img/logobus/logo2.png" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="assets/img/logobus/logo3.png" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="assets/img/logobus/logo4.png" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="assets/img/logobus/logo5.png" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="assets/img/logobus/logo6.png" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="assets/img/logobus/logo7.png" class="img-fluid" alt=""></div>
						<div class="swiper-slide"><img src="assets/img/logobus/logo8.png" class="img-fluid" alt=""></div>
					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>
		</section><!-- End Our Clients Section -->

		<section id="services" class="services">
			<div class="container">

				<div class="section-title">
					<h2>Kelebihan Layanan Kami</h2>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
						<div class="icon-box iconbox-blue">
							<div class="icon">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/img/service/a4.png" width="100" height="100" alt="">
							</div>
							<h4><a href="">Tanpa Biaya Tambahan</a></h4>
							<p>Pesan tiket bis anda dengan harga terbaik</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
						<div class="icon-box iconbox-orange ">
							<div class="icon">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/img/service/a5.png" width="100" height="100" alt="">
							</div>
							<h4><a href="">Pembayaran Online yang Aman dan Nyaman</a></h4>
							<p>Bayar tiket online anda dengan cara yang aman dan nyaman</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
						<div class="icon-box iconbox-pink">
							<div class="icon">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/img/service/a6.png" width="100" height="100" alt="">
							</div>
							<h4><a href="">Pilih Tempat Duduk Yang Anda Inginkan</a></h4>
							<p>Pesan tempat duduk sesuai pilihan anda</p>
						</div>
					</div>



				</div>

			</div>
		</section>


		<!-- ======= Team Section ======= -->
		<section id="team" class="team section-bg">
			<div class="container">

				<div class="section-title">
					<h2>VIA TOL TRANSJAWA</h2>
					<h3>JAKARTA - SEMARANG - SOLO - WONOGIRI - MALANG</h3>
				</div>


			</div>

			</div>
		</section><!-- End Team Section -->



	</main><!-- End #main -->
	<?php $this->load->view('frontend/footer'); ?>
</body>

</html>
