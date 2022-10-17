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
			<div class="col-md-5 col-md-push-2">
				<div id="product-main-img">
					<?php foreach ($gambar as $key => $value) { ?>
						<div class="product-preview">
							<img src="<?= base_url('assets/gambarproduk/' . $value->img) ?>" alt="">
						</div>
					<?php } ?>
				</div>
			</div>
			<!-- Product thumb imgs -->
			<div class="col-md-2  col-md-pull-5">
				<div id="product-imgs">
					<?php foreach ($gambar as $key => $value) { ?>
						<div class="product-preview">
							<img src="<?= base_url('assets/gambarproduk/' . $value->img) ?>" alt="">
						</div>
					<?php } ?>
				</div>
			</div>


			<!-- /Product main img -->
			<?php
			echo form_open('belanja/add');
			echo form_hidden('id', $produk->id_produk);
			echo form_hidden('price', $produk->harga - $produk->diskon);
			echo form_hidden('name', $produk->nama_produk);
			echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
			?>
			<!-- Product details -->
			<div class="col-md-5">
				<div class="product-details">
					<h2 class="product-name"><?= $produk->nama_produk ?></h2>
					<div>
						<div class="product-rating">
						</div>
						<!-- <a class="review-link" href="#">10 Review(s) | Add your review</a> -->
					</div>
					<div>
						<h3 class="product-price">Rp. <?= number_format($produk->harga - $produk->diskon, 0) ?> <del class="product-old-price">Rp. <?= number_format($produk->harga, 0) ?></del></h3>
						<span class="product-available">In Stock <?= $produk->stock ?></span>
					</div>
					<p><?= $produk->deskripsi ?></p>
					<div class="add-to-cart">
						<div class="qty-label">
							Qty
							<div class="input-number">
								<input type="number" id="quantity" name="qty" class="form-control" value="1" min="1" max="<?= $produk->stock ?>">
								<span class="qty-up">+</span>
								<span class="qty-down">-</span>
							</div>
						</div>
						<button type="submit" class="add-to-cart-btn" data-name="<?= $produk->nama_produk ?>" data-price="<?= ($produk->diskon > 0) ? ($produk->harga - $produk->diskon) : $produk->harga ?>" data-id="<?= $produk->id_produk ?>"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
					<ul class="product-links">
						<li>Category:</li>
						<li><a href="#"><?= $produk->nama_kategori ?></a></li>
					</ul>
				</div>
			</div>
			<!-- /Product details -->
			<?php echo form_close(); ?>

			<!-- Product tab -->
			<div class="col-md-12">
				<div id="product-tab">
					<!-- product tab nav -->
					<ul class="tab-nav">
						<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
						<li><a data-toggle="tab" href="#tab3">Reviews</a></li>
					</ul>
					<!-- /product tab nav -->

					<!-- product tab content -->
					<div class="tab-content">
						<!-- tab1  -->
						<div id="tab1" class="tab-pane fade in active">
							<div class="row">
								<div class="col-md-12">
									<p><?= $produk->deskripsi ?></p>
								</div>
							</div>
						</div>
						<!-- /tab1  -->

						<!-- tab3  -->
						<div id="tab3" class="tab-pane fade in">
							<div class="row">
								<!-- Reviews -->
								<div class="col-md-9">
									<div id="reviews">
										<ul class="reviews">
											<?php foreach ($reviews as $key => $value) { ?>
												<li>
													<div class="review-heading">
														<h5 class="name"><?= $value->nama ?></h5>
														<p class="date"><?= $value->tanggal ?></p>
														<div class="review-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p><?= $value->review ?></p>
													</div>
												</li>
											<?php } ?>
										</ul>
									</div>
								</div>
								<!-- /Reviews -->
							</div>
						</div>
						<!-- /tab3  -->
					</div>
					<!-- /product tab content  -->
				</div>
			</div>
			<!-- /product tab -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- Section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<div class="col-md-12">
				<div class="section-title text-center">
					<h3 class="title">Related Products</h3>
				</div>
			</div>
			<?php if (count($related_products) > 0) : ?>
				<?php foreach ($related_products as $product) : ?>
					<div class="col-md-3 col-xs-6">
						<?php
						echo form_open('belanja/add');
						echo form_hidden('id', $product->id_produk);
						echo form_hidden('price', $product->harga - $product->diskon);
						echo form_hidden('name', $product->nama_produk);
						echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
						?>
						<div class="product">
							<div class="product-img">
								<img src="<?= base_url('assets/gambar/' . $product->images) ?>" alt="">
								<div class="product-label">
									<?php if ($product->diskon > 0) : ?>
										<span class="sale"><?= count_percent_discount($product->diskon, $product->harga, 0) ?>%</span>
									<?php endif; ?>
								</div>
							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="#"><?= $product->nama_produk ?>e</a></h3>
								<h4 class="product-price">Rp. <?= number_format($product->harga - $product->diskon) ?> <del class="product-old-price">Rp. <?= $product->harga ?></del></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<a href="<?= base_url('home/detail_produk/' . $product->id_produk) ?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a>
								</div>
							</div>
							<div class="add-to-cart">
								<button type="submit" class="add-to-cart-btn" data-name="<?= $product->nama_produk ?>" data-price="<?= ($product->diskon > 0) ? ($product->harga - $product->diskon) : $product->harga ?>" data-id="<?= $product->id_produk ?>"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
						<?php echo form_close() ?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

			<div class="clearfix visible-sm visible-xs"></div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /Section -->