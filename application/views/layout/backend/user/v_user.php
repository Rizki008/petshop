<!-- Content wrapper -->
<div class="content-wrapper">
	<!-- Content -->

	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> <?= $title ?></h4>
		<!-- Bootstrap Table with Header - Dark -->
		<div class="card">
			<h5 class="card-header"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
					Tambah User
				</button>
			</h5>
			<div class="table-responsive text-nowrap">
				<table class="table">
					<thead class="table-dark">
						<tr>
							<th>No</th>
							<th>Nama User</th>
							<th>Password</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody class="table-border-bottom-0">
						<?php $no = 1;
						foreach ($user as $key => $value) { ?>
							<tr>
								<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++ ?></strong></td>
								<td><?= $value->username ?></td>
								<td><?= $value->password ?></td>
								<td><?php if ($value->level == 1) { ?>
										<span class="badge bg-label-primary me-1">Admin</span>
									<?php } else { ?>
										<span class="badge bg-label-primary me-1">Pemilik</span>
									<?php } ?>
								</td>
								<td>
									<div class="dropdown">
										<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
											<i class="bx bx-dots-vertical-rounded"></i>
										</button>
										<div class="dropdown-menu">
											<button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $value->id_user ?>">
												<i class="bx bx-edit-alt me-1"></i>
												Edit
											</button>
											<button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalDelete<?= $value->id_user ?>">
												<i class="bx bx-trash me-1"></i>
												Delete
											</button>
										</div>
									</div>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<!--/ Bootstrap Table with Header Dark -->
	</div>
</div>

<hr class="my-5" />

<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalCenterTitle">Tambah kategori Produk</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<?php echo form_open('admin/add') ?>
			<div class="modal-body">
				<div class="row">
					<div class="col mb-3">
						<label for="nameWithTitle" class="form-label">Username</label>
						<input type="text" id="nameWithTitle" name="username" class="form-control" placeholder="Enter Nama User" required />
					</div>
				</div>
				<div class="row">
					<div class="col mb-3">
						<label for="nameWithTitle" class="form-label">Password</label>
						<input type="text" id="nameWithTitle" name="password" class="form-control" placeholder="Enter Password" required />
					</div>
				</div>
				<div class="row">
					<div class="col mb-3">
						<label for="nameWithTitle" class="form-label">Status</label>
						<select name="level" id="level" class="form-control" required>
							<option>---Pilih Status---</option>
							<option value="1">Admin</option>
							<option value="2">Pemilik</option>
						</select>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
					Close
				</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			<?php echo form_close() ?>
		</div>
	</div>
</div>


<?php foreach ($user as $key => $value) { ?>
	<div class="modal fade" id="modalEdit<?= $value->id_user ?>" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalCenterTitle">Tambah Data Pengelola</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<?php echo form_open('admin/update/' . $value->id_user) ?>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Username</label>
							<input type="text" id="nameWithTitle" name="username" value="<?= $value->username ?>" class="form-control" placeholder="Enter Nama Kategori" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Password</label>
							<input type="text" id="nameWithTitle" name="password" value="<?= $value->password ?>" class="form-control" placeholder="Enter Password" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label for="nameWithTitle" class="form-label">Status</label>
							<select name="level" id="level" class="form-control" required>
								<option><?= $value->level ?></option>
								<option value="1">Admin</option>
								<option value="2">Pemilik</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
<?php } ?>

<?php foreach ($user as $key => $value) { ?>
	<div class="modal fade" id="modalDelete<?= $value->id_user ?>" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalToggleLabel">Hapus Data Pengelola</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">Apakah Anda Yakin Akan Hapus Kategori <?= $value->username ?> ?</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
						Close
					</button>
					<a href="<?= base_url('admin/delete/' . $value->id_user) ?>" class="btn btn-primary">Delete</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
