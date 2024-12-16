<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $judul_halaman ?></title>
	<!-- plugins:css -->
	<link rel="stylesheet"
		href="<?php echo base_url('assets/corona') ?>/template/assets/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url('assets/corona') ?>/template/assets/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet"
		href="<?php echo base_url('assets/corona') ?>/template/assets/vendors/jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet"
		href="<?php echo base_url('assets/corona') ?>/template/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url('assets/corona') ?>/template/assets/vendors/owl-carousel-2/owl.carousel.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url('assets/corona') ?>/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="<?php echo base_url('assets/corona') ?>/template/assets/css/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/corona') ?>/template/assets/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
				<a class="sidebar-brand brand-logo" href="<?php echo base_url('Home') ?>"><img
						src="<?php echo base_url('assets/corona') ?>/template/assets/images/logo.svg" alt="logo" /></a>
				<a class="sidebar-brand brand-logo-mini" href="index.html"><img
						src="<?php echo base_url('assets/corona') ?>/template/assets/images/logo-mini.svg"
						alt="logo" /></a>
			</div>
			<ul class="nav">
				<li class="nav-item profile">
					<div class="profile-desc">
						<div class="profile-pic">
							<div class="count-indicator">
								<img class="img-xs rounded-circle "
									src="<?php echo base_url('assets/corona') ?>/template/assets/images/faces/face15.jpg"
									alt="">
								<span class="count bg-success"></span>
							</div>
							<div class="profile-name">
								<h5 class="mb-0 font-weight-normal"><?= $this->session->userdata('nama');?></h5>
								<span><?= $this->session->userdata('level');?></span>
							</div>
						</div>
						<a href="#" id="profile-dropdown" data-toggle="dropdown"><i
								class="mdi mdi-dots-vertical"></i></a>
						<div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
							aria-labelledby="profile-dropdown">
							<a href="#" class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-dark rounded-circle">
										<i class="mdi mdi-settings text-primary"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-dark rounded-circle">
										<i class="mdi mdi-onepassword  text-info"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-dark rounded-circle">
										<i class="mdi mdi-calendar-today text-success"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
								</div>
							</a>
						</div>
					</div>
				</li>
				<li class="nav-item nav-category">
					<span class="nav-link">Navigation</span>
				</li>
				<?php $menu = $this->uri->segment(2); ?>
				<li class="nav-item menu-items <?php if($menu == 'home') { echo "active"; } ?>">
					<a class="nav-link" href="<?= site_url('admin/home') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-speedometer"></i>
						</span>
						<span class="menu-title">Dashboard</span>
					</a>
				</li>
				<li class="nav-item menu-items <?php if($menu == 'carousel') { echo "active"; } ?>">
					<a class="nav-link" href="<?= site_url('admin/carousel') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-contacts"></i>
						</span>
						<span class="menu-title">Carousel</span>
					</a>
				</li>
				<li class="nav-item menu-items <?php if($menu == 'kategori') { echo "active"; } ?>">
					<a class="nav-link" href="<?= site_url('admin/kategori') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-table-large"></i>
						</span>
						<span class="menu-title">Kategori Konten</span>
					</a>
				</li>
				<li class="nav-item menu-items <?php if($menu == 'konten') { echo "active"; } ?>">
					<a class="nav-link" href="<?= site_url('admin/konten') ?>">
						<span class="menu-icon tf-icons bx bx-cog">
							<i class="mdi mdi-table-large"></i>
						</span>
						<span class="menu-title">Konten</span>
					</a>
				</li>
				<?php if($this->session->userdata('level') == 'admin') { ?>
				<li class="nav-item menu-items <?php if($menu == 'user') { echo "active"; } ?>">
					<a class="nav-link" href="<?= site_url('admin/user') ?>">
						<span class="menu-icon tf-icons bx bx-user">
							<i class="mdi mdi-table-large"></i>
						</span>
						<span class="menu-title">User</span>
					</a>
				</li>
				<li class="nav-item menu-items <?php if($menu == 'konfigurasi') { echo "active"; } ?>">
					<a class="nav-link" href="<?= site_url('admin/konfigurasi') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-table-large"></i>
						</span>
						<span class="menu-title">Konfigurasi</span>
					</a>
				</li>
				<?php } ?>
			</ul>
		</nav>

		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<div style="background:radial-gradient(circle, #2c2c2c, #595959, #d4d4d4);" class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					<?= $contents; ?>
				</div>
			</div>
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar p-0 fixed-top d-flex flex-row">
				<div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
					<a class="navbar-brand brand-logo-mini" href="index.html"><img
							src="<?php echo base_url('assets/corona') ?>/template/assets/images/logo-mini.svg"
							alt="logo" /></a>
				</div>
				<div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
					<ul class="navbar-nav navbar-nav-right">
						<div class="nav-item d-flex align-items-left">
							<?= $judul_halaman ?>
						</div>
						<li class="nav-item dropdown">
							<a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
								<div class="navbar-profile">
									<img class="img-xs rounded-circle"
										src="<?php echo base_url('assets/corona') ?>/template/assets/images/faces/face15.jpg"
										alt="">
									<i class="mdi mdi-menu-down d-none d-sm-block"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
								aria-labelledby="profileDropdown">
								<div class="dropdown-divider"></div>
								<a class="dropdown-item preview-item">
									<div class="preview-thumbnail">
										<div class="preview-icon bg-dark rounded-circle">
											<i class="mdi mdi-settings text-success"></i>
										</div>
									</div>
									<div class="preview-item-content">
										<p class="preview-subject mb-1">Password</p>
									</div>
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item preview-item" href="<?= base_url('auth/logout')?>">
									<div class="preview-thumbnail">
										<div class="preview-icon bg-dark rounded-circle">
											<i class="mdi mdi-logout text-danger"></i>
										</div>
									</div>
									<div class="preview-item-content">
										<p class="preview-subject mb-1">Log out</p>
									</div>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<script src="<?php echo base_url('assets/corona') ?>/template/assets/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="<?php echo base_url('assets/corona') ?>/template/assets/vendors/chart.js/Chart.min.js"></script>
	<script src="<?php echo base_url('assets/corona') ?>/template/assets/vendors/progressbar.js/progressbar.min.js">
	</script>
	<script src="<?php echo base_url('assets/corona') ?>/template/assets/vendors/jvectormap/jquery-jvectormap.min.js">
	</script>
	<script
		src="<?php echo base_url('assets/corona') ?>/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js">
	</script>
	<script src="<?php echo base_url('assets/corona') ?>/template/assets/vendors/owl-carousel-2/owl.carousel.min.js">
	</script>
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?php echo base_url('assets/corona') ?>/template/assets/js/off-canvas.js"></script>
	<script src="<?php echo base_url('assets/corona') ?>/template/assets/js/hoverable-collapse.js"></script>
	<script src="<?php echo base_url('assets/corona') ?>/template/assets/js/misc.js"></script>
	<script src="<?php echo base_url('assets/corona') ?>/template/assets/js/settings.js"></script>
	<script src="<?php echo base_url('assets/corona') ?>/template/assets/js/todolist.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page -->
	<script src="<?php echo base_url('assets/corona') ?>/template/assets/js/dashboard.js"></script>
	<!-- End custom js for this page -->
	<script>
		$('#menghilang').delay('slow').slideDown('slow').delay(10000).slideUp(600);

	</script>
</body>

</html>
