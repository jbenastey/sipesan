<!DOCTYPE HTML>
<html>


<head>
	<title>Pemesanan</title>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<meta name="keywords" content="Template, html, premium, themeforest"/>
	<meta name="description" content="TheBox - premium e-commerce template">
	<meta name="author" content="Tsoy">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link
		href='<?= base_url() ?>assets/frontend/fonts/fonts.googleapis.com/cssb98c.css?family=Roboto:500,300,700,400italic,400'
		rel='stylesheet' type='text/css'>
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
	<link href='<?= base_url() ?>assets/frontend/fonts/fonts.googleapis.com/css1c0e.css?family=Open+Sans:400,700,600'
		  rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/font-awesome.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/styles.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/mystyles.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/switcher.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/animate.min.css"/>
	<link rel="alternate stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/frontend/css/schemes/bright-turquoise.css" title="bright-turquoise"
		  media="all"/>
	<link rel="alternate stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/frontend/css/schemes/turkish-rose.css" title="turkish-rose" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/salem.css"
		  title="salem" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/hippie-blue.css"
		  title="hippie-blue" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/mandy.css"
		  title="mandy" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/green-smoke.css"
		  title="green-smoke" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/horizon.css"
		  title="horizon" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/cerise.css"
		  title="cerise" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/brick-red.css"
		  title="brick-red" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/de-york.css"
		  title="de-york" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/shamrock.css"
		  title="shamrock" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/studio.css"
		  title="studio" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/leather.css"
		  title="leather" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/denim.css"
		  title="denim" media="all"/>
	<link rel="alternate stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/css/schemes/scarlet.css"
		  title="scarlet" media="all"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/node_modules/dropify/dist/css/dropify.min.css">
</head>

