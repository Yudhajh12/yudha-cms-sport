<br><br><br>
<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="card-body">
	<h4 class="card-title">Kategori Konten</h4>
	<div class="table-responsive">
		<table class="table" style="width: 100%; background-color: #333; color: #fff;">
			<thead style="background-color: #444;">
				<tr>
					<th>No</th>
					<th>Nama Kategori Konten</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody class="table-border-botton-0">
				<?php $no = 1; ?>
				<?php foreach($kategori as $aa) { ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $aa['nama_kategori'] ?></td>
					<td>
						<a href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']);?>"
							class="btn btn-sm btn-danger"
							onClick="retrun confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
						<a class="btn btn-sm btn-warning" data-bs-toggle="modal"
							data-bs-target="#edit<?=$aa['id_kategori']?>">
							Update
						</a>

						<!-- <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
							data-bs-target="#edit<?=$aa['id_kategori']?>">
							Update	
						</button> -->
						<div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<form action="<?= base_url('admin/kategori/update/') ?>" method="post">
									<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="modalCenterTitle">Perbarui Kategori</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Nama Kategori Konten</label>
													<input type="text" class="form-control"
														value="<?= $aa['nama_kategori'] ?>" name="nama_kategori"/>
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
	</div>
</div>
<!-- Modal Tambah User -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
	<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
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
					<label for="nama">Nama Kategori</label>
					<input type="text" class="form-control" id="nama" name="nama_kategori" required>
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
<div class="card-body">
	<button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#addUserModal">
		Tambah Kategori
	</button>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
