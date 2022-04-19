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
					echo form_open('admin/lokasi') ?>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-icon-default-company">Provinsi</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
								<select class="form-select" id="exampleFormControlSelect1" name="provinsi" aria-label="Default select example" required>
								</select>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-icon-default-email">Kota</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-money"></i></span>
								<select class="form-select" id="exampleFormControlSelect1" name="kota" aria-label="Default select example" required>
									<option value="<?= $lokasi->lokasi ?>"><?= $lokasi->lokasi ?></option>
								</select>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-icon-default-email">Nama Toko</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-money"></i></span>
								<input type="text" name="nama_toko" value="<?= $lokasi->nama_toko ?>" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-icon-default-email">No Telpon</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-money"></i></span>
								<input type="text" name="no_tlpn" value="<?= $lokasi->no_tlpn ?>" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-icon-default-email">Alamat</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-money"></i></span>
								<input type="text" name="alamat" value="<?= $lokasi->alamat ?>" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row justify-content-end">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- / Content -->
