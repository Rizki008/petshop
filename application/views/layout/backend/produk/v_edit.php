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
					echo form_open_multipart('produk/update/' . $produk->id_produk) ?>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Produk</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
								<input type="text" class="form-control" id="basic-icon-default-fullname" name="nama_produk" value="<?= $produk->nama_produk ?>" required placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-icon-default-company">Kategori Produk</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
								<select class="form-select" id="exampleFormControlSelect1" name="id_kategori" aria-label="Default select example" required>
									<option value="<?= $produk->id_kategori ?>"><?= $produk->nama_kategori ?></option>
									<?php foreach ($kategori as $key => $value) { ?>
										<option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label" for="basic-icon-default-email">Berat Produk</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-money"></i></span>
								<input type="number" id="basic-icon-default-phone" class="form-control phone-mask" name="berat" value="<?= $produk->berat ?>" required placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 form-label" for="basic-icon-default-phone">Harga Produk</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-money"></i></span>
								<input type="text" id="basic-icon-default-phone" class="form-control phone-mask" name="harga" value="<?= $produk->harga ?>" required placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 form-label" for="basic-icon-default-phone">Stock Produk</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-money"></i></span>
								<input type="text" id="basic-icon-default-phone" class="form-control phone-mask" name="stock" value="<?= $produk->stock ?>" required placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 form-label" for="basic-icon-default-message">Deskripsi</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
								<textarea id="basic-icon-default-message" class="form-control" name="deskripsi" required placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"><?= $produk->deskripsi ?></textarea>
							</div>
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 form-label" for="basic-icon-default-phone">Gambar Produk</label>
						<div class="col-sm-10">
							<div class="input-group input-group-merge">
								<span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-image"></i></span>
								<input class="form-control" type="file" id="preview_gambar" name="gambar" />
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

<script>
	function bacaGambar(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#gambar_load').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#preview_gambar").change(function() {
		bacaGambar(this);
	});
</script>
