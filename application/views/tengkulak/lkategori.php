<?php $this->load->view('tengkulak/head'); ?>

<!-- ========================= SECTION PAGETOP ========================= -->

<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y">
<div class="container">

<div class="row">
	<aside class="col-sm-3">

<div class="card card-filter">
	<article class="card-group-item">
		<header class="card-header">
			<a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
				<i class="icon-action fa fa-chevron-down"></i>
				<h6 class="title">Kategori</h6>
			</a>
		</header>
		<div style="" class="filter-content collapse show" id="collapse22">
			<div class="card-body">
			
				<ul class="list-unstyled list-lg">
				<?php foreach ($kategori as $kt): ?>
	<li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
		<li> <a href="<?php echo site_url('tengkulak/listing/kategori/'.$kt->ctg_id) ?>"> <?php echo $kt->ctg_nama ?> </a></li>
	</li>
		<?php endforeach; ?>
				</ul>  
			</div> <!-- card-body.// -->
		</div> <!-- collapse .// -->
	</article> <!-- card-group-item.// -->

	<article class="card-group-item">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse44">
				<i class="icon-action fa fa-chevron-down"></i>
				<h6 class="title">Kecamatan </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse44">
			<div class="card-body">
			<form>
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round"></span>
				    Leces
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round"></span>
				    Dringu
				  </span>
				</label> <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round"></span>
				    Kraksan
				  </span>
				</label>  <!-- form-check.// -->
				
			</form>
			</div> <!-- card-body.// -->
		</div> <!-- collapse .// -->
	</article> <!-- card-group-item.// -->
</div> <!-- card.// -->


	</aside> <!-- col.// -->
	<main class="col-sm-9">

	<?php foreach ($list as $ls): ?>
<article class="card card-product">
	<div class="card-body">
	<div class="row">
		<aside class="col-sm-3">
			<div class="img-wrap"><img src="<?php echo base_url('/upload/product/').$ls->brg_gambar ?>"></div>
		</aside> 
		<article class="col-sm-6">
				<h4 class="title"> <?php echo $ls->ctg_nama ?> </h4>
				
				<p> <?php echo $ls->brg_deskripsi ?> </p>
				<!-- <dl class="dlist-align">
				  <dt>Harga /kg</dt>
				  <dd><?php echo $ls->hrg_nilai ?></dd>
				</dl>  item-property-hor .// -->
				<dl class="dlist-align">
				  <dt>Luas Lahan</dt>
				  <dd><?php echo $ls->brg_luas ?></dd>
				</dl>  <!-- item-property-hor .// -->
				<dl class="dlist-align">
				  <dt>Lokasi</dt>
				  <dd><?php echo $ls->kec_nama ?></dd>
				</dl>  <!-- item-property-hor .// -->
			
		</article> <!-- col.// -->
		<aside class="col-sm-3 border-left">
			<div class="action-wrap">
				<div class="price-wrap h4">
					<span class="price"><?php echo $ls->hrg_nilai ?></span>
				</div> <!-- info-price-detail // -->
				<br>
				<p>
					<a href="#" class="btn btn-primary"> Tambah Keranjang </a>
				</p>
			
			</div> <!-- action-wrap.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</article> <!-- card product .// -->
<?php endforeach; ?>



	</main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= SECTION  ========================= -->

<!-- ========================= SECTION  END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<?php $this->load->view('tengkulak/foot'); ?>