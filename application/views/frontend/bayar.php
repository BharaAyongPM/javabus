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
	<center>
		<tr>
			<td colspan="2">
				<p style="text-align: justify; padding: 10px;">
					Javabus<br>
					Terima kasih telah menggunakan JAVABUS.
				</p>
				<p style="text-align: justify; padding: 10px;">
					Berikut Ringkasan Pembelian Anda:
				<table width="100%" style="font-size: 14px; margin: 10px;">
					<tr>
						<td>
							Manual Transfer Nomor Rekening
						</td>
						<td>:</td>
						<td>
							<strong><?php echo $data['nomrek_bank']; ?></strong>
						</td>
					</tr>
					<tr>
						<td>
							Atas Nama
						</td>
						<td>:</td>
						<td>
							<strong><?php echo $data['nasabah_bank']; ?></strong>
						</td>
					</tr>
					<tr>
						<td>
							Bank Penerima
						</td>
						<td>:</td>
						<td>
							<strong><?php echo $data['nama_bank']; ?></strong>
						</td>
					</tr>
					<tr>
						<td>
							Nominal yang dibayarkan
						</td>
						<td>:</td>
						<td>
							<?php $total = $count['count(kd_order)'] * $data['harga_jadwal'] ?>
							<strong>Rp <?php echo number_format((float)($total), 0, ",", "."); ?></strong>
						</td>
					</tr>
					<tr>
						<td>
							Nomor Order
						</td>
						<td>:</td>
						<td>
							<strong><?php echo $data['kd_order']; ?></strong>
						</td>
					</tr>
					<tr>
						<td>
							Deskprisi Pembelian
						</td>
						<td>:</td>
						<td>
							<strong>Kode Jadwal <?php echo $data['kd_jadwal'] ?></strong><br>
							<strong>Berangkat <?php echo hari_indo(date('N', strtotime($data['tgl_berangkat_order']))) . ', ' . tanggal_indo(date('Y-m-d', strtotime('' . $bayar['tgl_berangkat_order'] . ''))) . ', ' . date('H:i', strtotime($bayar['jam_berangkat_jadwal'])); ?></strong><br>
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
				</p>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<table width="100%">
					<tr>
						<td>
							<div class="col-md-12 col-xs-12">
								<h4>Cara Transfer Melalui</h4>
								<div class="hr hr8 hr-double hr-dotted"></div>
								<div class="row">
									<div class="col-md-4">
										<div style="border:1px solid #fd7521;margin:2px;padding:5px;">
											<center>
												<h4>ATM</h4>
											</center>
											<div class="hr hr8 hr-double hr-dotted"></div>
											<ol style="padding:0;">
												<li>Panduan Bayar</li>
												<li>Pilih Menu <span class="label">Transaksi Lainnya</span></li>
												<li>Pilih <span class="label">Transfer</span></li>
												<li>Pilih <span class="label">Ke rekening <?php echo $data['nama_bank'];; ?> </span></li>
												<li>Input Nomor Rekening <span class="label"><?php echo $data['nomrek_bank']; ?></span></li>
												<li>Pilih <span class="label">Benar</span></li>
												<li>Pilih <span class="label">Ya</span></li>
												<li>Ambil bukti bayar anda</li>
												<li>Selesai</li>
											</ol>
										</div>
									</div>
									<div class="col-md-4">
										<div style="border:1px solid #fd7521;margin:2px;padding:5px;">
											<center>
												<h4>MOBILE BANKING</h4>
											</center>
											<div class="hr hr8 hr-double hr-dotted"></div>
											<ol style="padding:0;">
												<li>Login Mobile Banking</li>
												<li>Pilih <span class="label">m-Transfer</span></li>
												<li>Pilih <span class="label">BCA Rekening</span></li>
												<li>Input Nomor Rekening <span class="label"><?php echo $data['nomrek_bank'] ?></span></li>
												<li>Klik <span class="label">Send</span></li>
												<li>Informasi VA akan ditampilkan</li>
												<li>Klik <span class="label">OK</span></li>
												<li>Input <span class="label">PIN</span></li>
												<li>Mobile Banking</li>
												<li>Bukti bayar ditampilkan</li>
												<li>Selesai</li>
											</ol>
										</div>
									</div>
									<div class="col-md-4">
										<div style="border:1px solid #fd7521;margin:2px;padding:5px;">
											<center>
												<h4>INTERNET BANKING</h4>
											</center>
											<div class="hr hr8 hr-double hr-dotted"></div>
											<ol style="padding:0;">
												<li>Pilih <span class="label">Transaksi Dana</span></li>
												<li>Pilih <span class="label">Transfer Ke BCA Rekening</span></li>
												<li>Input Nomor Rekening <span class="label"><?php echo $bayar['nomrek_bank'] ?></span></li>
												<li></li>
												<li>Klik <span class="label">Lanjutkan</span></li>
												<li>Input Respon <span class="label">KeyBCA Appli 1</span></li>
												<li>Klik <span class="label">Kirim</span></li>
												<li>Bukti bayar ditampilkan</li>
												<li>Selesai</li>
											</ol>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p style="padding:10px;">
					<br>
					Hormat Kami,<br>
					<span style="color:#fd7521;"><strong>Tiket JAVABUS/strong></span>
					<br>
					<br>
				</p>
			</td>
		</tr>
		<tr>

		</tr>
		<tr class="footer" style="font-size: 10px; background-color: #484B51;color:#ffffff;">
			<td style="padding-left:10px; padding-right:10px;">
				<?php echo date("Y"); ?> &copy; Tiket XTRANS
			</td>
			<td align="right" style="padding-left:10px; padding-right:10px;">
				<img height="30" src="https://cdn4.iconfinder.com/data/icons/dot/256/bus.png" border="0">
			</td>
		</tr>
		</table>
	</center>
</body>

</html>
