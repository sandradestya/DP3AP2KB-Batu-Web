<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>.: Dinas KWB :.</title>
	<script type="application/x-javascript">
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
	</script>

	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?=base_url()?>assets/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css">

	<link href="<?=base_url()?>assets/css/chocolat.css" rel="stylesheet" type="text/css" media="screen">

	<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all">

	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

	<style type="text/css">
		.dropdown-divider:last-child {
			border-top: none !important;
			margin: 0 !important;
		}
	</style>
</head>
<body>

	<!-- header -->
	<header>

		<div class="banner1">
			<div class="header-bar">
				<div class="container">

				<div class="col-md-12 col-sm-4 col-2 header-top-left" id="google_translate_element" style="text-align: right"></div>
					<script type="text/javascript">
					function googleTranslateElementInit() {
					new google.translate.TranslateElement({pageLanguage: 'id', includedLanguages: 'en,id', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
					}
					</script>
					<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
						
					<nav class="navbar navbar-expand-lg navbar-light">
						<div class="hedder-up">
							<h1><a class="navbar-brand" href="<?=site_url()?>index.php/home"><img src="<?=base_url()?>assets/images/logo.png" class="img-responsive" style="max-width: 100px"></a></h1>
						</div>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="<?=base_url()?>index.php/home" class="nav-link">Home</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">Profil</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="<?=base_url()?>index.php/tentang">Profil DP3AP2KB</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?=base_url()?>index.php/struktur">Struktur Organisasi</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?=base_url()?>assets/tupoksi.pdf">Tupoksi</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">Bidang</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="<?=base_url()?>index.php/statistika">Statistika</a>
										<div class="dropdown-divider"></div>
										<?php foreach ($menuBidang as $key) { ?>
											<a class="dropdown-item" href="<?=base_url('index.php/bidang/all/').$key->id_bidang ?>"><?php echo $key->nama ?></a>
											<div class="dropdown-divider"></div>
										<?php } ?>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">Prosedur SOP</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php foreach ($menuDinas as $key) { ?>
											<a class="dropdown-item" href="<?=base_url('index.php/layanan/all/').$key->id_dinas ?>"><?php echo $key->nama ?></a>
											<div class="dropdown-divider"></div>
										<?php } ?>
									</div>
								</li>
								<li class="nav-item">
									<a href="<?=base_url()?>index.php/galeri" class="nav-link">Galeri</a>
								</li>
								<li class="nav-item">
									<a href="<?=base_url()?>index.php/kontak" class="nav-link">Bilik Aduan</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->

	<!-- content -->
		<?php echo $content; ?>
	<!-- end content -->

	<!-- footer -->
	<footer>
		<section class="w3ls_address_mail_footer_grids">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 w3ls_footer_grid_left">
						<h5 class="sub-head">Alamat</h5>
						<p>Jalan Panglima Sudirman No. 507
							<span>Pesanggrahan, Kota Batu, Jawa Timur</span>
							<span>65313</span>
						</p>
					</div>
					<div class="col-sm-4 w3ls_footer_grid_left">
						<h5 class="sub-head">Telepon</h5>
						<p>
							<span>(0341) 3061892</span>
						</p>
					</div>
					<div class="col-sm-4 w3ls_footer_grid_left">
						<h5 class="sub-head">Email</h5>
						<p>
							<span>
								<a href="">dp3ap2@batukota.com</a>
							</span>
						</p>
					</div>
				</div>
			</div>
		</section>
	</footer>

	<section class="copyright-wthree">
		<div class="container">
			<p>&copy; 2018 Dinas Kota Batu. All Rights Reserved | Design by
				<a href="#" target="_blank">AniFebritaSandra</a>
			</p>

			<div class="w3l-social">
				<ul>
					<li>
						<a href="https://www.facebook.com/?sk=welcome" class="fab fa-facebook-f"></a>
					</li>
					<li>
						<a href="https://www.instagram.com/dp3ap2kb_batu/?hl=id" class="fab fa-instagram"></a>
					<li>
					<li>
						<a href="http://localhost/admin_dinaskwb/" target="_blank" class="fab fa-chrome"></a>
					<li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end footer -->

</body>
	<script src="<?=base_url()?>assets/js/jquery.min.js"></script>

	<script src="<?=base_url()?>assets/js/jquery.chocolat.js"></script>
	<script type="text/javascript">
	$(function () {
		$('.gallery-grid1 a').Chocolat();
	});
	</script>

	<script src="<?=base_url()?>assets/js/owl.carousel.js"></script>
	<script type="text/javascript">
	$(document).ready(function () {
		$("#owl-demo2").owlCarousel({
			items: 1,
			lazyLoad: false,
			autoPlay: true,
			navigation: false,
			navigationText: false,
			pagination: true,
		});
	});
	</script>

	<script src="<?=base_url()?>assets/js/responsiveslides.min.js"></script>
	<script type="text/javascript">
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			manualControls: '#slider3-pager',
		});
	});
	</script>

	<script src="<?=base_url()?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.countup.js"></script>
	<script type="text/javascript">
	$('.counter-agileits-w3layouts').countUp();
	</script>

	<script src="<?=base_url()?>assets/js/move-top.js"></script>
	<script src="<?=base_url()?>assets/js/easing.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>

	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
	</script>

	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
</html>