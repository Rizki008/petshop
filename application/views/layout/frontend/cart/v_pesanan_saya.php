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

<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Pesanan Saya</h4>
						</p>
						<table class="table">
							<thead>
								<tr>
									<th>No Order</th>
									<th>Tanggal Order.</th>
									<th>Expedisi</th>
									<th>Biaya Ongkir</th>
									<th>Total Bayar</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($pesanan as $key => $value) { ?>
									<tr>
										<td><?= $value->no_order ?></td>
										<td><?= $value->tgl_order ?></td>
										<td><?= $value->expedisi ?><br><?= $value->paket ?><br><?= $value->estimasi ?></td>
										<td class="text-warning">Rp. <?= number_format($value->ongkir, 0) ?><i class="mdi mdi-arrow-down"></i></td>
										<td><b>Rp. <?= number_format($value->total_bayar, 0) ?></b><br>

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
												<button class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#dibatalkan<?= $value->id_transaksi ?>">Batalkan</button>
											<?php } ?>
										</td>
									</tr>
								<?php } ?>
								<?php foreach ($diproses as $key => $value) { ?>
									<tr>
										<td><a href="<?= base_url('transaksi/detail/' . $value->no_order) ?>"><?= $value->no_order ?></a></td>
										<td><?= $value->tgl_order ?></td>
										<td><?= $value->expedisi ?><br><?= $value->paket ?><br><?= $value->estimasi ?></td>
										<td class="text-warning">Rp. <?= number_format($value->ongkir, 0) ?><i class="mdi mdi-arrow-down"></i></td>
										<td>Rp. <?= number_format($value->total_bayar, 0) ?><br>
											<label class="badge badge-info">Diproses</label>
										</td>
										<td></td>
										<td></td>
									</tr>
								<?php } ?>
								<?php foreach ($dikirim as $key => $value) { ?>
									<tr>
										<td><?= $value->no_order ?></td>
										<td><?= $value->tgl_order ?></td>
										<td class="text-warning">Rp. <?= number_format($value->ongkir, 0) ?><i class="mdi mdi-arrow-down"></i></td>
										<td>Rp. <?= number_format($value->total_bayar, 0) ?>
											<label class="badge badge-primary">Dikirim</label>
										</td>
										<td class="text-info"><?= $value->nama_pengirim ?></td>
										<td></td>
									</tr>
								<?php } ?>
								<?php foreach ($selesai as $key => $value) { ?>
									<tr>
										<td><?= $value->no_order ?></td>
										<td><?= $value->tgl_order ?></td>
										<td class="text-warning">Rp. <?= number_format($value->ongkir, 0) ?><i class="mdi mdi-arrow-down"></i></td>
										<td>Rp. <?= number_format($value->total_bayar, 0) ?>
											<label class="badge badge-success">Selesai</label>
										</td>
										<td class="text-info"><?= $value->nama_pengirim ?></td>
										<td></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
