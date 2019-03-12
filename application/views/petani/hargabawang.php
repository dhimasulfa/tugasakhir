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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('petani/harga/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
                                        <th>Harga </th>
                                        <th>Tanggal Harga</th>
                                        <th>Id Barang</th>
										<th>Status</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($harga as $hr): ?>
									<tr>
										<td width="150">
											<?php echo $hr->hrg_nilai ?>
										</td>
                                        <td width="150">
											<?php echo $hr->hrg_tanggal ?>
										</td>
                                        <td width="150">
											<?php echo $hr->brg_id ?>
										</td>
										<td width="150">
											<?php echo $hr->hrg_status ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('petani/harga/edit/'.$hr->hrg_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('petani/harga/delete/'.$hr->hrg_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("partials/modal.php") ?>

	<?php $this->load->view("partials/js.php") ?>
	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>

</body>

</html>