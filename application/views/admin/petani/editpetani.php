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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/petani/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/petani/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $product->ptn_id?>" />
							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Nama Petani" value="<?php echo $product->ptn_nama ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" placeholder="Alamat Tempat Tinggal" value="<?php echo $product->ptn_alamat ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">No Hp*</label>
								<input class="form-control <?php echo form_error('nomor') ? 'is-invalid':'' ?>"
								 type="number" name="nomor" placeholder="Nomor Handphone" value="<?php echo $product->ptn_nohp ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('nomor') ?>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label">Jenis Kelamin | <?php echo $product->ptn_gender; ?></label>
								<div class="col-sm-12">
								<?php
								$lk = $product->ptn_gender == 'laki' ? 'checked' : '';
								$pr = $product->ptn_gender == 'perempuan' ? 'checked' : ''; 
								
								echo "
									<label class='radio-inline'> <input type='radio' name='gender' value ='laki' $lk> Laki - Laki </label>
									<label class='radio-inline'> <input type='radio' name='gender' value ='perempuan' $pr> Perempuan </label>"
								?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Username*</label>
								<input class="form-control <?php echo form_error('uname') ? 'is-invalid':'' ?>"
								 type="text" name="uname" placeholder="Username" value="<?php echo $product->ptn_uname ?>" readonly/>
								<div class="invalid-feedback">
									<?php echo form_error('uname') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Password</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="password" name="password" placeholder="Kosongkan jika tidak diubah" value=""/>
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
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
