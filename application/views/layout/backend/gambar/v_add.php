<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> <?= $title ?></h4>

		<!-- Basic Layout -->
		<div class="row">
			<div class="col-xl">
				<div class="card mb-4">
					<div class="card-header d-flex justify-content-between align-items-center">
						<h5 class="mb-0">Gambar Produk <?= $produk->nama_produk ?></h5>
						<small class="text-muted float-end">Default label</small>
					</div>
					<div class="card-body">
						<?php
						echo validation_errors(
							' <div class="alert alert-danger alert-dismissible" role="alert">',
							'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>'
						);
						if (isset($error_upload)) {
							echo ' <div class="alert alert-danger alert-dismissible" role="alert">
						' . $error_upload . '
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>';
						}
						echo form_open_multipart('') ?>

						<div class="mb-3">
							<label class="form-label" for="basic-default-email">Keterangan Gambar</label>
							<div class="input-group input-group-merge">
								<input type="text" id="basic-default-email" name="keterangan" value="<?= set_value('keterangan') ?>" class="form-control" placeholder="Nama Gambar" aria-label="Nama Gambar" aria-describedby="basic-default-email2" />
							</div>
						</div>
						<!-- <div class="mb-3">
							<label class="form-label" for="basic-default-company">Keterangan Gambar</label>
							<input type="text" class="form-control" name="keterangan" value="<?= set_value('keterangan') ?>" id="basic-default-company" placeholder="Ketarangan Gambar" />
						</div> -->
						<div class="col-sm-4">
							<div class="form-group">
								<label>Gambar Produk</label>
								<input type="file" name="img" class="form-control" id="preview_gambar" required>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<img src="<?= base_url('assets/gambarproduk/nopoto.jpg') ?>" id="gambar_load" width="200px">
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Send</button>
						<a href="<?= base_url('gambar') ?>" class="btn btn-warning">Kembali</a>
						<?php echo form_close() ?>
						<hr>
						<?php foreach ($gambar as $key => $value) { ?>
							<div class="col-sm-3">
								<div class="form-group">
									<img src="<?= base_url('assets/gambarproduk/' . $value->img) ?>" id="gambar_load" width="250px" height="200px">
								</div>
								<p for="">Keterangan : <?= $value->keterangan ?></p>
								<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Delete<?= $value->id_gambar ?>">
									<i class="bx bx-trash me-1"></i>
									Delete
								</button>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php foreach ($gambar as $key => $value) { ?>
	<div class="modal fade" id="Delete<?= $value->id_gambar ?>" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalToggleLabel">Hapus Gambar <?= $value->keterangan ?></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">Apakah Anda Yakin Akan Hapus Gambar <?= $value->keterangan ?> ?</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
						Close
					</button>
					<a href="<?= base_url('gambar/delete/' . $value->id_produk . '/' . $value->id_gambar) ?>" class="btn btn-danger">Delete</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
