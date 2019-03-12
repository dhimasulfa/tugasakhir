<?php $this->load->view('tengkulak/head'); ?>
<!-- ========================= SECTION MAIN ========================= -->

<section class="section-main bg padding-y-sm">
<div class="container">
<div class="card">
	<div class="card-body">
<div class="row row-sm">
	<aside class="col-md-3">
<h5 class="text-uppercase">Kategori</h5>
	<ul class="menu-category">
	<?php foreach ($kategori as $kt): ?>
	<li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
		<li> <a href="<?php echo site_url('tengkulak/listing/kategori/'.$kt->ctg_id) ?>"> <?php echo $kt->ctg_nama ?> </a></li>
	</li>
		<?php endforeach; ?>	
	</ul>

	</aside> <!-- col.// -->
	<div class="col-md-6">

<!-- ================= main slide ================= -->
<div class="owl-init slider-main owl-carousel" data-items="1" data-nav="true" data-dots="false">
	<div class="item-slide">
		<img src="<?php echo base_url('asets/assets/images/banners/bauji.jpeg')?>">
	</div>
	<div class="item-slide">
		<img src="<?php echo base_url('asets/assets/images/banners/bauji.jpeg')?>">
	</div>
	<div class="item-slide">
		<img src="<?php echo base_url('asets/assets/images/banners/bauji.jpeg')?>">
	</div>
</div>
<!-- ============== main slidesow .end // ============= -->

	</div> <!-- col.// -->
	<aside class="col-md-3">

<h6 class="title-bg bg-secondary"> Berita Terkini</h6>
<?php foreach ($news as $hp): ?>
<div style="height:100;">	
	<figure class="itemside has-bg border-bottom" style="height: 33%;">
		<img class="img-bg" src="<?php echo base_url('/upload/product/').$hp->news_gambar ?>" height="70">
		<figcaption class="p-2">
			<h6 class="title"><?php echo $hp->news_judul ?> </h6>
			<!-- <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>"> -->
			<a class="nav-link" href="<?php echo site_url('tengkulak/news') ?>">Detail</a>
			<!-- </li> -->
			<!-- <a href="#">Detail</a> -->
		</figcaption>
	</figure>
	<!-- s</li> -->
</div>
<?php endforeach; ?>

	</aside>
</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</div> <!-- card.// -->


</div> <!-- container .//  -->
</section>

<section class="section-content padding-y-sm bg">
<div class="container">

<header class="section-heading heading-line">
	<h4 class="title-section bg">BAWANG MERAH</h4>
</header>

<div class="card">
<div class="row no-gutters">
	<div class="col-md-3">
	
<article href="#" class="card-banner h-100 bg2">
	<div class="card-body zoom-wrap">
		<h5 class="title">PENGERTIAN BAWANG MERAH</h5>
		<p>Bawang merah adalah salah satu varietas tumbuhan berumbi yang dapat hidup di dataran tinggi. 
			Bawang merah disebut seperti itu karena memiliki warna ungu kemerahan pada kulitnya dan dagingnya. </p>
		<a href="#" class="btn btn-warning">Explore</a>
		<img src="<?php echo base_url('asets/assets/images/items/item-sm.png')?>" height="200" class="img-bg zoom-in">
	</div>
</article>

	</div> <!-- col.// -->
	<div class="col-md-9">
<ul class="row no-gutters border-cols">
<?php foreach ($list as $ls): ?>
	<li class="col-6 col-md-3">
	<a href="#" class="itembox"> 
	<div class="card-body">
		<img class="img-wrap" src="<?php echo base_url('/upload/product/').$ls->brg_gambar ?>">
		<hr>
		<figcaption class="info-wrap">
			<a href="#" class="title"><?php echo $ls->brg_deskripsi ?></a>
			<div class="price-wrap">
				<span class="price-new"><?php echo $ls->hrg_nilai ?></span>
				<!-- <del class="price-old">$1980</del> -->
			</div> <!-- price-wrap.// -->
		</figcaption>		
	</div>
	</a>
	</li>
	<?php endforeach; ?>
	
</ul>
	</div> <!-- col.// -->
</div> <!-- row.// -->
	
</div> <!-- card.// -->

</div> <!-- container .//  -->
</section>

<!-- ========================= SECTION MAIN END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y bg">
<div class="container">

<div class="card mb-3">
	<!-- Deals of the week -->

	

</div> <!-- card.// -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= FOOTER ========================= -->

	<!-- Footer -->

	<?php $this->load->view('tengkulak/foot'); ?>