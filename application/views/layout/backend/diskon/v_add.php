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
					echo form_open_multipart('diskon/add') ?>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Diskon</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
								<input type="text" class="form-control" id="basic-icon-default-fullname" name="nama_diskon" value="<?= set_value('nama_diskon') ?>" required placeholder="Hari Raya" aria-label="Hari Raya" aria-describedby="basic-icon-default-fullname2" />
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-icon-default-company">Produk</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
								<select class="form-select" id="exampleFormControlSelect1" name="id_produk" aria-label="Default select example" required>
									<option selected>--Pilih Produk--</option>
									<?php foreach ($produk as $key => $value) { ?>
										<option value="<?= $value->id_produk ?>"><?= $value->nama_produk ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-icon-default-email">Diskon Produk</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-money"></i></span>
								<input type="number" id="basic-icon-default-phone" class="form-control phone-mask" name="diskon" value="<?= set_value('diskon') ?>" required placeholder="20.000" aria-label="20.000" aria-describedby="basic-icon-default-phone2" />
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
