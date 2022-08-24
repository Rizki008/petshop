<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<div class="row">
			<div class="col-lg-4 col-md-4 order-1">
				<div class="row">
					<div class="col-lg-6 col-md-12 col-6 mb-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-start justify-content-between">
									<div class="avatar flex-shrink-0">
										<img src="<?= base_url() ?>backend/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
									</div>
									<div class="dropdown">
										<button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="bx bx-dots-vertical-rounded"></i>
										</button>
										<div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
											<a class="dropdown-item" href="javascript:void(0);">View More</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
								<span class="fw-semibold d-block mb-1">Total Transaksi</span>
								<h3 class="card-title mb-2"><?= $total_transaksi ?></h3>
								<small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-6 mb-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-start justify-content-between">
									<div class="avatar flex-shrink-0">
										<img src="<?= base_url() ?>backend/assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
									</div>
									<div class="dropdown">
										<button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="bx bx-dots-vertical-rounded"></i>
										</button>
										<div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
											<a class="dropdown-item" href="javascript:void(0);">View More</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
								<span>Total Pelanggan</span>
								<h3 class="card-title text-nowrap mb-1"><?= $total_pelanggan ?></h3>
								<small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Total Revenue -->
			<div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
				<div class="card">
					<div class="row row-bordered g-0">
						<div class="col-md-8">
							<h5 class="card-header m-0 me-2 pb-3">Total Pelanggan</h5>
							<canvas id="myChartsa" height="100" style="height: 100px;"></canvas>
						</div>
					</div>
				</div>
			</div>
			<!--/ Total Revenue -->
			<div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
				<div class="row">
					<div class="col-6 mb-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-start justify-content-between">
									<div class="avatar flex-shrink-0">
										<img src="<?= base_url() ?>backend/assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
									</div>
									<div class="dropdown">
										<button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="bx bx-dots-vertical-rounded"></i>
										</button>
										<div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
											<a class="dropdown-item" href="javascript:void(0);">View More</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
								<span class="d-block mb-1">Total Produk</span>
								<h3 class="card-title text-nowrap mb-2"><?= $total_produk ?></h3>
								<small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
							</div>
						</div>
					</div>
					<div class="col-6 mb-4">
						<div class="card">
							<div class="card-body">
								<div class="card-title d-flex align-items-start justify-content-between">
									<div class="avatar flex-shrink-0">
										<img src="<?= base_url() ?>backend/assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
									</div>
									<div class="dropdown">
										<button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="bx bx-dots-vertical-rounded"></i>
										</button>
										<div class="dropdown-menu" aria-labelledby="cardOpt1">
											<a class="dropdown-item" href="javascript:void(0);">View More</a>
											<a class="dropdown-item" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
								<span class="fw-semibold d-block mb-1">Transactions</span>
								<h3 class="card-title mb-2"><?= $total_pesanan ?></h3>
								<small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
							</div>
						</div>
					</div>
					<!-- </div>
    <div class="row"> -->
				</div>
			</div>
			<div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
				<div class="card">
					<div class="row row-bordered g-0">
						<div class="col-md-8">
							<h5 class="card-header m-0 me-2 pb-3">Total Produk</h5>
							<canvas id="myChart" height="100" style="height: 100px;"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- / Content -->