	<?php
	include 'Head.php';
	include 'Preloader.php';
	?>

	<!-- ==============================================
    NAVBAR
    =============================================== -->

	<nav hidden>
		<div class="nav-header">
			<!-- Navbar Logo -->
			<a href="Home" class="brand">
				<img class="scrolled" src="assets/img/logo.png" alt="logo">
				<img class="top" src="assets/img/logo.png" alt="logo-scrolled">
			</a>
			<!-- Burger Menu -->
			<button class="toggle-bar">
				<span class="fa fa-bars"></span>
			</button>
		</div>
		<!-- Navbar Links -->
		<ul class="menu">
			<li class="scrollspy active"><a href="#home">Home</a></li>
			<li class="scrollspy"><a href="#about">Mes compétences</a></li>
			<li class="scrollspy"><a href="#about2">Mes qualités</a></li>
			<li class="scrollspy"><a href="#portfolio">Portfolio</a></li>
			<li class="scrollspy"><a href="#contact">Contact</a></li>
		</ul>
	</nav>

	<!-- ==============================================
    BANNER
    =============================================== -->

	<section class="slider-area" id="home">
		<div class="container-fluid">
			<div class="row">
				<div class="owl-carousel main-slider">
					<!-- Single slide 1-->
					<div class="single-slide slide-bg-1">
						<div class="col-md-12">
							<div class="tabel">
								<div class="tabel-cell">
									<div class="slider-content">
										<h3>Alexandra Moullet</h3>
										<h1>Web Développeuse</h1>
										<a href="#contact" class="btn btn-transparent">Travaillons ensemble !</a>
										<a href="#meconnaitre" class="btn btn-white">Me connaitre</a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.single-slide -->

					<!-- Single slide 2 -->
					<div class="single-slide slide-bg-2">
						<div class="col-md-12">
							<div class="tabel">
								<div class="tabel-cell">
									<div class="slider-content">
										<h1>Aidez moi à devenir une Super Front-End dev</h3>
										<a href="#contact" class="btn btn-transparent">Travaillons ensemble !</a>
										<a href="#meconnaitre"class="btn btn-white">Me connaitre</a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.single-slide -->

				</div><!-- /.main-slider -->
			</div>
		</div>
	</section>
