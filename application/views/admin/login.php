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
            <?php if ($this->session->flashdata('gagal')): ?>
                    <div class="alert alert-danger" role="alert">
					<?php echo $this->session->flashdata('gagal'); ?>
				</div>
				<?php endif; ?>
          <form action="" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="uname" name="uname" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                <label for="uname">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
           
            <input type="submit" value="Masuk" class="btn btn-success btn-block">
          </form>
         
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