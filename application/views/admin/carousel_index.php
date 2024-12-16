<br><br><br>
<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="container-fluid px-4 custom-container-bg">
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<form action="<?= base_url('admin/carousel/simpan') ?>" method="post" enctype="multipart/form-data">
					<h5 class="card-header bg-primary text-white">File Input Examples</h5>
					<div class="card-body">
						<div class="mb-4">
							<label for="judul">Judul</label>
							<input type="text" class="form-control" placeholder="Judul Foto" name="judul" required>
						</div>
						<div class="mb-4">
							<label for="formFile" class="form-label">Pilih Foto Dengan Ukuran (1:3)</label>
							<input class="form-control" type="file" name="foto">
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Carousel Section -->
	<?php foreach ($carousel as $aa) { ?>
	<div class="row">
		<div class="col-md-12 mb-3 mt-3">
			<div class="card h-100">
				<img class="card-img-top" src="<?= base_url('assets/corona/upload/carousel/' . $aa['foto']) ?>">
				<div class=" card-body">
				<h5 class="card-title" style="color: #000;"><?= $aa['judul']?></h5>
				<a href="<?= site_url('admin/carousel/delete_data/' . $aa['foto']) ?>" class="btn btn-sm btn-danger"
					onclick="return confirm('Apakah anda yakin menghapus data ini?')">
					<span class="mdi mdi-delete"></span>
				</a>
			</div>
		</div>
	</div>
</div>
<?php } ?>
</div>
<style>
	body {
		background-color: #f0f0f0;
		/* Light gray background for entire page */
	}

	.custom-container-bg {
		background-color: #f7f7f7;
		/* Soft gray background for the container */
		border-radius: 8px;
		/* Slight rounding for edges */
		padding: 20px;
		/* Internal spacing */
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		/* Subtle shadow for emphasis */
	}

	.card {
		background-color: #fcfcfc;
		/* Very light gray for cards */
		box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
		/* Slightly reduced shadow */
	}

	.card-header {
		background-color: #003d73;
		/* Muted blue for header */
		color: white;
	}

	.card-title {
		color: black;
	}

</style>


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
