<?php $this->load->view('tengkulak/head'); ?>

<section class="section-content padding-y bg">
<div class="container">

<div class="card">
	<div class="card-body">
	<?php foreach ($news as $nw): ?>
	<div class="row no-gutters">
		<aside class="col-sm-6 border-right">

		
<article class="gallery-wrap"> 
<aside class="col-sm-12">
	<div class="img-wrap"><img src="<?php echo base_url('/upload/product/').$nw->news_gambar ?>" height="250"></div>
</aside> 
</article> <!-- gallery-wrap .end// -->
		</aside>
		<aside class="col-sm-6">

	<article class="card-body">
<!-- short-info-wrap -->
	<h3 class="title mb-3"><?php echo $nw->news_judul ?> </h3>

<div class="mb-3"> 
	<var class="price h3 text-warning"> 
		<span class="currency"></span><span class="num"><?php echo $nw->news_penulis ?></span>
	</var> 
	<!-- <span>/per kg</span>  -->
</div> <!-- price-detail-wrap .// -->
<dl>
  <dt><?php echo $nw->news_judul ?></dt>
  <dd><p><?php echo $nw->news_deskripsi ?> </p></dd>
</dl>
<dl class="row">
  <dt class="col-sm-3">Tanggal</dt>
  <dd class="col-sm-9"><?php echo $nw->news_tgl ?></dd>

  <!-- <dt class="col-sm-3">Jumlah Total</dt>
  <dd class="col-sm-9">4 ton </dd> -->

</dl>
<div class="rating-wrap">

	<ul class="rating-stars">
		<li style="width:80%" class="stars-active"> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> 
		</li>
		<li>
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
			<i class="fa fa-star"></i> 
		</li>
	</ul>
</div> <!-- rating-wrap.// -->
<!-- <hr> -->
	<!-- <a href="#" class="btn  btn-warning"> <i class="fa fa-envelope"></i> Tambah Keranjang </a> -->
	<!-- <a href="#" class="btn  btn-outline-warning"> Start Order </a> -->
<!-- short-info-wrap .// -->
</article> <!-- card-body.// -->

	</div>
</div>
<?php endforeach; ?>
</div> <!-- container .//  -->
</section>

<?php $this->load->view('tengkulak/foot'); ?>