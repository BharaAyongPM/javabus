<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/elements/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Daftar Bus</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
	<?php $this->load->view('frontend/include/base_css'); ?>
</head>

<body>
	<!-- navbar -->
	<?php $this->load->view('frontend/header'); ?>
	<!-- Begin Page Content -->
	<section class="generic-banner">
		<div class="container-fluid">
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">

				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Bus</th>
									<th>Nama Bus</th>
									<th>Plat Bus</th>
									<th>Kapasitas Kursi</th>

								</tr>
							</thead>
							<tbody>
								<?php $i = 1;
								foreach ($bus as $row) { ?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo strtoupper($row['kd_bus']); ?></td>
										<td><?php echo strtoupper($row['nama_bus']); ?></td>
										<td><?php echo strtoupper($row['plat_bus']); ?></td>
										<td><?php echo $row['kapasitas_bus'] ?></td>

									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
	</section>
	<!-- /.container-fluid -->
	</div>
	<!-- /.container-fluid -->
	</div>

	<?php $this->load->view('frontend/footer'); ?>

</body>

</html>
