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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<!-- <a href="<?php echo site_url('admin/tengkulak/add') ?>"><i class="fas fa-plus"></i> Add New</a> -->
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
										<th>No. Hp</th>
                                        <th>Jenis Kelamin</th>
										<th>Tanggal Pembuatan</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($tengkulak as $tkl): ?>
									<tr>
										<td width="150">
											<?php echo $tkl->tkl_nama ?>
										</td>
										<td class="small">
                                            <?php echo substr($tkl->tkl_alamat, 0, 120) ?>...</td>
										<td width="150">
											<?php echo $tkl->tkl_nohp ?>
										</td>
										<td width="150">
											<?php echo $tkl->tkl_gender ?>
										</td>
										<td width="150">
											<?php echo $tkl->tkl_created ?>
										</td>
										<td width="250">
										<?php if ($tkl->tkl_status == "terverifikasi") {
											echo "<p class='text-success'>Terverifikasi</p>";
										}else {
											?> 
											<a href="<?php echo site_url('admin/tengkulak/verifikasi/'.$tkl->tkl_id) ?>"
											class="btn btn-small btn-warning"> Verifikasi</a>
										<?php }?>
											 
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/tengkulak/edit/'.$tkl->tkl_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/tengkulak/delete/'.$tkl->tkl_id) ?>')"
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