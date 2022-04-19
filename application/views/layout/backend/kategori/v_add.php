<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> <?= $title ?></h4>
		<!-- Basic with Icons -->
		<div class="col-xxl">
			<div class="card mb-4">
				<div class="card-header d-flex align-items-center justify-content-between">
					<h5 class="mb-0">Basic with Icons</h5>
					<small class="text-muted float-end">Merged input group</small>
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
					echo form_open_multipart('kategori/add') ?>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Kategori</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
								<input type="text" class="form-control" id="basic-icon-default-fullname" name="nama_kategori" value="<?= set_value('nama_kategori') ?>" required placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 form-label" for="basic-icon-default-phone">Gambar Produk</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-image"></i></span>
								<input class="form-control" type="file" id="preview_gambar" name="gambar" required />
							</div>
						</div>
					</div>
					<div class="row justify-content-end">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Send</button>
						</div>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- / Content -->
