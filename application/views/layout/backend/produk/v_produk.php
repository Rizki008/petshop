<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> <?= $title ?></h4>
		<!-- Bootstrap Dark Table -->
		<div class="card">
			<h5 class="card-header"><a class="btn btn-info" href="<?= base_url('produk/add') ?>"><i class="bx bx-plus-alt me-1"></i> Tambah Produk</a></h5>
			<div class="table-responsive text-nowrap">
				<table class="table table-dark">
					<thead>
						<tr>
							<th>Nama Produk</th>
							<th>Kategori</th>
							<th>Gambar</th>
							<th>Harga</th>
							<th>Berat</th>
							<th>Stock</th>
							<th>Deskripsi</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody class="table-border-bottom-0">
						<?php foreach ($produk as $key => $value) { ?>
							<tr>
								<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $value->nama_produk ?></strong></td>
								<td><?= $value->nama_kategori ?></td>
								<td>
									<ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
										<li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
											<img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="Avatar" class="rounded-circle" />
										</li>
									</ul>
								</td>
								<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Rp. <?= number_format($value->harga, 0) ?></strong></td>
								<td><span class="badge bg-label-primary me-1"><?= $value->berat ?></span></td>
								<td><span class="badge bg-label-primary me-1"><?= $value->stock ?></span></td>
								<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $value->deskripsi ?></strong></td>
								<td>
									<div class="dropdown">
										<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
											<i class="bx bx-dots-vertical-rounded"></i>
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="<?= base_url('produk/update/' . $value->id_produk) ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
											<button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#Delete<?= $value->id_produk ?>">
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
		<!--/ Bootstrap Dark Table -->
		<hr class="my-5" />
	</div>
</div>

<?php foreach ($produk as $key => $value) { ?>
	<div class="modal fade" id="Delete<?= $value->id_produk ?>" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalToggleLabel">Hapus Propduk</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">Apakah Anda Yakin Akan Hapus Kategori <?= $value->nama_produk ?> ?</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
						Close
					</button>
					<a href="<?= base_url('produk/delete/' . $value->id_produk) ?>" class="btn btn-primary">Delete</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
