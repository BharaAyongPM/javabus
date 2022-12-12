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
	<section class="generic-banner">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="col-lg-5">
					<div class="card card-login mx-auto mt-10">
						<div class="card-header">Login</div>
						<div class="card-body" align="left">
							<?php echo $this->session->flashdata('pesan'); ?>
							<form action="<?php echo base_url() ?>login/cekuser" method="post">
								<div class="form-group">
									<div class="form-label-group">
										<input type="text" id="username" name="username" class="form-control" placeholder="username" required="required" autofocus="autofocus">
									</div>
								</div>
								<div class="form-group">
									<div class="form-label-group">
										<input type="password" name="password" class="form-control" placeholder="Password" required="required">
									</div>
								</div>
								<div class="form-group">
									<div class="checkbox">
										<label>
											<input type="checkbox" value="remember-me">
											Remember Password
										</label>
									</div>
								</div>
								<button class="btn btn-primary btn-block">Masuk</button>
							</form>
							<div class="text-center">
								<a class="d-block small mt-3" href="<?php echo base_url() ?>login/daftar">Daftar</a>
								<a class="d-block small" href="<?php echo base_url() ?>login/lupapassword">Lupa Password</a>
								<br>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- start footer Area -->
	<?php $this->load->view('frontend/footer'); ?>
</body>

</html>
