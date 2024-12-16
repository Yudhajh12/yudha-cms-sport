<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $judul;?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/slicknav.css">
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/slick.css">
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?= base_url('assets/aznew/');?>assets/css/yudha.css">
	<style>
		#navigation {
			list-style: none;
			padding: 0;
			margin: 0;
			display: flex;
			/* Atur menu menjadi horizontal */
			gap: 20px;
			/* Spasi antar item */
			align-items: center;
		}

		#navigation li {
			display: inline-block;
		}

		#navigation li a {
			text-decoration: none;
			color: #333;
			padding: 37px 47px;
			transition: color 0.3s ease;
		}

		#navigation li a:hover {
			color: #007bff;
			/* Warna saat hover */
		}

		.btn-primary {
			margin-left: auto;
			/* Dorong tombol Login ke sisi kanan */
		}

	</style>

</head>

<body>
	<header>
		<!-- Header Start -->
		<div class="header-area">
			<div class="main-header ">
				<div class="header-mid d-none d-md-block">
					<div class="container">
						<div class="row d-flex align-items-center">
							<!-- Logo -->
							<div class="col-xl-3 col-lg-3 col-md-3">
								<div class="logo">
									<a href="" class="navbar-brand font-weight-bold text-secondary"
										style="font-size: 50px">
										<span class="text-primary"> <?= $konfig->judul_website;?></span>
									</a>
								</div>
							</div>
							<div class="col-xl-9 col-lg-9 col-md-9">
								<div class="header-banner f-right ">
									<img src="<?= base_url('assets/aznew/');?>assets/img/hero/header_card.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-bottom header-sticky">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-xl-13 col-lg-13 col-md-17 header-flex">
								<!-- sticky -->
								<div class="sticky-logo">
									<a href="" class="navbar-brand font-weight-bold text-secondary"
										style="font-size: 60px">
										<span class="text-primary"> <?= $konfig->judul_website;?></span>
									</a>
								</div>
								<!-- Main-menu -->
								<div class="main-menu d-none d-md-block">
									<nav>
										<ul id="navigation" class="d-flex">
											<li><a href="<?= base_url('') ?>">Home</a></li>
											<?php foreach ($kategori as $kate) { ?>
											<li>
												<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"
													class="nav-item nav-link">
													<?= $kate['nama_kategori'] ?>
												</a>
											</li>
											<?php } ?>
											<li>
												<a href="<?= base_url('auth') ?>" class="btn btn-primary px-4">Login</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>



	<!--================Blog Area =================-->
	<section class="blog_area section-padding">
		<div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span style="font-size: 30px" class="mb-4"> Welcome To Yudhaa Land</span>
                </p>
                <h1 class="mb-4"><?= $nama_kategori; ?></h1>
            </div><br>
			<div class="row">
				<!-- Konten Utama -->
				<div class="col-lg-8 blog_left_sidebar">
					<?php foreach ($konten as $uu) { ?>
					<article class="blog_item">
						<div class="blog_item_img">
							<img class="card-img rounded-0"
								src="<?= base_url('assets/corona/upload/konten/' . $uu['foto']) ?>">
						</div>
						<div class="blog_details">
							<a class="d-inline-block" href="single-blog.html">
								<h2><?= $uu['judul'] ?></h2>
							</a>
							<ul class="blog-info-link">
								<li><a href="#"><i class="fa fa-user"></i><?= $uu['nama'] ?></a></li>
								<li><a href="#"><i class="fa fa-comments"></i><?= $uu['nama_kategori'] ?></a></li>
							</ul>
							<a href="<?= base_url('home/artikel/' . $uu['slug']) ?>"
								class="btn btn-primary px-4 mx-auto my-2"
								style="color:white; background-color:grey;">Baca Selengkapnya</a>
						</div>
					</article>
					<?php } ?>
					<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Previous">
									<i class="ti-angle-left"></i>
								</a>
							</li>
							<li class="page-item">
								<a href="#" class="page-link">1</a>
							</li>
							<li class="page-item active">
								<a href="#" class="page-link">2</a>
							</li>
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Next">
									<i class="ti-angle-right"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- Sidebar Kanan -->
				<div class="col-lg-4">
					<div class="blog_right_sidebar">
						<!-- Search Widget -->
						<aside class="single_sidebar_widget search_widget">
							<form action="#">
								<div class="form-group">
									<div class="input-group mb-3">
										<input type="text" class="form-control" placeholder='Search Keyword'
											onfocus="this.placeholder = ''"
											onblur="this.placeholder = 'Search Keyword'">
										<div class="input-group-append">
											<button class="btns" type="button"><i class="ti-search"></i></button>
										</div>
									</div>
								</div>
								<button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
									type="submit">Search</button>
							</form>
						</aside>
						<!-- Category Widget -->
						<aside class="single_sidebar_widget post_category_widget">
							<h4 class="widget_title">Category</h4>
							<ul class="list cat-list">
								<?php foreach ($kategori as $kate) { ?>
								<li>
									<a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" class="d-flex">
										<p><?= $kate['nama_kategori'] ?></p>
									</a>
								</li>
								<?php } ?>
							</ul>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--================Blog Area =================-->

	<footer>
		<!-- Footer Start-->
		<div class="footer-area footer-padding fix">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="col-lg-4 col-md-6 mb-5">
						<div class="single-footer-caption">
							<div class="single-footer-caption">
								<!-- logo -->
								<div class="logo">
									<a href="" class="navbar-brand font-weight-bold text-secondary"
										style="font-size: 50px">
										<span class="text-white"> <?= $konfig->judul_website;?></span>
									</a>
								</div>
								<div class="footer-tittle">
									<div class="footer-pera">
										<p><?= $konfig->profil_website;?></p>
									</div>
								</div>
								<!-- social -->
								<div class="footer-social">
									<a href="<?= $konfig->facebook;?>"><i class="fab fa-facebook"></i></a>
									<a href="<?= $konfig->instagram;?>"><i class="fab fa-instagram"></i></a>
									<a href="<?= $konfig->no_wa;?>"><i class="fab fa-whatsapp"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-5"> <br>
						<h3 class="text-white mb-3">Contact Us</h3>
						<div class="d-flex">
							<h4 class="fa fa-map--alt text-white"></h4>
							<div class="pi-3">
								<h5 class="text-white">Alamat</h5>
								<p><?= $konfig->alamat;?></p>
							</div>
						</div>
						<div class="d-flex">
							<h4 class="fa fa-map-envelope-alt text-white"></h4>
							<div class="pi-3">
								<h5 class="text-white">Email</h5>
								<p><?= $konfig->email;?></p>
							</div>
						</div>
						<div class="d-flex">
							<h4 class="fa fa-map-phone-alt text-white"></h4>
							<div class="pi-3">
								<h5 class="text-white">Phone</h5>
								<p><?= $konfig->no_wa;?></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mb-5"><br>
						<h3 class="text-primary mb-4">Quick Links</h3>
						<div class="d-flex flex-column justify-contact-start">
							<a class="text-primary mb-2" href="<?= base_url()?>"><i
									class="fa fa-angel-right mr-2"></i>Home</a>
							<?php foreach ($kategori as $kate) { ?>
							<a class="text-primary mb-2" href="<<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
								<i class="fa fa-angel-right mr-2"></i><?= $kate['nama_kategori']?></a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
				<p class="m-0 text-center text-white">
					&copy;
					<a class="text-primary font-weight-bold" href="#"><?= $konfig->judul_website;?></a>.
					All Rights Reserved.
				</p>
			</div>
		</div>
	</footer>

	<!-- JS here -->

	<!-- All JS Custom Plugins Link Here here -->
	<script src="<?= base_url('assets/aznew/');?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<!-- Jquery, Popper, Bootstrap -->
	<script src="<?= base_url('assets/aznew/');?>assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="<?= base_url('assets/aznew/');?>assets/js/popper.min.js"></script>
	<script src="<?= base_url('assets/aznew/');?>assets/js/bootstrap.min.js"></script>
	<!--   Jquery Mobile Menu -->
	<script src="<?= base_url('assets/aznew/');?>assets/js/jquery.slicknav.min.js"></script>

	<!-- Jquery Slick , Owl-Carousel Plugins -->
	<script src="<?= base_url('assets/aznew/');?>assets/js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/aznew/');?>assets/js/slick.min.js"></script>

	<!-- One Page, Animated-HeadLin -->
	<script src="<?= base_url('assets/aznew/');?>assets/js/wow.min.js"></script>
	<script src="<?= base_url('assets/aznew/');?>assets/js/animated.headline.js"></script>

	<!-- Scrollup, nice-select, sticky -->
	<script src="<?= base_url('assets/aznew/');?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?= base_url('assets/aznew/');?>assets/js/jquery.nice-select.min.js"></script>
	<script src="<?= base_url('assets/aznew/');?>assets/js/jquery.sticky.js"></script>
	<script src="<?= base_url('assets/aznew/');?>assets/js/jquery.magnific-popup.js"></script>

	<!-- contact js -->
	<script src="<?= base_url('assets/aznew/');?>assets/js/contact.js"></script>
	<script src="<?= base_url('assets/aznew/');?>assets/js/jquery.form.js"></script>
	<script src="<?= base_url('assets/aznew/');?>assets/js/jquery.validate.min.js"></script>
	<script src="<?= base_url('assets/aznew/');?>assets/js/mail-script.js"></script>
	<script src="<?= base_url('assets/aznew/');?>assets/js/jquery.ajaxchimp.min.js"></script>

	<!-- Jquery Plugins, main Jquery -->
	<script src="<?= base_url('assets/aznew/');?>assets/js/plugins.js"></script>
	<script src="<?= base_url('assets/aznew/');?>assets/js/main.js"></script>

</body>

</html>
