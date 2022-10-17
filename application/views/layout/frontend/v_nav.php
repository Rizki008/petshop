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
						<img src="<?= base_url() ?>frontend/img/logos.png" alt="">
					</a>
				</div>
			</div>
			<!-- /LOGO -->

			<!-- SEARCH BAR -->
			<div class="col-md-6">
				<div class="header-search">

				</div>
			</div>
			<!-- /SEARCH BAR -->
			<?php
			$jml_pesanan = $this->m_home->jumlah_pesanan(); ?>
			<!-- ACCOUNT -->
			<div class="col-md-3 clearfix">
				<div class="header-ctn">
					<!-- Wishlist -->
					<div>
						<a href="<?= base_url('pesanan_saya') ?>">
							<i class="fa fa-shopping-bag"></i>
							<span>Pesanan Saya</span>
							<div class="qty"><?= $jml_pesanan ?></div>
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
											<img src="<?= base_url('assets/gambar/' . $produk->images) ?>" alt="">
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
								<h5>Total Belanja: Rp <?= $this->cart->format_number($this->cart->total()); ?></h5>
							</div>
							<div class="cart-btns">
								<a href="<?= base_url('belanja') ?>">Lihat Keranjang</a>
								<a href="<?= base_url('belanja/cekout') ?>">Beli <i class="fa fa-arrow-circle-right"></i></a>
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
			<?php $kategori = $this->m_home->kategori_poroduk(); ?>
			<ul class="main-nav nav navbar-nav">
				<li class="active"><a href="<?= base_url() ?>">Home</a></li>
				<?php foreach ($kategori as $key => $value) { ?>
					<li><a href="<?= base_url('/home/kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?></a></li>
				<?php } ?>
			</ul>
			<!-- /NAV -->
		</div>
		<!-- /responsive-nav -->
	</div>
	<!-- /container -->
</nav>
<!-- /NAVIGATION -->