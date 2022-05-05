<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<?php foreach ($kategori as $key => $value) { ?>
				<div class="col-md-4 col-xs-6">
					<div class="shop">
						<div class="shop-img">
							<img src="<?= base_url('assets/gambarkategori/' . $value->gambar) ?>" alt="">
						</div>
						<div class="shop-body">
							<h3><?= $value->nama_kategori ?></h3>
							<a href="<?= base_url('/home/kategori/' . $value->id_kategori) ?>" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
			<?php } ?>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">New Products</h3>
					<div class="section-nav">
						<!-- <ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
							<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
							<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
							<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
						</ul> -->
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">

					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<?php if (count($produk) > 0) : ?>
									<?php foreach ($produk as $value) : ?>
										<!-- product -->
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
													<span class="new">NEW</span>
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
										<!-- /product -->
									<?php endforeach; ?>
								<?php else : ?>
								<?php endif; ?>
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3>02</h3>
								<span>Days</span>
							</div>
						</li>
						<li>
							<div>
								<h3>10</h3>
								<span>Hours</span>
							</div>
						</li>
						<li>
							<div>
								<h3>34</h3>
								<span>Mins</span>
							</div>
						</li>
						<li>
							<div>
								<h3>60</h3>
								<span>Secs</span>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase">hot deal this week</h2>
					<p>New Collection Up to 50% OFF</p>
					<a class="primary-btn cta-btn" href="#">Shop now</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Top selling</h3>
					<div class="section-nav">
						<!-- <ul class="section-tab-nav tab-nav">
							<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
							<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
							<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
							<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
						</ul> -->
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab2" class="tab-pane fade in active">
							<div class="products-slick" data-nav="#slick-nav-2">
								<!-- product -->
								<?php if (count($best_deal_product_transaksi) > 0) : ?>
									<?php foreach ($best_deal_product_transaksi as $key => $value) { ?>
										<div class="product">
											<?php echo form_open('belanja/add');
											echo form_hidden('id', $value->id_produk);
											echo form_hidden('qty', 1);
											echo form_hidden('price', $value->harga);
											echo form_hidden('name', $value->nama_produk);
											echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
											?>
											<div class="product-img">
												<img src="<?= base_url('assets/gambar/' . $value->images) ?>" alt="">
												<div class="product-label">
												</div>
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?= $value->nama_produk ?></a></h3>
												<h4 class="product-price">Rp. <?= number_format($value->harga, 0) ?></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a>
												</div>
											</div>
											<div class="add-to-cart">
												<button type="submit" class="add-to-cart-btn" data-name="<?= $value->nama_produk ?>" data-price="<?= $value->harga ?>" data-id="<?= $value->id_produk ?>"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
											<?php echo form_close(); ?>
										</div>
									<?php } ?>
								<?php else : ?>
								<?php endif; ?>
								<!-- /product -->
							</div>
							<div id="slick-nav-2" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Diskon</h4>
					<div class="section-nav">
						<div id="slick-nav-3" class="products-slick-nav"></div>
					</div>
				</div>
				<?php foreach ($diskon as $key => $value) { ?>
					<div class="products-widget-slick" data-nav="#slick-nav-3">
						<div>
							<?php
							echo form_open('belanja/add');
							echo form_hidden('id', $value->id_produk);
							echo form_hidden('qty', 1);
							echo form_hidden('price', $value->harga - $value->diskon);
							echo form_hidden('name', $value->nama_produk);
							echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
							?> <div class="product-widget">
								<div class="product-img">
									<img src="<?= base_url('assets/gambar/' . $value->images) ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?= $value->nama_kategori ?></p>
									<h3 class="product-name"><a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>"><?= $value->nama_produk ?></a></h3>
									<h4 class="product-price">Rp. <?= number_format($value->harga - $value->diskon) ?> <del class="product-old-price">Rp. <?= number_format($value->harga, 0) ?></del></h4>
								</div>
							</div>
							<?php echo form_close() ?>
						</div>
					</div>
				<?php } ?>
			</div>

			<div class="clearfix visible-sm visible-xs"></div>
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