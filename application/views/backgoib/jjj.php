<div class="modal fade" id="hapus<?php echo $jadwal->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<form action="<?php echo base_url(); ?>jadwal/hapusjadwal" method="post" enctype="multipart/form-data" <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Hapus jadwal <?php echo $jadwal['kd_jadwal'] ?></h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" <span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<p>Anda yakin mau menghapus ini ?</p>
					<input type="hidden" name="id" required="" value="<?php echo $jadwal['kd_jadwal']; ?>">
				</div>
				<div class="modal-footer">

					<button type="button" class="btn btn-default" data-dismiss="modal"> Tutup</button>
					<button type="submit" class="btn btn-primary">Hapus</button>
				</div>
			</form>
		</div>
	</div>
</div>
