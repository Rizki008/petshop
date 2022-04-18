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
		<?php echo form_open('belanja/update'); ?>
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<table class="table">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>Nama Produk</th>
								<th>Berat</th>
								<th>Harga</th>
								<th>Jumlah</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php $total_berat = 0;
							$total = 0;
							foreach ($this->cart->contents() as $items) {
								$produk = $this->m_home->detail_produk($items['id']);
								$berat = $items['qty'] * $produk->berat;
								$total_berat =  $total_berat + $berat;
							?>
								<tr class="text-center">
									<td class="product-remove">
										<a href="<?= base_url('belanja/delete/') . $items['rowid'] ?>" class="remove-item"><span class="ion-ios-close"></span></a>
									</td>
									<td class="image-prod">
										<img src="<?= base_url('assets/gambar/' . $produk->gambar) ?>" class="img-fluid" alt="Colorlib Template">
									</td>
									<td class="product-name">
										<h6><?php echo $items['name']; ?></h6>
										<p></p>
									</td>
									<td class="price"><?= $berat ?> Gr</td>
									<td class="price">Rp. <?= number_format($items['price']); ?></td>
									<td class="quantity">
										<div class="input-group mb-3">
											<?php echo form_input(
												array(
													'name' => $i . '[qty]',
													'value' => $items['qty'],
													'maxlength' => '3',
													'min' => '0',
													'max' => 'stock',
													'size' => '5',
													'type' => 'number',
													'class' => 'form-control'
												)
											); ?>
										</div>
									</td>
									<td class="total">Rp. <?= number_format($items['subtotal']); ?></td>
								</tr><!-- END TR-->
								<?php $i++; ?>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>


		<div class="row justify-content-end">
			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
				<div class="cart-total mb-3">
					<h3>Rincian Belanja</h3>
					<p class="d-flex">
						<span>Total Belanja</span>
						<span>Rp. <?= number_format($this->cart->total(), 0) ?></span>
					</p>
					<p class="d-flex">
						<span>Total Berat</span>
						<span><?= $total_berat ?> Gr</span>
					</p>
				</div>
				<p><button type="submit" class="btn btn-primary py-3 px-4">Update</button>
					<a href="<?= base_url('belanja/cekout') ?>" class="btn btn-primary py-3 px-4">Checkout</a>
				</p>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
<!-- NEWSLETTER -->
<div id="newsletter" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="newsletter">
					<p>Sign Up for the <strong>NEWSLETTER</strong></p>
					<form>
						<!-- <input class="input" type="email" placeholder="Enter Your Email">
						<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button> -->
					</form>
					<ul class="newsletter-follow">
						<li>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /NEWSLETTER -->