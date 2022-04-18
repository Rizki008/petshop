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
