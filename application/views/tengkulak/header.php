<!DOCTYPE html>
<html lang="en">
<head>
<title>Bawang Merah</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/asets/') ?>styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url('/asets/') ?>plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/asets/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/asets/') ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/asets/') ?>plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/asets/') ?>plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/asets/') ?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/asets/') ?>styles/responsive.css">
</head>

<body>

	<div class="super_container">
		
		<!-- Header -->
		
		<header class="header">
	
			<!-- Top Bar -->
	
			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							
							<div class="top_bar_content ml-auto">
								<div class="top_bar_menu">
									<ul class="standard_dropdown top_bar_dropdown">
										
									</ul>
								</div>
								<div class="top_bar_user">
									<div class="user_icon"><img src="<?php echo base_url('/asets/') ?>images/user.svg" alt=""></div>
									<div><a href="<?php echo base_url('/asets/') ?>#">Register</a></div>
									<div><a href="<?php echo base_url('/asets/') ?>#">Sign in</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>		
			</div>
	
			<!-- Header Main -->
	
			<div class="header_main">
				<div class="container">
					<div class="row">
	
						<!-- Logo -->
						<div class="col-lg-2 col-sm-3 col-3 order-1">
							<div class="logo_container">
								<div style="color:tomato" class="logo"><a href="<?php echo base_url('/asets/') ?>#">BmKu</a></div>
							</div>
						</div>
	
						<!-- Search -->
						<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
							<div class="header_search">
								<div class="header_search_content">
									<div class="header_search_form_container">
										<form action="#" class="header_search_form clearfix">
											<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
											<div class="custom_dropdown">
												<div class="custom_dropdown_list">
													<span class="custom_dropdown_placeholder clc">All Categories</span>
													<i class="fas fa-chevron-down"></i>
													<ul class="custom_list clc">
														<li><a class="clc" href="<?php echo base_url('/asets/') ?>#">All Categories</a></li>
														<li><a class="clc" href="<?php echo base_url('/asets/') ?>#">BAUJI</a></li>
														<li><a class="clc" href="<?php echo base_url('/asets/') ?>#">BATU IJO</a></li>
														<li><a class="clc" href="<?php echo base_url('/asets/') ?>#">TAJUK</a></li>
														<li><a class="clc" href="<?php echo base_url('/asets/') ?>#">BIRU LANCOR</a></li>
													</ul>
												</div>
											</div>
											<button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?php echo base_url('/asets/') ?>images/search.png" alt=""></button>
										</form>
									</div>
								</div>
							</div>
						</div>
	
						<!-- Wishlist -->
						<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
							<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist d-flex flex-row align-items-center justify-content-end">
									<div class="wishlist_content">
										
									</div>
								</div>
	
								<!-- Cart -->
								<div class="cart">
									<div class="cart_container d-flex flex-row align-items-center justify-content-end">
										<div class="cart_icon">
											<img src="<?php echo base_url('/asets/') ?>images/cart.png" alt="">
											<div class="cart_count"><span>0</span></div>
										</div>
										<div class="cart_content">
											<div class="cart_text"><a href="<?php echo base_url('/asets/') ?>#">Cart</a></div>
											<div style="color:tomato" class="cart_price"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Main Navigation -->
	
			<nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col">
							
							<div class="main_nav_content d-flex flex-row">
	
								<!-- Categories Menu -->
	
								<div class="cat_menu_container">
									<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
										<div class="cat_burger"><span></span><span></span><span></span></div>
										<div class="cat_menu_text">categories</div>
									</div>
	
									<ul class="cat_menu">
										<li><a href="#">BAUJI<i class="fas fa-chevron-right ml-auto"></i></a></li>
										<li><a href="#">BATU IJO<i class="fas fa-chevron-right"></i></a></li>
										<li><a href="#">BIRU LANCOR<i class="fas fa-chevron-right"></i></a></li>
										<li><a href="#">TAJUK<i class="fas fa-chevron-right"></i></a></li>
									</ul>
								</div>
	
								
	
								<!-- Menu Trigger -->
	
								<div class="menu_trigger_container ml-auto">
									<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
										<div class="menu_burger">
											<div class="menu_trigger_text">menu</div>
											<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
										</div>
									</div>
								</div>
	
							</div>
						</div>
					</div>
				</div>
			</nav>
			
		
	</header>
	