<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("partials/sidebar.php") ?>

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
						<a href="<?php echo site_url('admin/petani/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/petani/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Nama Petani" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" placeholder="Alamat Tempat Tinggal" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">No Hp*</label>
								<input class="form-control <?php echo form_error('nomor') ? 'is-invalid':'' ?>"
								 type="number" name="nomor" placeholder="Nomor Handphone" />
								<div class="invalid-feedback">
									<?php echo form_error('nomor') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Jenis Kelamin*</label>
								<input class="form-control <?php echo form_error('gender') ? 'is-invalid':'' ?>"
								 type="text" name="gender" placeholder="Jenis Kelamin" />
								<div class="invalid-feedback">
									<?php echo form_error('gender') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Tanggal*</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal" placeholder="Tanggal" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
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
