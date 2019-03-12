<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("partials/head.php") ?>
    <!-- <link href="<?php echo base_url() ?>css/custom.css" rel="stylesheet"> -->
</head>

<body id="page-top">
<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login Admin</div>
        <div class="card-body">
            <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
          <form action="" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="name" name="name" class="form-control" placeholder="Nama" required="required" autofocus="autofocus">
                <label for="name">Nama</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="required">
                <label for="alamat">Alamat</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="nohp" id="nohp" class="form-control" placeholder="No Handphone" required="required">
                <label for="nohp">No Handphone</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="uname" id="uname" class="form-control" placeholder="Username" required="required">
                <label for="uname">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
        <div class="form-group">
        <label class="control-label">Jenis Kelamin</label>
        <div class="col-sm-12">
            <label class="radio-inline"> <input type="radio" name="gender" value ="laki"> Laki - Laki </label>
            <label class="radio-inline"> <input type="radio" name="gender" value ="perempuan"> Perempuan </label>
        </div>
    </div>
            <input type="submit" value="Masuk" class="btn btn-success btn-block">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo site_url('petani/auth/') ?>">Punya akun? Login.</a>
          </div>
        </div>
      </div>
    </div>


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