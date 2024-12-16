<br><br><br>
<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="card-body">
	<h4 class="card-title">Kategori Konten</h4>
	<div class="table-responsive">
		<table class="table" style="width: 100%; background-color: #333; color: #fff;">
			<thead style="background-color: #444;">
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Kategori Konten</th>
					<th>Tanggal</th>
					<th>Kreator</th>
					<th>Foto</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody class="table-border-botton-0">
				<?php $no = 1; ?>
				<?php foreach ($konten as $aa) { ?>

				<tr>
					<td><?= $no++; ?></td>
					<td><?= $aa['judul'] ?></td>
					<td><?= $aa['nama_kategori'] ?></td>
					<td><?= $aa['tanggal'] ?></td>
					<td><?= $aa['nama'] ?></td>
					<td>
						<a href="<?= base_url('assets/corona/upload/konten/' . $aa['foto']) ?>" target="_blank">
							<span class="mdi mdi-file-find"> Lihat Foto</span>
						</a>
					</td>
					<td>
						<a href="<?= site_url('admin/konten/delete_data/' . $aa['foto']) ?>"
							class="btn btn-sm btn-danger"
							onclick="return confirm('Apakah anda yakin menghapus data ini?')">
							<span class="mdi mdi-delete"></span>
						</a>
						<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
							data-bs-target="#editModal<?= $aa['foto'] ?>">
							<span class="mdi mdi-pencil-box"></span>
						</button>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal Tambah User -->

<!-- Modal Edit -->
<!-- Modal Tambah Data -->
<div class="card-body">
	<button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addUserModal">
		Tambah Kategori
	</button>
</div>
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addUserModalLabel">Tambah Kategori Konten</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="judul">Judul</label>
						<input type="text" class="form-control" name="judul" required>
					</div>
					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						<textarea name="keterangan" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label for="id_kategori">Kategori</label>
						<select name="id_kategori" class="form-control" required>
							<?php foreach ($kategori as $kat) { ?>
							<option value="<?= $kat['id_kategori'] ?>"><?= $kat['nama_kategori'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="foto">Foto</label>
						<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>


<?php foreach ($konten as $aa) { ?>
<div class="modal fade" id="editModal<?= $aa['foto'] ?>" tabindex="-1" role="dialog"
	aria-labelledby="editModalLabel<?= $aa['foto'] ?>" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= base_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="nama_foto" value="<?= $aa['foto']?>">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="editModalLabel-<?= $aa['foto'] ?>">Edit Konten</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="id_konten" value="<?= $aa['id_konten'] ?>">
					<div class="form-group">
						<label for="judul">Judul</label>
						<input type="text" class="form-control" name="judul" value="<?= $aa['judul'] ?>" required>
					</div>
					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						<textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
					</div>
					<div class="form-group">
						<label for="id_kategori">Kategori</label>
						<select name="id_kategori" class="form-control" required>
							<?php foreach ($kategori as $kat) { ?>
							<option value="<?= $kat['id_kategori'] ?>"
								<?= $kat['id_kategori'] == $aa['id_kategori'] ? 'selected' : '' ?>>
								<?= $kat['nama_kategori'] ?>
							</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="foto">Foto</label>
						<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
						<br>
						<button class="btn btn-secondary">
							<a href="<?= base_url('assets/corona/upload/konten/' . $aa['foto']) ?>" target="_blank">
								Lihat Foto Lama
							</a>
						</button>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
