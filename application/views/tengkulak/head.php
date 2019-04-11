<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">

<title>Bawang Merah</title>

<link href="<?php echo base_url('asets/assets/images/favicon.icon')?>" rel="shortcut icon" type="image/x-icon" >

<!-- jQuery -->
<script src="<?php echo base_url('asets/assets/js/jquery-2.0.0.min.js')?>" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="<?php echo base_url('asets/assets/js/bootstrap.bundle.min.js')?>" type="text/javascript"></script>
<link href="<?php echo base_url('asets/assets/css/bootstrap.css')?>" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="<?php echo base_url('asets/assets/fonts/fontawesome/css/fontawesome-all.min.css')?>" type="text/css" rel="stylesheet">

<!-- plugin: fancybox  -->
<script src="<?php echo base_url('asets/assets/plugins/fancybox/fancybox.min.js')?>" type="text/javascript"></script>
<link href="<?php echo base_url('asets/assets/plugins/fancybox/fancybox.min.css')?>" type="text/css" rel="stylesheet">

<!-- plugin: owl carousel  -->
<link href="<?php echo base_url('asets/assets/plugins/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('asets/assets/plugins/owlcarousel/assets/owl.theme.default.css')?>" rel="stylesheet">
<script src="<?php echo base_url('asets/assets/plugins/owlcarousel/owl.carousel.min.js')?>"></script>

<!-- custom style -->
<link href="<?php echo base_url('asets/assets/css/ui.css')?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('asets/assets/css/responsive.css')?>" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="<?php echo base_url('asets/assets/js/script.js')?>" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>

</head>
<body>
<header class="section-header">
<nav class="navbar navbar-top navbar-expand-lg navbar-dark bg-secondary">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</div> <!-- container //  -->
</nav>
<section class="header-main shadow-sm">
		<div class="container">
	<div class="row align-items-center">
		<div class="col-lg-3 col-sm-4">
		<div class="brand-wrap">
			<img class="logo" src="<?php echo base_url('asets/images/onion.png')?>">
			<h2 class="logo-text nav-link">BawangMerahKu</h2>
		</div> <!-- brand-wrap.// -->
		</div>
		<div class="col-lg-4 col-xl-5 col-sm-8">
		<form action="#" class="py-1" class="search-wrap">
				<div class="input-group w-100">
					<select class="custom-select"  name="category_name">
						<option value="">Kategori</option>
						<option value="">Special</option>
						<option value="">Only best</option>
						<option value="">Latest</option>
					</select>
					<select class="custom-select"  name="category_name">
						<option value="">Kecamatan</option>
						<option value="">Special</option>
						<option value="">Only best</option>
						<option value="">Latest</option>
					</select>
				    <!-- <input type="text" class="form-control" style="width:50%;" placeholder="Search"> -->
				    <div class="input-group-append">
				      <button class="btn btn-dangerous" type="submit">
				        <i class="fa fa-search"></i> Search 
				      </button>
				    </div>
			    </div>
			</form> 
		</div> 
		 <div class="col-lg-5 col-xl-4 col-sm-12">
			<div class="widgets-wrap float-right">
				<a href="<?php echo site_url('tengkulak/Order') ?>" class="widget-header mr-3">
					<div class="icontext">
						<div class="icon-wrap"><img class="logo" src="<?php echo base_url('asets/images/shopping-bag.png')?>"></div>
						<div class="text-wrap">
							<span class="small badge badge-danger">0</span>
							<div>Cart</div>
						</div>
					</div>
				</a>
			
				<div class="widgets-wrap float-right">
						<div class="icontext">
							<div class="icon-wrap"><img class="logo" src="<?php echo base_url('asets/images/user.png')?>"></div>
							<div class="text-wrap">
							<ul class="navbar-nav ml-auto ml-md-0">
        	<li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"> My Acount
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo site_url('petani/auth') ?>">Petani</a>
                <a class="dropdown-item" href="<?php echo site_url('tengkulak/auth') ?>">Tengkulak</a>
            </div>
        </li>
    </ul>
							</div>									
						</div>

						<div class="widgets-wrap float-right">
				<a href="<?php echo base_url('tengkulak/auth'); ?>" class="widget-header mr-3" data-toggle="modal" data-target="#logoutModal">
					<div class="icontext">
						<div class="icon-wrap"><img class="logo" src="<?php echo base_url('asets/images/route.png')?>"></div>
						<div class="text-wrap">
							<div>Lokasi</div>
						</div>
					</div>
				</a>

				</div>  <!-- widget-header .// -->
			</div> <!-- widgets-wrap.// -->
		</div> <!-- col.// -->
	</div> <!-- row.// -->
		</div> <!-- container.// -->
	</section> <!-- header-main .// -->
</header> <!-- section-header.// -->