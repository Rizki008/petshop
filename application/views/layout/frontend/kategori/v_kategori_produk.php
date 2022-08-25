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
					<li class="active">Headphones (227,490 Results)</li>
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
			<!-- ASIDE -->
			<div id="aside" class="col-md-3">
				<!-- aside Widget -->
				<div class="aside">

				</div>
				<!-- /aside Widget -->
				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Top selling</h3>
					<?php if (count($best_deal_product_transaksi) > 0) : ?>
						<?php foreach ($best_deal_product_transaksi as $key => $value) { ?>
							<div class="product-widget">
								<div class="product-img">
									<img src="<?= base_url('assets/gambar/' . $value->images) ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-name"><a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>"><?= $value->nama_produk ?></a></h3>
									<h4 class="product-price">Rp. <?= number_format($value->harga, 0) ?></h4>
								</div>
							</div>
						<?php } ?>
					<?php else : ?>
					<?php endif; ?>
				</div>
				<!-- /aside Widget -->
			</div>
			<!-- /ASIDE -->

			<!-- STORE -->
			<div id="store" class="col-md-9">
				<!-- /store top filter -->

				<!-- store products -->
				<div class="row">

					<div class="clearfix visible-sm visible-xs"></div>

					<?php if (count($produk) > 0) : ?>
						<?php foreach ($produk as $value) : ?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<?php
									echo form_open('belanja/add');
									echo form_hidden('id', $value->id_produk);
									echo form_hidden('qty', 1);
									echo form_hidden('price', $value->harga - $value->diskon);
									echo form_hidden('name', $value->nama_produk);
									echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
									?>
									<div class="product-img">
										<img src="<?= base_url('assets/gambar/' . $value->images) ?>" alt="<?= $value->nama_produk ?>">
										<div class="product-label">
											<?php if ($value->diskon > 0) : ?>
												<span class="sale"><?= count_percent_discount($value->diskon, $value->harga, 0) ?>%</span>
											<?php endif; ?>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category"><?= $value->nama_kategori ?></p>
										<h3 class="product-name"><a href="#"><?= $value->nama_produk ?></a></h3>
										<h4 class="product-price"><?php if ($value->diskon > 0) : ?>
												<del class="product-old-price">Rp. <?= number_format($value->harga, 0) ?></del><span>Rp. <?= number_format($value->harga - $value->diskon, 0) ?></span>
												<?php else : ?>Rp. <?= number_format($value->harga, 0) ?>
											<?php endif; ?>
										</h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a>
										</div>
									</div>
									<div class="add-to-cart">
										<button type="submit" class="add-to-cart-btn" data-name="<?= $value->nama_produk ?>" data-price="<?= ($value->diskon > 0) ? ($value->harga - $value->diskon) : $value->harga ?>" data-id="<?= $value->id_produk ?>"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
									<?php echo form_close(); ?>
								</div>

							</div>
							<!-- /product -->
						<?php endforeach; ?>
					<?php else : ?>
					<?php endif; ?>
					<div class="clearfix visible-lg visible-md"></div>

					<div class="clearfix visible-sm visible-xs"></div>
					<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>
					<div class="clearfix visible-sm visible-xs"></div>
				</div>
				<!-- /store products -->
			</div>
			<!-- /STORE -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

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
						<input class="input" type="email" placeholder="Enter Your Email">
						<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
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