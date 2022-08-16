<!doctype html>
<html lang="en">

<head>
	<title>Login 09</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>login-form-19/css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Pelanggan Pethsop</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
						<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/bg.jpg);"></div>
						<h3 class="text-center mb-0">Selamat Datang</h3>
						<p class="text-center">Silahkan Untuk Login Akun Anda</p>
						<?php
						echo validation_errors('<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

						if ($this->session->flashdata('pesan')) {
							echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-check"></i> Sukses</h5>';
							echo $this->session->flashdata('pesan');
							echo '</div>';
						}
						?>
						<form action="<?= base_url('pelanggan/login') ?>" method="POST" class="login-form">
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-envelope"></span></div>
								<input type="email" class="form-control" name="email" value="<?= set_value('email') ?>" placeholder="Email" required>
							</div>
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
								<input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" placeholder="Password" required>
							</div>
							<div class="form-group">
								<button type="submit" class="btn form-control btn-primary rounded submit px-3">Login</button>
							</div>
						</form>
						<div class="w-100 text-center mt-4 text">
							<p class="mb-0">Belum Punya akun?</p>
							<a href="<?= base_url('pelanggan/register') ?>">Registrasi</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url() ?>login-form-19/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>login-form-19/js/popper.js"></script>
	<script src="<?= base_url() ?>login-form-19/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>login-form-19/js/main.js"></script>

</body>

</html>