<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<div class="demo_changer" id="demo_changer">
		<div class="demo-icon fa fa-sliders"></div>
		<div class="form_holder">
			<div class="line"></div>
			<p>Color Scheme</p>
			<div class="predefined_styles" id="styleswitch_area">
				<a class="styleswitch" href="indexc392.html?default=true" style="background:#486D97;"></a>
				<a class="styleswitch" href="#" data-src="bright-turquoise" style="background:#0EBCF2;"></a>
				<a class="styleswitch" href="#" data-src="turkish-rose" style="background:#B66672;"></a>
				<a class="styleswitch" href="#" data-src="salem" style="background:#12A641;"></a>
				<a class="styleswitch" href="#" data-src="hippie-blue" style="background:#4F96B6;"></a>
				<a class="styleswitch" href="#" data-src="mandy" style="background:#E45E66;"></a>
				<a class="styleswitch" href="#" data-src="green-smoke" style="background:#96AA66;"></a>
				<a class="styleswitch" href="#" data-src="horizon" style="background:#5B84AA;"></a>
				<a class="styleswitch" href="#" data-src="cerise" style="background:#CA2AC6;"></a>
				<a class="styleswitch" href="#" data-src="brick-red" style="background:#cf315a;"></a>
				<a class="styleswitch" href="#" data-src="de-york" style="background:#74C683;"></a>
				<a class="styleswitch" href="#" data-src="shamrock" style="background:#30BBB1;"></a>
				<a class="styleswitch" href="#" data-src="studio" style="background:#7646B8;"></a>
				<a class="styleswitch" href="#" data-src="leather" style="background:#966650;"></a>
				<a class="styleswitch" href="#" data-src="denim" style="background:#1A5AE4;"></a>
				<a class="styleswitch" href="#" data-src="scarlet" style="background:#FF1D13;"></a>
			</div>
			<div class="line"></div>
			<p>Layout</p>
			<div class="predefined_styles"><a class="btn btn-xs" href="#" id="btn-wide">Wide</a>&nbsp;&nbsp;<a
					class="btn btn-xs" href="#" id="btn-boxed">Boxed</a>
			</div>
			<div class="line"></div>
			<p>Background Patterns</p>
			<div class="predefined_styles" id="patternswitch_area">
				<a class="patternswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/binding_light.png);"></a>
				<a class="patternswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/binding_dark.png);"></a>
				<a class="patternswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/dark_fish_skin.png);"></a>
				<a class="patternswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/dimension.png);"></a>
				<a class="patternswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/escheresque_ste.png);"></a>
				<a class="patternswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/food.png);"></a>
				<a class="patternswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/giftly.png);"></a>
				<a class="patternswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/grey_wash_wall.png);"></a>
				<a class="patternswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/ps_neutral.png);"></a>
				<a class="patternswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/pw_maze_black.png);"></a>
				<a class="patternswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/pw_pattern.png);"></a>
				<a class="patternswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/patterns/simple_dashed.png);"></a>
			</div>
			<div class="line"></div>
			<p>Background Images</p>
			<div class="predefined_styles" id="bgimageswitch_area">
				<a class="bgimageswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/bike.jpg);"
				   data-src="<?= base_url() ?>assets/frontend/img/backgrounds/bike.jpg"></a>
				<a class="bgimageswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/flowers.jpg);"
				   data-src="<?= base_url() ?>assets/frontend/img/backgrounds/flowers.jpg"></a>
				<a class="bgimageswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/wood.jpg);"
				   data-src="<?= base_url() ?>assets/frontend/img/backgrounds/wood.jpg"></a>
				<a class="bgimageswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/taxi.jpg);"
				   data-src="<?= base_url() ?>assets/frontend/img/backgrounds/taxi.jpg"></a>
				<a class="bgimageswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/phone.jpg);"
				   data-src="<?= base_url() ?>assets/frontend/img/backgrounds/phone.jpg"></a>
				<a class="bgimageswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/road.jpg);"
				   data-src="<?= base_url() ?>assets/frontend/img/backgrounds/road.jpg"></a>
				<a class="bgimageswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/keyboard.jpg);"
				   data-src="<?= base_url() ?>assets/frontend/img/backgrounds/keyboard.jpg"></a>
				<a class="bgimageswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/beach.jpg);"
				   data-src="<?= base_url() ?>assets/frontend/img/backgrounds/beach.jpg"></a>
				<a class="bgimageswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/street.jpg);"
				   data-src="<?= base_url() ?>assets/frontend/img/backgrounds/street.jpg"></a>
				<a class="bgimageswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/nature.jpg);"
				   data-src="<?= base_url() ?>assets/frontend/img/backgrounds/nature.jpg"></a>
				<a class="bgimageswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/bridge.jpg);"
				   data-src="<?= base_url() ?>assets/frontend/img/backgrounds/bridge.jpg"></a>
				<a class="bgimageswitch" href="#"
				   style="background-image: url(<?= base_url() ?>assets/frontend/img/switcher/cameras.jpg);"
				   data-src="<?= base_url() ?>assets/frontend/img/backgrounds/cameras.jpg"></a>
			</div>
			<div class="line"></div>
		</div>
	</div>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
		<h3 class="widget-title">Member Login</h3>
		<p>Welcome back, friend. Login to get started</p>
		<hr/>
		<?= form_open('login') ?>
		<div class="form-group">
			<label>Username</label>
			<input class="form-control" type="text" name="username" required autocomplete="off"/>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input class="form-control" type="password" name="password" required autocomplete="off"/>
		</div>
		<input class="btn btn-primary" type="submit" value="Login" name="login"/>
		<?= form_close() ?>
		<div class="gap gap-small"></div>
		<ul class="list-inline">
			<li><a href="#nav-account-dialog" class="popup-text">Belum Punya Akun?</a>
			</li>
			<!--			<li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>-->
			<!--			</li>-->
		</ul>
	</div>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
		<h3 class="widget-title">Buat Akun</h3>
		<p>Ready to get best offers? Let's get started!</p>
		<hr/>
		<?= form_open('register') ?>
		<div class="form-group">
			<label>Username</label>
			<input class="form-control" type="text" required name="username" autocomplete="off"/>
		</div>
		<div class="form-group">
			<label>E-mail</label>
			<input class="form-control" type="text" required name="email" autocomplete="off"/>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input class="form-control" type="password" required name="password" autocomplete="off"/>
		</div>
		<div class="form-group">
			<label>Repeat Password</label>
			<input class="form-control" type="password" required name="password" autocomplete="off"/>
		</div>
		<input class="btn btn-primary" type="submit" value="Buat Akun" name="register"/>
		<?= form_close() ?>
		<div class="gap gap-small"></div>
		<ul class="list-inline">
			<li><a href="#nav-login-dialog" class="popup-text">Sudah Punya Akun ?</a>
			</li>
		</ul>
	</div>
	<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
		<h3 class="widget-title">Password Recovery</h3>
		<p>Enter Your Email and We Will Send the Instructions</p>
		<hr/>
		<form>
			<div class="form-group">
				<label>Your Email</label>
				<input class="form-control" type="text"/>
			</div>
			<input class="btn btn-primary" type="submit" value="Recover Password"/>
		</form>
	</div>
	<nav class="navbar navbar-inverse navbar-main yamm">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
						data-target="#main-nav-collapse" area_expanded="false"><span
						class="sr-only">Main Menu</span><span class="icon-bar"></span><span
						class="icon-bar"></span><span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= base_url('') ?>">
					<p style="color: white;"><i class="fa fa-print"></i> Surya Madani Digital Printing</p></a>
			</div>
			<div class="collapse navbar-collapse" id="main-nav-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Pesan Sekarang<i
								class="drop-caret" data-toggle="dropdown"></i></a>
						<ul class="dropdown-menu dropdown-menu-category">
							<li><a href="#"><i class="fa fa-sticky-note dropdown-menu-category-icon"></i>Stiker</a>
								<div class="dropdown-menu-category-section">
									<div class="dropdown-menu-category-section-inner">
										<div class="dropdown-menu-category-section-content">
											<div class="row">
												<div class="col-md-6">
													<h5 class="dropdown-menu-category-title">Stiker</h5>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
														doloribus eos eum labore laborum maxime odio odit placeat
														repellendus reprehenderit, sapiente similique, tenetur unde
														velit veritatis. Error iure possimus veniam!</p>
													<a class="btn btn-lg btn-primary" href="#">Pesan Stiker Sekarang <i
															class="fa fa-caret-right"></i></a>
												</div>
											</div>
										</div>
										<img class="dropdown-menu-category-section-theme-img"
											 src="<?= base_url() ?>assets/frontend/img/sipesan/stiker.png"
											 alt="Image Alternative text" title="Stiker"
											 style="width: 350px; right: -10px;"/>
									</div>
								</div>
							</li>
							<li><a href="#"><i class="fa fa-photo dropdown-menu-category-icon"></i>Spanduk</a>
								<div class="dropdown-menu-category-section">
									<div class="dropdown-menu-category-section-inner">
										<div class="dropdown-menu-category-section-content">
											<div class="row">
												<div class="col-md-6">
													<h5 class="dropdown-menu-category-title">Spanduk</h5>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
														doloribus eos eum labore laborum maxime odio odit placeat
														repellendus reprehenderit, sapiente similique, tenetur unde
														velit veritatis. Error iure possimus veniam!</p>
													<a class="btn btn-lg btn-primary" href="<?= base_url('spanduk') ?>">Pesan
														Spanduk Sekarang <i class="fa fa-caret-right"></i></a>
												</div>
											</div>
										</div>
										<img class="dropdown-menu-category-section-theme-img"
											 src="<?= base_url() ?>assets/frontend/img/sipesan/spanduk.png"
											 alt="Image Alternative text" title="Spanduk"
											 style="width: 350px;right: -10px; bottom: -10px;"/>
									</div>
								</div>
							</li>
							<li><a href="#"><i class="fa fa-id-card dropdown-menu-category-icon"></i>Kartu Nama</a>
								<div class="dropdown-menu-category-section">
									<div class="dropdown-menu-category-section-inner">
										<div class="dropdown-menu-category-section-content">
											<div class="row">
												<div class="col-md-6">
													<h5 class="dropdown-menu-category-title">Kartu Nama</h5>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
														doloribus eos eum labore laborum maxime odio odit placeat
														repellendus reprehenderit, sapiente similique, tenetur unde
														velit veritatis. Error iure possimus veniam!</p>
													<a class="btn btn-lg btn-primary" href="#">Pesan Kartu Nama Sekarang
														<i class="fa fa-caret-right"></i></a>
												</div>
											</div>
										</div>
										<img class="dropdown-menu-category-section-theme-img"
											 src="<?= base_url() ?>assets/frontend/img/sipesan/kartunama.png"
											 alt="Image Alternative text" title="Kartu Nama"
											 style="width: 350px; right: -30px"/>
									</div>
								</div>
							</li>
							<li><a href="#"><i class="fa fa-file-image-o dropdown-menu-category-icon"></i>Brosur</a>
								<div class="dropdown-menu-category-section">
									<div class="dropdown-menu-category-section-inner">
										<div class="dropdown-menu-category-section-content">
											<div class="row">
												<div class="col-md-6">
													<h5 class="dropdown-menu-category-title">Brosur</h5>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
														doloribus eos eum labore laborum maxime odio odit placeat
														repellendus reprehenderit, sapiente similique, tenetur unde
														velit veritatis. Error iure possimus veniam!</p>
													<a class="btn btn-lg btn-primary" href="#">Pesan Brosur Sekarang <i
															class="fa fa-caret-right"></i></a>
												</div>
											</div>
										</div>
										<img class="dropdown-menu-category-section-theme-img"
											 src="<?= base_url() ?>assets/frontend/img/sipesan/brosur.png"
											 alt="Image Alternative text" title="Brosur"
											 style="width: 350px; right: -10px"/>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-left navbar-main-search" role="search">

				</form>
				<ul class="nav navbar-nav navbar-right">
					<?php if ($this->session->userdata('session_level') == null): ?>
						<li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text">Login</a>
						</li>
						<li><a href="#nav-account-dialog" data-effect="mfp-move-from-top" class="popup-text">Buat
								Akun</a>
						</li>
					<?php else: ?>
						<li class="dropdown">
							<a href="<?= base_url('profil') ?>"><i
									class="fa fa-user-circle"></i> <?= $this->session->userdata('session_username') ?>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?= base_url('profil') ?>"><i class="fa fa-user" style="width: 20%"></i>
										Profil Saya</a></li>
								<li><a href="<?= base_url('pesanan') ?>"><i class="fa fa-list" style="width: 20%"></i>
										Data Pesanan</a></li>
								<li><a href="<?= base_url('logout') ?>"><i class="fa fa-sign-out"
																		   style="width: 20%"></i> Logout</a></li>
							</ul>
						</li>
					<?php endif; ?>
					<li>
						<?php
						$ci =& get_instance();
						$ci->load->model('BayarModel');
						$keranjang = $ci->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'), 'belum')->row_array();
						if ($keranjang == null):
							?>
							<a href="<?= base_url('keranjang') ?>"><i
									class="fa fa-shopping-cart"></i></a>
						<?php
						else:
							?>
							<a href="<?= base_url('keranjang') ?>"><i
									class="fa fa-shopping-cart animated infinite tada"></i></a>
						<?php
						endif;
						?>
					</li>
				</ul>
			</div>
		</div>
	</nav>
