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
			<?php foreach ($gambar as $key => $value) { ?>
				<div class="col-md-5 col-md-push-2">
					<div id="product-main-img">
						<div class="product-preview">
							<img src="<?= base_url('assets/gambarproduk/' . $value->img) ?>" alt="">
						</div>
					</div>
				</div>
			<?php } ?>
			<!-- /Product main img -->

			<!-- Product details -->
			<div class="col-md-5">
				<div class="product-details">
					<?php
					echo form_open('belanja/add');
					echo form_hidden('id', $produk->id_produk);
					echo form_hidden('price', $produk->harga - $produk->diskon);
					echo form_hidden('name', $produk->nama_produk);
					echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
					?>
					<h2 class="product-name"><?= $produk->nama_produk ?></h2>
					<div>
						<div class="product-rating">
							<!-- <i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i> -->
						</div>
						<a class="review-link" href="#">10 Review(s) | Add your review</a>
					</div>
					<div>
						<h3 class="product-price">Rp. <?= number_format($produk->harga - $produk->diskon, 0) ?> <del class="product-old-price">Rp. <?= number_format($produk->harga, 0) ?></del></h3>
						<span class="product-available">In Stock</span>
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
					<?php echo form_close(); ?>
				</div>
			</div>
			<!-- /Product details -->

			<!-- Product tab -->
			<div class="col-md-12">
				<div id="product-tab">
					<!-- product tab nav -->
					<ul class="tab-nav">
						<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
						<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
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
								<!-- Rating -->
								<div class="col-md-3">
									<div id="rating">
										<div class="rating-avg">
											<span>4.5</span>
											<div class="rating-stars">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<ul class="rating">
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-progress">
													<div style="width: 80%;"></div>
												</div>
												<span class="sum">3</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div style="width: 60%;"></div>
												</div>
												<span class="sum">2</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Rating -->

								<!-- Reviews -->
								<div class="col-md-6">
									<div id="reviews">
										<ul class="reviews">
											<li>
												<div class="review-heading">
													<h5 class="name">John</h5>
													<p class="date">27 DEC 2018, 8:0 PM</p>
													<div class="review-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o empty"></i>
													</div>
												</div>
												<div class="review-body">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
												</div>
											</li>
											<li>
												<div class="review-heading">
													<h5 class="name">John</h5>
													<p class="date">27 DEC 2018, 8:0 PM</p>
													<div class="review-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o empty"></i>
													</div>
												</div>
												<div class="review-body">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
												</div>
											</li>
											<li>
												<div class="review-heading">
													<h5 class="name">John</h5>
													<p class="date">27 DEC 2018, 8:0 PM</p>
													<div class="review-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o empty"></i>
													</div>
												</div>
												<div class="review-body">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
												</div>
											</li>
										</ul>
										<ul class="reviews-pagination">
											<li class="active">1</li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /Reviews -->

								<!-- Review Form -->
								<div class="col-md-3">
									<div id="review-form">
										<form class="review-form">
											<input class="input" type="text" placeholder="Your Name">
											<input class="input" type="email" placeholder="Your Email">
											<textarea class="input" placeholder="Your Review"></textarea>
											<div class="input-rating">
												<span>Your Rating: </span>
												<div class="stars">
													<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
													<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
													<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
													<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
													<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
												</div>
											</div>
											<button class="primary-btn">Submit</button>
										</form>
									</div>
								</div>
								<!-- /Review Form -->
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
					<!-- product -->
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
								<img src="<?= base_url('assets/gambar/' . $product->gambar) ?>" alt="">
								<div class="product-label">
									<span class="sale">-30%</span>
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
					<!-- /product -->
				<?php endforeach; ?>
			<?php endif; ?>

			<div class="clearfix visible-sm visible-xs"></div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /Section -->
