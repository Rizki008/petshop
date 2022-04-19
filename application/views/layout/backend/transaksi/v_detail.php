<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> List groups</h4>

		<div class="card mb-4">
			<h5 class="card-header">List groups</h5>
			<div class="card-body">
				<div class="row">
					<!-- List group with Badges & Pills -->
					<div class="col-lg-6">
						<small class="text-light fw-semibold">Produk Yang Dipesan</small>
						<div class="demo-inline-spacing mt-3">

							<ul class="list-group">
								<?php
								foreach ($pesanan_detail as $key => $value) { ?>
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<?= $value->nama_produk ?>
										<span class="badge bg-primary"><?= $value->qty ?></span>
									</li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<!--/ List group with Badges & Pills -->
					<!-- Basic List group -->
					<div class="col-lg-6 mb-4 mb-xl-0">
						<small class="text-light fw-semibold">Data Pembeli</small>
						<div class="demo-inline-spacing mt-3">
							<div class="list-group">
								<a href="#" class="list-group-item list-group-item-action active"><?= $value->no_order ?></a>
								<a href="#" class="list-group-item list-group-item-action"><?= $value->nama_pelanggan ?></a>
								<a href="#" class="list-group-item list-group-item-action"><?= $value->no_tlpn ?></a>
								<a href="#" class="list-group-item list-group-item-action"><?= $value->alamat ?></a>
								<a href="#" class="list-group-item list-group-item-action"><?= $value->kode_pos ?></a>
								<a href="#" class="list-group-item list-group-item-action"><?= $value->kota ?></a>
								<a href="#" class="list-group-item list-group-item-action"><?= $value->provinsi ?></a>
							</div>
						</div>
					</div>
					<!--/ Basic List group -->
				</div>
			</div>
			<hr class="m-0" />
			<div class="card-body">
				<div class="row">
					<!-- List group Flush (Without main border) -->
					<?php foreach ($pesanan as $key => $value) { ?>
						<div class="col-lg-12 mb-4 mb-xl-0">
							<small class="text-light fw-semibold">Flush</small>
							<div class="demo-inline-spacing mt-3">
								<div class="list-group list-group-flush">
									<a href="javascript:void(0);" class="list-group-item list-group-item-action"><?= $value->atas_nama ?></a>
									<a href="javascript:void(0);" class="list-group-item list-group-item-action"><?= $value->nama_bank ?></a>
									<a href="javascript:void(0);" class="list-group-item list-group-item-action">Total Bayar: Rp.<?= number_format($value->total_bayar, 0) ?></a>
									<a href="javascript:void(0);" class="list-group-item list-group-item-action">Jumlah Bayar: Rp. <?= number_format($value->jml_bayar, 0) ?></a>
									<a href="javascript:void(0);" class="list-group-item list-group-item-action"><img class="img-fluid pad" src="<?= base_url('assets/bukti_bayar/' . $value->bukti_bayar) ?>" alt=""></a>
								</div>
							</div>
						</div>
					<?php } ?>
					<a href="<?= base_url('pesanan_masuk') ?>" class="btn btn-outline-warning">Kembali</a>
				</div>
			</div>
		</div>

	</div>
</div>
