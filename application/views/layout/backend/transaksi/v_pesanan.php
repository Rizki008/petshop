<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span><?= $title ?></h4>

		<!-- Accordion -->
		<h5 class="mt-4"><?= $title ?></h5>
		<div class="row">
			<div class="col-md mb-4 mb-md-0">
				<small class="text-light fw-semibold">Basic <?= $title ?></small>
				<div class="accordion mt-3" id="accordionExample">
					<div class="card accordion-item active">
						<h2 class="accordion-header" id="headingOne">
							<button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
								Pesanan Masuk
							</button>
						</h2>

						<div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<table class="table">
									<tr>
										<th>Nama Pelanggan</th>
										<th>No Order</th>
										<th>Tanggal Order</th>
										<th>Expedisi</th>
										<th>Biaya Pengiriman</th>
										<th>Total Bayar</th>
										<th>Action</th>
									</tr>
									<?php foreach ($pesanan as $key => $value) { ?>
										<tr>
											<td><?= $value->nama_pelanggan ?></td>
											<td>
												<?= $value->no_order ?></a>
											</td>
											<td><?= $value->tgl_order ?></td>
											<td><?= $value->expedisi ?><br><?= $value->paket ?><br><?= $value->estimasi ?></td>
											<td><b>Rp. <?= number_format($value->ongkir, 0) ?></b><br>
											<td><b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
												<?php if ($value->status_bayar == 0) { ?>
													<span class="badge badge-warning">Belum bayar</span>
												<?php } else { ?>
													<span class="badge badge-success">Sudah bayar</span><br>
													<span class="badge badge-primary">Menunggu Verifikasi</span>
												<?php } ?>
											</td>
											<td>
												<?php if ($value->status_bayar == 1) { ?>
													<a href="<?= base_url('admin/detail/' . $value->no_order) ?>" class=" btn btn-sm btn-success btn-flat">Detail Bayar</a>
													<a href=" <?= base_url('admin/proses/' . $value->id_transaksi) ?>" class="btn btn-sm btn-flat btn-primary">Verifikasi</a>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</table>
							</div>
						</div>
					</div>
					<div class="card accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
								Pengiriman
							</button>
						</h2>
						<div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<table class="table">
									<tr>
										<th>Nama Pelanggan</th>
										<th>No Order</th>
										<th>Tanggal Order</th>
										<th>Expedisi</th>
										<th>Biaya Pengiriman</th>
										<th>Total Bayar</th>
										<th>Action</th>
									</tr>
									<?php foreach ($pesanan_diproses as $key => $value) { ?>
										<tr>
											<td><?= $value->nama_pelanggan ?></td>
											<td><a href="<?= base_url('admin/detail/' . $value->no_order) ?>"><?= $value->no_order ?></a></td>
											<td><?= $value->tgl_order ?></td>
											<td><?= $value->expedisi ?><br><?= $value->paket ?><br><?= $value->estimasi ?></td>
											<td><b>Rp. <?= number_format($value->ongkir, 0) ?></b><br>
											<td>
												<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
												<span class="badge badge-primary">Dikemas</span>
											</td>
											<td><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#kirim<?= $value->id_transaksi ?>">
													<i class="bx bx-paper-plane me-1"></i>
													Kirim
												</button></td>
										</tr>
									<?php } ?>
								</table>
							</div>
						</div>
					</div>
					<div class="card accordion-item">
						<h2 class="accordion-header" id="headingThree">
							<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
								Proses Pengiriman
							</button>
						</h2>
						<div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<table class="table">
									<tr>
										<th>Nama Pelanggan</th>
										<th>No Order</th>
										<th>Tanggal Order</th>
										<th>Expedisi</th>
										<th>Alamat</th>
										<th>Biaya Pengiriman</th>
										<th>No Resi</th>
										<th>Total Bayar</th>
									</tr>
									<?php foreach ($pesanan_dikirim as $key => $value) { ?>
										<tr>
											<td><?= $value->nama_pelanggan ?></td>
											<td><?= $value->no_order ?></td>
											<td><?= $value->tgl_order ?></td>
											<td><?= $value->expedisi ?><br><?= $value->paket ?><br><?= $value->estimasi ?></td>
											<td><?= $value->alamat ?></td>
											<td><b>Ongkir : Rp. <?= number_format($value->ongkir, 0) ?></b><br>
											</td>
											<td><?= $value->no_resi ?></td>
											<td>
												<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
												<span class="badge badge-success">Dikirim</span>
											</td>

										</tr>
									<?php } ?>

								</table>
							</div>
						</div>
					</div>
					<div class="card accordion-item">
						<h2 class="accordion-header" id="headingFor">
							<button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFor" aria-expanded="false" aria-controls="accordionFor">
								Selesai
							</button>
						</h2>
						<div id="accordionFor" class="accordion-collapse collapse" aria-labelledby="headingFor" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<table class="table">
									<tr>
										<th>Nama Pelanggan</th>
										<th>No Order</th>
										<th>Tanggal Order</th>
										<th>Expedisi</th>
										<th>Alamat</th>
										<th>Biaya Pengiriman</th>
										<th>No Resi</th>
										<th>Total Bayar</th>
									</tr>
									<?php foreach ($pesanan_selesai as $key => $value) { ?>
										<tr>
											<td><?= $value->nama_pelanggan ?></td>
											<td><?= $value->no_order ?></td>
											<td><?= $value->tgl_order ?></td>
											<td><?= $value->expedisi ?><br><?= $value->paket ?><br><?= $value->estimasi ?></td>
											<td><?= $value->alamat ?></td>
											<td><b>Ongkir : Rp. <?= number_format($value->ongkir, 0) ?></b><br>
											</td>
											<td><?= $value->no_resi ?></td>
											<td>
												<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
												<span class="badge badge-success">Diterima</span>
											</td>

										</tr>
									<?php } ?>

								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php foreach ($proses_kirim as $key => $value) { ?>
	<div class="modal fade" id="kirim<?= $value->id_transaksi ?>" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalCenterTitle">Kirim Produk <?= $value->no_order ?></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<?php echo form_open('admin/kirim/' . $value->id_transaksi) ?>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">No Resi Pengiriman</label>
							<input type="text" id="nameWithTitle" name="no_resi" value="<?= $value->no_resi ?>" class="form-control" placeholder="Enter No Resi" required />
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
