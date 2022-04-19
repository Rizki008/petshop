<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
		<!-- Bootstrap Table with Header - Dark -->
		<div class="card">
			<h5 class="card-header"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
					Tambah Kategori
				</button>
			</h5>
			<div class="table-responsive text-nowrap">
				<table class="table">
					<thead class="table-dark">
						<tr>
							<th>No</th>
							<th>Nama Kategori</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody class="table-border-bottom-0">
						<?php $no = 1;
						foreach ($ketegori as $key => $value) { ?>
							<tr>
								<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++ ?></strong></td>
								<td><?= $value->nama_kategori ?></td>
								<td>
									<div class="dropdown">
										<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
											<i class="bx bx-dots-vertical-rounded"></i>
										</button>
										<div class="dropdown-menu">
											<button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $value->id_kategori ?>">
												<i class="bx bx-edit-alt me-1"></i>
												Edit
											</button>
											<button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalDelete<?= $value->id_kategori ?>">
												<i class="bx bx-trash me-1"></i>
												Delete
											</button>
										</div>
									</div>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<!--/ Bootstrap Table with Header Dark -->
	</div>
</div>

<hr class="my-5" />

<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalCenterTitle">Tambah kategori Produk</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<?php echo form_open('kategori/add') ?>
			<div class="modal-body">
				<div class="row">
					<div class="col mb-3">
						<label for="nameWithTitle" class="form-label">Nama Kategori</label>
						<input type="text" id="nameWithTitle" name="nama_kategori" class="form-control" placeholder="Enter Nama Kategori" required />
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
					Close
				</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			<?php echo form_close() ?>
		</div>
	</div>
</div>


<?php foreach ($ketegori as $key => $value) { ?>
	<div class="modal fade" id="modalEdit<?= $value->id_kategori ?>" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalCenterTitle">Tambah kategori Produk</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<?php echo form_open('kategori/update/' . $value->id_kategori) ?>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Nama Kategori</label>
							<input type="text" id="nameWithTitle" name="nama_kategori" value="<?= $value->nama_kategori ?>" class="form-control" placeholder="Enter Nama Kategori" required />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
<?php } ?>

<?php foreach ($ketegori as $key => $value) { ?>
	<div class="modal fade" id="modalDelete<?= $value->id_kategori ?>" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalToggleLabel">Hapus Kategori</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">Apakah Anda Yakin Akan Hapus Kategori <?= $value->nama_kategori ?> ?</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
						Close
					</button>
					<a href="<?= base_url('kategori/delete/' . $value->id_kategori) ?>" class="btn btn-primary">Delete</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
