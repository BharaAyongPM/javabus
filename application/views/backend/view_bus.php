<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo $title ?></title>
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		#myImg {
			border-radius: 5px;
			cursor: pointer;
			transition: 0.3s;
		}

		#myImg:hover {
			opacity: 0.7;
		}

		/* The Modal (background) */
		.modal {
			display: none;
			/* Hidden by default */
			position: fixed;
			/* Stay in place */
			z-index: 1;
			/* Sit on top */
			padding-top: 100px;
			/* Location of the box */
			left: 0;
			top: 0;
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: rgb(0, 0, 0);
			/* Fallback color */
			background-color: rgba(0, 0, 0, 0.9);
			/* Black w/ opacity */
		}

		/* Modal Content (image) */
		.modal-content {
			margin: auto;
			display: block;
			width: 80%;
			max-width: 700px;
		}

		/* Caption of Modal Image */
		#caption {
			margin: auto;
			display: block;
			width: 80%;
			max-width: 700px;
			text-align: center;
			color: #ccc;
			padding: 10px 0;
			height: 150px;
		}

		/* Add Animation */
		.modal-content,
		#caption {
			-webkit-animation-name: zoom;
			-webkit-animation-duration: 0.6s;
			animation-name: zoom;
			animation-duration: 0.6s;
		}

		@-webkit-keyframes zoom {
			from {
				-webkit-transform: scale(0)
			}

			to {
				-webkit-transform: scale(1)
			}
		}

		@keyframes zoom {
			from {
				transform: scale(0)
			}

			to {
				transform: scale(1)
			}
		}

		/* The Close Button */
		.close {
			position: absolute;
			top: 15px;
			right: 35px;
			color: #f1f1f1;
			font-size: 40px;
			font-weight: bold;
			transition: 0.3s;
		}

		.close:hover,
		.close:focus {
			color: #bbb;
			text-decoration: none;
			cursor: pointer;
		}

		/* 100% Image Width on Smaller Screens */
		@media only screen and (max-width: 700px) {
			.modal-content {
				width: 100%;
			}
		}
	</style>
	<!-- css -->
	<?php $this->load->view('backend/include/base_css'); ?>
</head>

<body id="page-top">
	<!-- navbar -->
	<?php $this->load->view('backend/include/base_nav'); ?>
	<!-- Begin Page Content -->
	<div class="container-fluid">
		<!-- Page Heading -->
		<!-- Basic Card Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Kode Bus [<?php echo $bus['kd_bus']; ?>] </h6>
			</div>
			<div class="card-body">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<p>Nama BUS : <b> <?php echo $bus['nama_bus'] ?></b></p>
							<p>Plat Bus: <b><?php echo strtoupper($bus['plat_bus']) ?></b></p>
							<p>Kapasitas Kursi : <b><?php echo $bus['kapasitas_bus']; ?> Kursi</b></p>
							<p>Status Bus : <b><?php echo $bus['status_bus'] ?></td>
									<?php if ($bus['status_bus'] == '1') { ?>
										<td class="btn-success"> Online</td>
									<?php } else { ?>
										<td class="btn-danger">Offline</td>
									<?php } ?>
								</b></p>
							<p>Keterengan : <b><?php echo $bus['desc_bus'] ?></b></p>
						</div>
						<div class="col-sm-6">
						</div>
					</div>
					<hr>
					<a class="btn btn-default" href="javascript:history.back()"> Kembali</a>

				</div>
			</div>
		</div>
	</div>
	<!-- End of Main Content -->
	<!-- The Modal -->


	<!-- Footer -->
	<?php $this->load->view('backend/include/base_footer'); ?>
	<!-- End of Footer -->
	<!-- js -->

	<?php $this->load->view('backend/include/base_js'); ?>

</body>

</html>
