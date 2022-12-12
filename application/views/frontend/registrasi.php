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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">

</head>

<?php $this->load->view('frontend/header'); ?>
<section class="service-area section-gap relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-6">
				<!-- Default Card Example -->
				<div class="card ">
					<div class="card-header">
						<i class="fa fa-address-card-o"></i> Daftar
					</div>
					<div class="card-body">
						<form action="<?php echo base_url() ?>login/register" method="post">
							<div class="form-group">
								<div class="form-group">
									<div class="form-label-group">
										<input type="text" name="name" class="form-control" required="" placeholder="Nama Kamu" value="<?php echo set_value('name') ?>">
										<?php echo form_error('name'), '<small class="text-danger pl-3">', '</small>'; ?>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-label-group">
											<input type="text" name="email" class="form-control" required="" placeholder="Email" value="<?php echo set_value('email') ?>">
											<?php echo form_error('email'), '<small class="text-danger pl-3">', '</small>'; ?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-label-group">
											<input type="number" id="nomor" name="nomor" class="form-control" required="" placeholder="Nomor Handphone" value="<?php echo set_value('nomor') ?>">
											<?php echo form_error('nomor'), '<small class="text-danger pl-3">', '</small>'; ?>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="username">Alamat</label>
								<div class="form-label-group">
									<textarea class="form-control" name="alamat"><?php echo set_value('alamat') ?></textarea>
									<?php echo form_error('alamat'), '<small class="text-danger pl-3">', '</small>'; ?>
								</div>
							</div>
							<div class="form-group">
								<div class="form-label-group">
									<input type="text" id="username" name="username" class="form-control" required="" placeholder="Username">
									<?php echo form_error('username'), '<small class="text-danger pl-3">', '</small>'; ?>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="password" class="form-control form-control-user" name="password1" placeholder="Password">
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-user" name="password2" placeholder="Repeat Password">
								</div>
							</div>
							<?php echo form_error('password1'), '<small class="text-danger pl-3">', '</small>'; ?>
							<button class="btn btn-primary btn-block">Daftar</button>
						</form>
						<div class="text-center">
							<a class="d-block small mt-3" href="<?php echo base_url() ?>login">Login Page</a>
							<a class="d-block small" href="forgot-password.html">Lupa Password?</a>
							<br>


						</div>
					</div>
				</div>
			</div>
</section>


<?php $this->load->view('frontend/footer'); ?>
</body>

</html>
