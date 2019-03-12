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

						<a href="<?php echo site_url('admin/news/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/news/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $product->news_id?>" />
							<div class="form-group">
								<label for="name">Judul*</label>
								<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"
								 type="text" name="judul" placeholder="Judul Berita" value="<?php echo $product->news_judul ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama Penulis*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama Penulis" value="<?php echo $product->news_penulis ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Tanggal*</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal" placeholder="Tanggal" value="<?php echo $product->news_tgl ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Isi Berita*</label>
								<input class="form-control <?php echo form_error('isi') ? 'is-invalid':'' ?>"
								 type="text" name="isi" placeholder="Isi Berita" value="<?php echo $product->news_deskripsi ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('isi') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Foto*</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" value="<?php echo $product->news_gambar ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
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
