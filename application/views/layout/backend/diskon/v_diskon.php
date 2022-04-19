<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> <?= $title ?></h4>
		<!-- Bootstrap Table with Header - Dark -->
		<div class="card">
			<h5 class="card-header"><a href="<?= base_url('diskon/add') ?>" class="btn btn-primary">
					Tambah Diskon
				</a>
			</h5>
			<div class="table-responsive text-nowrap">
				<table class="table">
					<thead class="table-dark">
						<tr>
							<th>No</th>
							<th>Nama Produk</th>
							<th>Nama Diskon</th>
							<th>Diskon</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody class="table-border-bottom-0">
						<?php $no = 1;
						foreach ($diskon as $key => $value) { ?>
							<tr>
								<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++ ?></strong></td>
								<td><?= $value->nama_produk ?></td>
								<td><?= $value->nama_diskon ?></td>
								<td>Rp. <?= number_format($value->diskon, 0) ?></td>
								<td>
									<div class="dropdown">
										<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
											<i class="bx bx-dots-vertical-rounded"></i>
										</button>
										<div class="dropdown-menu">
											<!-- <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $value->id_diskon ?>">
												<i class="bx bx-edit-alt me-1"></i>
												Edit
											</button> -->
											<button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalDelete<?= $value->id_diskon ?>">
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

<?php foreach ($diskon as $key => $value) { ?>
	<div class="modal fade" id="modalDelete<?= $value->id_diskon ?>" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalToggleLabel">Hapus Diskon</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">Apakah Anda Yakin Akan Hapus Kategori <?= $value->nama_diskon ?> ?</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
						Close
					</button>
					<a href="<?= base_url('diskon/delete/' . $value->id_diskon) ?>" class="btn btn-primary">Delete</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
