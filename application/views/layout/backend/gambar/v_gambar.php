<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> <?= $title ?></h4>
		<!-- Bootstrap Dark Table -->
		<div class="card">
			<h5 class="card-header">Gambar Produk</h5>
			<div class="table-responsive text-nowrap">
				<table class="table table-dark">
					<thead>
						<tr>
							<th>Nama Barang</th>
							<th>Cover</th>
							<th>Gambar</th>
							<th>Jumlah Gambar</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody class="table-border-bottom-0">
						<?php foreach ($gambar as $key => $value) { ?>
							<tr>
								<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $value->nama_produk ?></strong></td>
								<td>
									<ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
										<li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
											<img src="<?= base_url('assets/gambar/' . $value->images) ?>" alt="Avatar" class="rounded-circle" />
										</li>
									</ul>
								</td>
								<td>
									<ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
										<li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
											<img src="<?= base_url('assets/gambarproduk/' . $value->img) ?>" alt="Avatar" class="rounded-circle" />
										</li>
									</ul>
								</td>
								<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $value->total_gambar ?></strong></td>
								<td>
									<div class="dropdown">
										<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
											<i class="bx bx-dots-vertical-rounded"></i>
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="<?= base_url('gambar/add/' . $value->id_produk) ?>"><i class="bx bx-edit-alt me-1"></i> Tambah Gambar</a>
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