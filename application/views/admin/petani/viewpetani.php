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
						<a href="<?php echo site_url('admin/petani/add') ?>"><i class="fas fa-plus"></i> Add New</a>
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
									<?php foreach ($tani as $tn): ?>
									<tr>
										<td width="150">
											<?php echo $tn->ptn_nama ?>
										</td>
										<td class="small">
                                            <?php echo substr($tn->ptn_alamat, 0, 120) ?></td>
										<td width="150">
											<?php echo $tn->ptn_nohp ?>
										</td>
										<td width="150">
											<?php echo $tn->ptn_gender ?>
										</td>
										<td width="150">
											<?php echo $tn->ptn_created ?>
										</td>
										<td width="250">
										<?php if ($tn->ptn_status == "terverifikasi") {
											echo "<p class='text-success'>Terverifikasi</p>";
										}else {
											?> 
											<a href="<?php echo site_url('admin/petani/verifikasi/'.$tn->ptn_id) ?>"
											class="btn btn-small btn-warning"> Verifikasi</a>
										<?php }?>
											 
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/petani/edit/'.$tn->ptn_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/petani/delete/'.$tn->ptn_id) ?>')"
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