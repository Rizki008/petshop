<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
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
			echo form_open_multipart('pesanan_saya/bayar/' . $pesanan->id_transaksi) ?>
			<div class="col-md-7">
				<!-- Billing Details -->
				<div class="billing-details">
					<div class="section-title">
						<h3 class="title">Billing address</h3>
					</div>
					<div class="form-group">
						<input class="input" type="text" name="atas_nama" placeholder="Nama Pembayar" required>
					</div>
					<div class="form-group">
						<input class="input" type="text" name="nama_bank" placeholder="Nama Bank" required>
					</div>
					<div class="form-group">
						<input class="input" type="text" name="jml_bayar" placeholder="Jumlah Bayar" required>
					</div>
					<div class="form-group">
						<input class="input" type="file" name="bukti_bayar" placeholder="Bukti Bayar" required>
					</div>
				</div>
				<!-- /Billing Details -->
			</div>

			<!-- Order Details -->
			<div class="col-md-5 order-details">
				<div class="section-title text-center">
					<h3 class="title">Bayar Ke No Rekening</h3>
				</div>
				<div class="order-summary">
					<div class="order-col">
						<div><strong>Nama Bank</strong></div>
						<div><strong>No Rekening</strong></div>
						<div><strong>Atas Nama</strong></div>
					</div>
					<div class="order-products">
						<?php foreach ($rekening as $key => $value) { ?>
							<div class="order-col">
								<div><?= $value->nama_bank ?></div>
								<div><?= $value->no_rek ?></div>
								<div><?= $value->atas_nama ?></div>
							</div>
						<?php } ?>
					</div>
					<div class="order-col">
						<div>Shiping</div>
						<div><strong>FREE</strong></div>
					</div>
					<div class="order-col">
						<div><strong>TOTAL</strong></div>
						<div><strong class="order-total">Rp. <?= number_format($pesanan->total_bayar, 0) ?>.-</strong></div>
					</div>
				</div>
				<button type="submit" class="primary-btn order-submit">Bayar</button>
				<a href="<?= base_url('pesanan_saya') ?>" class="primary-btn order-submit">Kembali</a>
			</div>
			<!-- /Order Details -->
			<?php echo form_close() ?>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
