<br><br><br>
<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="card-body">
	<h4 class="card-title">Data Pengguna</h4>
	<div class="table-responsive">
		<table class="table" style="width: 100%; background-color: #333; color: #fff;">
			<thead style="background-color: #444;">
				<tr>
					<th>Username</th>
					<th>Nama</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody class="table-border-botton-0">
				<?php foreach($user as $aa) { ?>
				<tr>
					<td><?= $aa['username'] ?></td>
					<td><?= $aa['nama'] ?></td>
					<td><?= $aa['level'] ?></td>
					<td>
						<a href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']);?>"
							class="btn btn-sm btn-danger"
							onClick="retrun confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
						<a class="btn btn-sm btn-warning" data-bs-toggle="modal"
							data-bs-target="#edit<?=$aa['id_user']?>">
							Update
						</a>
						<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<form action="<?= base_url('admin/user/update/') ?>" method="post">
									<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="modalCenterTitle">Perbarui Nama User</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Nama</label>
													<input type="text" class="form-control" value="<?= $aa['nama'] ?>"
														name="nama" />
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label for="username" class="form-label">Username</label>
													<input type="text" class="form-control"
														value="<?= $aa['username'] ?>" name="username" readonly />
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary"
												data-bs-dismiss="modal">Tutup</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div><br>
	<button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#addUserModal">
		Tambah Konten
	</button>
</div>
<!-- Modal Tambah User -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= base_url('admin/user/simpan') ?>" method="post">
			<!-- Ganti sesuai dengan rute untuk menambah user -->
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addUserModalLabel">Tambah User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" required>
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" required>
					</div>
					<div class="form-group">
						<label for="level">Level</label>
						<select class="form-control" id="level" name="level">
							<option value="Admin">Admin</option>
							<option value="User">User</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
		</form>
	</div>
</div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
