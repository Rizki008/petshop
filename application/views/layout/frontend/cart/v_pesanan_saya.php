<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb-tree">
					<li><a href="#">Home</a></li>
					<li><a href="#">All Categories</a></li>
					<li><a href="#">Accessories</a></li>
					<li><a href="#">Headphones</a></li>
					<li class="active">Product name goes here</li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-12 col-sm-12">
				<div class="card card-primary card-tabs">
					<div class="card-header p-0 pt-1">
						<ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Profile</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Messages</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Settings</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="tab-content" id="custom-tabs-one-tabContent">
							<div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
								<table class="table">
									<thead class="thead-primary">
										<tr>
											<th>No Order</th>
											<th>Tanggal Order</th>
											<th>Expedisi</th>
											<th>Biaya Ongkir</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($belum_bayar as $key => $value) { ?>
											<tr>
												<td><a href="<?= base_url('pesanan_saya/detail/' . $value->no_order) ?>"><?= $value->no_order ?></td>
												<td><?= $value->tgl_order ?></td>
												<td><b>Rp. <?= number_format($value->ongkir, 0) ?></b><br>
												<td>
													<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>

													<?php if ($value->status_bayar == 0) { ?>
														<span class="badge badge-warning">Belum bayar</span>
													<?php } else { ?>
														<span class="badge badge-success">Sudah bayar</span><br>
														<span class="badge badge-primary">Menunggu Verifikasi</span>
													<?php } ?>
												</td>
												<td>
													<?php if ($value->status_bayar == 0) { ?>
														<a href="<?= base_url('pesanan_saya/bayar/' . $value->id_transaksi) ?>" class="btn btn-sm btn-flat btn-primary">Bayar</a>
														<button class="btn btn-sm btn-flat btn-primary" data-toggle="modal" data-target="#dibatalkan<?= $value->id_transaksi ?>">Batalkan</button>
													<?php } ?>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
								<table class="table">
									<thead class="thead-primary">
										<tr>
											<th>No Order</th>
											<th>Tanggal Order</th>
											<th>Biaya Ongkir</th>
											<th>Total Bayar</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($diproses as $key => $value) { ?>
											<tr>
												<td><?= $value->no_order ?></td>
												<td><?= $value->tgl_order ?></td>
												<td><b>Rp. <?= number_format($value->ongkir, 0) ?></b><br>
												</td>
												<td>
													<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
													<span class="badge badge-success">Diverifiksi</span><br>
													<span class="badge badge-primary">Dikemas</span>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
								<table class="table">
									<thead class="thead-primary">
										<tr>
											<th>No Order</th>
											<th>Tanggal Order</th>
											<th>Biaya Ongkir</th>
											<th>Status</th>
											<th>Total Bayar</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($dikirim as $key => $value) { ?>
											<tr>
												<td><?= $value->no_order ?></td>
												<td><?= $value->tgl_order ?></td>
												<td><b>Rp. <?= number_format($value->ongkir, 0) ?></b><br>
												</td>
												<td><?= $value->status ?><br>
													<button class="btn btn-primary btn-xs btn-flat" data-toggle="modal" data-target="#diterima<?= $value->id_transaksi ?>">Diterima</button>
												</td>
												<td>
													<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
													<span class="badge badge-success">DiKirim</span><br>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
								<table class="table">
									<thead class="thead-primary">
										<tr>
											<th>No Order</th>
											<th>Tanggal Order</th>
											<th>Biaya Ongkir</th>
											<th>Status</th>
											<th>Total Bayar</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($selesai as $key => $value) { ?>
											<tr>
												<td><a href="<?= base_url('pesanan_saya/detail_selesai/' . $value->no_order) ?>"><?= $value->no_order ?></td>
												<td><?= $value->tgl_order ?></td>
												<td><b>Rp. <?= number_format($value->ongkir, 0) ?></b><br>
												</td>
												<td><?= $value->status ?></td>
												<td>
													<b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>
													<span class="badge badge-success">Selesai</span><br>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</div>
</div>
