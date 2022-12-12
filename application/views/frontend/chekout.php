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
	<title>Daftar</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
	<?php $this->load->view('frontend/include/base_css'); ?>
</head>

<body>
	<!-- navbar -->
	<?php $this->load->view('frontend/header'); ?>
	<section class="service-area section-gap relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-7">
					<!-- Default Card Example -->
					<div class="card">
						<div class="card-body" align="center">
							<p class="card-text">PEMBAYARAN </p>
							<p class="card-text">Terima kasih telah menggunakan Javabus</p>
							<p style="text-align: justify; padding: 10px;">
								Berikut Ringkasan Pembelian Anda:
							<table width="100%" style="font-size: 14px; margin: 10px;">
								<tr>
									<td>
										Manual Transfer Nomor Rekening
									</td>
									<td>:</td>
									<td>
										<strong><?php echo $bayar['nomrek_bank']; ?></strong>
									</td>
								</tr>
								<tr>
									<td>
										Atas Nama
									</td>
									<td>:</td>
									<td>
										<strong><?php echo $bayar['nasabah_bank']; ?></strong>
									</td>
								</tr>
								<tr>
									<td>
										Bank Penerima
									</td>
									<td>:</td>
									<td>
										<strong><?php echo $bayar['nama_bank']; ?></strong>
									</td>
								</tr>
								<tr>
									<td>
										Nominal yang dibayarkan
									</td>
									<td>:</td>
									<td>
										<?php $total = $count['count(kd_order)'] * $bayar['harga_jadwal'] ?>
										<strong>Rp <?php echo number_format((float)($total), 0, ",", "."); ?></strong>
									</td>
								</tr>
								<tr>
									<td>
										Nomor Order
									</td>
									<td>:</td>
									<td>
										<strong><?php echo $bayar['kd_order']; ?></strong>
									</td>
								</tr>
								<tr>
									<td>
										Deskprisi Pembelian
									</td>
									<td>:</td>
									<td>
										<strong>Kode Jadwal <?php echo $bayar['kd_jadwal'] ?></strong><br>
										<strong>Berangkat <?php echo hari_indo(date('N', strtotime($bayar['tgl_berangkat_order']))) . ', ' . tanggal_indo(date('Y-m-d', strtotime('' . $bayar['tgl_berangkat_order'] . ''))) . ', ' . date('H:i', strtotime($bayar['jam_berangkat_jadwal'])); ?></strong><br>
										<strong><?php echo $count['count(kd_order)']; ?> Kursi</strong>
									</td>
								</tr>
								<tr>
									<td>
										Tanggal Beli
									</td>
									<td>:</td>
									<td>
										<strong><?php echo $bayar['tgl_beli_order']; ?></strong>
									</td>
								</tr>
								<tr>
									<td>
										Berlaku hingga
									</td>
									<td>:</td>
									<td>
										<strong><?php $expired = hari_indo(date('N', strtotime($bayar['expired_order']))) . ', ' . tanggal_indo(date('Y-m-d', strtotime('' . $bayar['expired_order'] . ''))) . ', ' . date('H:i', strtotime($bayar['expired_order']));
														echo $expired; ?></strong>
									</td>
								</tr>
							</table>

						</div>
						<div class="card-header">
							<i class="fa fa-info-circle"></i> Silahkan Lanjut ke Cek pembayaran
						</div>
						<div class="card-body" align="center">
							<p class="card-text">Kode Pemesanan Tiket :</p>
							<h1 class="card-title"><b><?php echo $tiket; ?></b></h1>
							<p><img src="<?php echo base_url('assets/frontend/upload/qrcode/' . $tiket) ?>.png"></p>
							<a href="<?php echo base_url('assets/frontend/upload/qrcode/' . $tiket) ?>.png" class="btn btn-primary" download>Download QrCode</a>
							<a href="<?php echo base_url('tiket/payment/' . $tiket) ?>" class="btn btn-primary">Cek Pembayaran</a>
							<br>
							<p class="card-text">Mohon Simpan Kode Pemesanan Dan QrCode Anda Untuk Menlanjutkan Proses Pembayaran.</p>
						</div>

					</div>
				</div>
	</section>

	<!-- End banner Area -->
	<!-- start footer Area -->
	<?php $this->load->view('frontend/footer'); ?>
	<!-- js -->
	<?php $this->load->view('frontend/include/base_js'); ?>
</body>

</html>
