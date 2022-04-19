<!-- MAIN HEADER -->
<div id="header">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- LOGO -->
			<div class="col-md-3">
				<div class="header-logo">
					<a href="<?= base_url() ?>" class="logo">
						<img src="<?= base_url() ?>frontend/img/logo.png" alt="">
					</a>
				</div>
			</div>
			<!-- /LOGO -->

			<!-- SEARCH BAR -->
			<div class="col-md-6">
				<div class="header-search">
					<form>
						<select class="input-select">
							<option value="0">All Categories</option>
							<option value="1">Category 01</option>
							<option value="1">Category 02</option>
						</select>
						<input class="input" placeholder="Search here">
						<button class="search-btn">Search</button>
					</form>
				</div>
			</div>
			<!-- /SEARCH BAR -->

			<!-- ACCOUNT -->
			<div class="col-md-3 clearfix">
				<div class="header-ctn">
					<!-- Wishlist -->
					<div>
						<a href="<?= base_url('pesanan_saya') ?>">
							<i class="fa fa-heart-o"></i>
							<span>Pesanan Saya</span>
							<div class="qty">2</div>
						</a>
					</div>
					<!-- /Wishlist -->
					<?php $keranjang = $this->cart->contents();
					$jml_item = 0;
					foreach ($keranjang as $key => $value) {
						$jml_item = $jml_item + $value['qty'];
					} ?>
					<!-- Cart -->
					<div class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
							<i class="fa fa-shopping-cart"></i>
							<span>Your Cart</span>
							<div class="qty"><?= $jml_item ?></div>
						</a>
						<div class="cart-dropdown">
							<div class="cart-list">
								<?php foreach ($keranjang as $key => $value) {
									$produk = $this->m_home->detail_produk($value['id']);
								?>
									<div class="product-widget">
										<div class="product-img">
											<img src="<?= base_url('assets/gambar/' . $produk->gambar) ?>" alt="">
										</div>
										<div class="product-body">
											<h3 class="product-name"><a href="#"><?= $value['name'] ?></a></h3>
											<h4 class="product-price"><span class="qty"><?= $value['qty'] ?> x</span>Rp. <?= number_format($value['price'], 0) ?></h4>
											<h5><i class="fa fa-calculator"></i>Rp. <?= $this->cart->format_number($value['subtotal']); ?></h5>
										</div>
										<button class="delete"><i class="fa fa-close"></i></button>
									</div>
								<?php } ?>

							</div>
							<div class="cart-summary">
								<small><?= $jml_item ?> Item(s) selected</small>
								<h5>SUBTOTAL: Rp <?= $this->cart->format_number($this->cart->total()); ?></h5>
							</div>
							<div class="cart-btns">
								<a href="<?= base_url('belanja') ?>">View Cart</a>
								<a href="<?= base_url('belanja/cekout') ?>">Checkout <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /Cart -->

					<!-- Menu Toogle -->
					<div class="menu-toggle">
						<a href="#">
							<i class="fa fa-bars"></i>
							<span>Menu</span>
						</a>
					</div>
					<!-- /Menu Toogle -->
				</div>
			</div>
			<!-- /ACCOUNT -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->
</div>
<!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
	<!-- container -->
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
				<li class="active"><a href="<?= base_url() ?>">Home</a></li>
				<li><a href="#">Hot Deals</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Laptops</a></li>
				<li><a href="#">Smartphones</a></li>
				<li><a href="#">Cameras</a></li>
				<li><a href="#">Accessories</a></li>
			</ul>
			<!-- /NAV -->
		</div>
		<!-- /responsive-nav -->
	</div>
	<!-- /container -->
</nav>
<!-- /NAVIGATION -->
