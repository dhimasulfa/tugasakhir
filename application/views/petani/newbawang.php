<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("partials/navbar_petani.php") ?>
	<div id="wrapper">

		<?php $this->load->view("partials/sidebar_petani.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('petani/bawang/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('petani/bawang/add') ?>" method="post" enctype="multipart/form-data" >
							<!-- <div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Nama Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div> -->

							<div class="form-group">
								<label for="exampleSelect1">Kategori</label>
								<select class="form-control" id="exampleSelect1" name="selcat">
								<?php foreach ($categori as $row) {  
								echo "<option value='".$row->ctg_id."'>".$row->ctg_nama."</option>";
								}
								?>
								</select>
							</div>

							<!-- <div class="form-group">
								<label for="name">Harga*</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="price" placeholder="Harga Produk" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div> -->

							<div class="form-group">
								<label for="name">Foto*</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Berat Total*</label>
								<input class="form-control <?php echo form_error('berat') ? 'is-invalid':'' ?>"
								 type="text" name="berat" placeholder="Berat Total" />
								<div class="invalid-feedback">
									<?php echo form_error('berat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Luas Lahan*</label>
								<input class="form-control <?php echo form_error('luas') ? 'is-invalid':'' ?>"
								 type="text" name="luas" placeholder="Luas Lahan" />
								<div class="invalid-feedback">
									<?php echo form_error('luas') ?>
								</div>
							</div>

							<!-- <div class="form-group">
								<label for="name">Lokasi*</label>
								<input class="form-control <?php echo form_error('lokasi') ? 'is-invalid':'' ?>"
								 type="text" name="lokasi" placeholder="Lokasi" />
								<div class="invalid-feedback">
									<?php echo form_error('lokasi') ?>
								</div>
							</div> -->

							<div class="form-group">
								<label for="exampleSelect1">Lokasi</label>
								<select class="form-control" id="exampleSelect1" name="sellok">
								<?php foreach ($kecamatan as $row) {  
								echo "<option value='".$row->kec_id."'>".$row->kec_nama."</option>";
								}
								?>
								</select>
							</div>


							<div class="form-group">
								<label for="name">Deskripsi*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Deskripsi Produk"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>


							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("partials/scrolltop.php") ?>

		<?php $this->load->view("partials/js.php") ?>

</body>

</html>
