<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title><?= $title ?></title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?= base_url() ?>frontend/css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="<?= base_url() ?>frontend/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="<?= base_url() ?>frontend/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="<?= base_url() ?>frontend/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?= base_url() ?>frontend/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= base_url() ?>frontend/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
				</ul>
				<ul class="header-links pull-right">
					<li><a href="<?= base_url('pelanggan/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
					<li><?php if ($this->session->userdata('email') == "") { ?>
							<a href="<?= base_url('pelanggan/register') ?>"><i class="fa fa-user-o"></i> My Account</a>
						<?php } else { ?>
							<a href="#"><i class="fa fa-user-o"></i> <?= $this->session->userdata('nama'); ?></a>
						<?php } ?>
					</li>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

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
									<span>Your Wishlist</span>
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

	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<h3 class="breadcrumb-header">Checkout</h3>
					<ul class="breadcrumb-tree">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active">Checkout</li>
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
			echo form_open('belanja/cekout');
			$no_order = date('Ymd') . strtoupper(random_string('alnum', 8)); ?>
			<div class="row">

				<div class="col-md-7">
					<!-- Billing Details -->
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Billing address</h3>
						</div>
						<div class="form-group">
							<input class="input" type="text" name="nama_pelanggan" placeholder="Nama Penerima">
						</div>
						<div class="form-group">
							<input class="input" type="number" name="no_tlpn" placeholder="No Telpon">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="kode_pos" placeholder="Kode Pos">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="alamat" placeholder="Alamat lengkap">
						</div>
					</div>
					<!-- /Billing Details -->

					<!-- Shiping Details -->
					<div class="shiping-details">
						<div class="section-title">
							<h3 class="title">Shiping address</h3>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="shiping-address">
							<label for="shiping-address">
								<span></span>
								Ship to a diffrent address?
							</label>
							<div class="caption">
								<div class="form-group">
									<select name="provinsi" class="form-control">

									</select>
								</div>
								<div class="form-group">
									<select name="kota" class="form-control">

									</select>
								</div>
								<div class="form-group">
									<select name="expedisi" class="form-control">

									</select>
								</div>
								<div class="form-group">
									<select name="paket" class="form-control">

									</select>
								</div>
							</div>
						</div>
					</div>
					<!-- /Shiping Details -->

					<!-- Order notes -->
					<div class="order-notes">
						<textarea class="input" name="catatan" placeholder="Order Notes"></textarea>
					</div>
					<!-- /Order notes -->
				</div>

				<!-- Order Details -->
				<div class="col-md-5 order-details">
					<div class="section-title text-center">
						<h3 class="title">Your Order</h3>
					</div>

					<div class="order-summary">
						<div class="order-col">
							<div><strong>PRODUCT</strong></div>
							<div><strong>BERAT</strong></div>
							<div><strong>TOTAL</strong></div>
						</div>

						<div class="order-products">
							<?php $i = 1; ?>
							<?php $total_berat = 0;
							$total = 0;
							foreach ($this->cart->contents() as $items) {
								$produk = $this->m_home->detail_produk($items['id']);
								$berat = $items['qty'] * $produk->berat;
								$total_berat =  $total_berat + $berat;
							?>
								<div class="order-col">
									<div><?php echo $items['name'] ?> x <?php echo $items['qty'] ?></div>
									<div><?= $berat ?> GR</div>
									<div><?php echo number_format($items['price'], 0) ?></div>
								</div>
								<?php $i++; ?>
							<?php } ?>
						</div>
						<div class="order-col">
							<div>Total Belanja</div>
							<div><strong class="order-total">Rp. <?php echo number_format($this->cart->total(), 0) ?></strong></div>
						</div>
						<div class="order-col">
							<div>Berat</div>
							<div><strong><?= $total_berat ?> Gr</strong></div>
						</div>
						<div class="order-col">
							<div>Ongkir</div>
							<div><strong id="ongkir"></strong></div>
						</div>
						<div class="order-col">
							<div><strong>TOTAL BAYAR</strong></div>
							<div><strong class="order-total" id="total_bayar"></strong></div>
						</div>
					</div>
					<input name="no_order" value="<?= $no_order ?>" hidden>
					<input name="estimasi" hidden>
					<input name="ongkir" hidden>
					<input name="berat" value="<?= $total_berat ?>" hidden>
					<input name="grand_total" value="<?= $this->cart->total() ?>" hidden>
					<input name="total_bayar" hidden>
					<?php
					$i = 1;
					foreach ($this->cart->contents() as $items) {
						echo form_hidden('qty' . $i++, $items['qty']);
					}
					?>
					<button type="submit" class="primary-btn order-submit"><i class="fa fa-shopping-bag"></i> Place order</button>
				</div>
				<?php echo form_close() ?>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">About Us</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
							<ul class="footer-links">
								<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Categories</h3>
							<ul class="footer-links">
								<li><a href="#">Hot deals</a></li>
								<li><a href="#">Laptops</a></li>
								<li><a href="#">Smartphones</a></li>
								<li><a href="#">Cameras</a></li>
								<li><a href="#">Accessories</a></li>
							</ul>
						</div>
					</div>

					<div class="clearfix visible-xs"></div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Information</h3>
							<ul class="footer-links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Orders and Returns</a></li>
								<li><a href="#">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Service</h3>
							<ul class="footer-links">
								<li><a href="#">My Account</a></li>
								<li><a href="#">View Cart</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Track My Order</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top footer -->

		<!-- bottom footer -->
		<div id="bottom-footer" class="section">
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="footer-payments">
							<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
							<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
							<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
						</ul>
						<span class="copyright">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</span>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bottom footer -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="<?= base_url() ?>frontend/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/slick.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/nouislider.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/jquery.zoom.min.js"></script>
	<script src="<?= base_url() ?>frontend/js/main.js"></script>
	<script>
		$(document).ready(function() {
			$.ajax({
				type: "POST",
				url: "<?= base_url('lokasi/provinsi') ?>",
				success: function(hasil_provinsi) {
					// console.log(hasil_provinsi);
					$("select[name=provinsi]").html(hasil_provinsi);
				}
			});
			$("select[name=provinsi]").on("change", function() {
				var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");

				$.ajax({
					type: "POST",
					url: "<?= base_url('lokasi/kota') ?>",
					data: 'id_provinsi=' + id_provinsi_terpilih,
					success: function(hasil_kota) {
						// console.log(hasil_kota);
						$("select[name=kota]").html(hasil_kota);
					}
				});
			});

			$("select[name=kota]").on("change", function() {
				$.ajax({
					type: "POST",
					url: "<?= base_url('lokasi/expedisi') ?>",
					success: function(hasil_expedisi) {
						$("select[name=expedisi]").html(hasil_expedisi);
					}
				});
			});

			$("select[name=expedisi]").on("change", function() {
				var expedisi_terpilih = $("select[name = expedisi]").val()
				var id_kota_tujuan_terpilih = $("option:selected", "select[name = kota]").attr('id_kota');
				var tot_berat = <?= $total_berat ?>;

				$.ajax({
					type: "POST",
					url: "<?= base_url('lokasi/paket') ?>",
					data: 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + tot_berat,
					success: function(hasil_paket) {
						console.log(hasil_paket);
						$("select[name=paket]").html(hasil_paket);
					}
				});
			});

			$("select[name=paket]").on("change", function() {
				var dataongkir = $("option:selected", this).attr('ongkir');
				var reverse = dataongkir.toString().split('').reverse().join(''),
					ribuan_ongkir = reverse.match(/\d{1,3}/g);
				ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');
				$("#ongkir").html("Rp. " + ribuan_ongkir);

				var data_total_bayar = parseInt(dataongkir) + parseInt(<?= $this->cart->total() ?>);
				var reverse2 = data_total_bayar.toString().split('').reverse().join(''),
					ribuan_bayar = reverse2.match(/\d{1,3}/g);
				ribuan_bayar = ribuan_bayar.join(',').split('').reverse().join('');
				$("#total_bayar").html("Rp. " + ribuan_bayar);

				var estimasi = $("option:selected", this).attr('estimasi');
				$("input[name=estimasi]").val(estimasi);
				$("input[name=ongkir]").val(dataongkir);
				$("input[name=total_bayar]").val(data_total_bayar);
			});
		});
	</script>
</body>

</html>