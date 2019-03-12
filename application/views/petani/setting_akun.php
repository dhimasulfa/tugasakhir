<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("partials/head.php") ?></head>
<body id="page-top">
<?php $this->
load->view("partials/navbar_petani.php") ?>
<div id="wrapper">
	<?php $this->
	load->view("partials/sidebar_petani.php") ?>
	<div id="content-wrapper">
		<div class="container-fluid">
			<?php $this->
			load->view("partials/breadcrumb.php") ?>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<div class="form-label-group">
							<input type="text" id="name" name="name" class="form-control" placeholder="Nama" required="required" autofocus="autofocus">
							<label for="name">Nama</label>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="form-label-group">
							<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="required">
							<label for="alamat">Alamat</label>
						</div>
					</div>
				</div>
				<div class="col-md-6">
				<div class="form-group">
              <div class="form-label-group">
                <input type="text" name="nohp" id="nohp" class="form-control" placeholder="No Handphone" required="required">
                <label for="nohp">No Handphone</label>
              </div>
            </div>
			</div>
			<div class="col-md-6">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="uname" id="uname" class="form-control" placeholder="Username" required="required">
                <label for="uname">Username</label>
              </div>
            </div>
			</div>
			<div class="col-md-6">
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
			</div>
			<div class="col-md-6">
        <div class="form-group">
        <label class="control-label">Jenis Kelamin</label>
        <div class="col-sm-12">
            <label class="radio-inline"> <input type="radio" name="gender" value ="laki"> Laki - Laki </label>
            <label class="radio-inline"> <input type="radio" name="gender" value ="perempuan"> Perempuan </label>
        </div>
		</div>
    </div>
			</div>
			<!-- Sticky Footer -->
			<?php $this->load->view("partials/footer.php") ?></div>
		<!-- /.content-wrapper -->
	</div>
	<!-- /#wrapper -->
	<?php $this->
	load->view("partials/scrolltop.php") ?> <?php $this->
	load->view("partials/modal.php") ?> <?php $this->
	load->view("partials/js.php") ?>
	<script>
function deleteConfirm(url){
$('#btn-delete').attr('href', url);
$('#deleteModal').modal();
}
	</script>
	</body>
	</html>