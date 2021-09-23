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
	<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all">

	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

	 <link href="<?php echo base_url();?>assets/video/assets/css/jquery.mb.YTPlayer.min.css" rel="stylesheet">
	 <link href="<?php echo base_url();?>assets/video/assets/css/jquery.mb.vimeo_player.min.css" rel="stylesheet">
	 <link href="<?php echo base_url();?>assets/video/assets/css/main.css" rel="stylesheet">
        	
        	<!-- JS  video-->

		<script src="<?php echo base_url();?>assets/video/assets/js/vendor/modernizr-2.8.3.min.js"></script>
		<script src="<?php echo base_url();?>assets/video/assets/js/vendor/jquery-1.12.0.min.js"></script>


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

		<section class="main_section_agile"> 
			<div class="agileits_w3layouts_banner_nav">
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
										<a href="<?=site_url()?>index.php/home" class="nav-link">Home</a>
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
		</section>
	</header>
	<!-- end header -->

	<!-- banner -->
	<section>
	<div class="site" id="page">
	  <a class="skip-link sr-only" href="#main">Skip to content</a>
	  <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
	  <section class="hero-section hero-section--video clearfix rotate">
	    <div class="hero-section__wrap">
	      <div class="hero-section__option">
	        <div data-video="youtube" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=2UBR5vLZ82A',containment:'body',autoPlay:true, mute:true, startAt:42, opacity:10}">Video Youtube</div>
	        <!-- <div data-video="vimeo" class="player" data-property="{videoURL:'https://vimeo.com/90969239',containment:'body',autoPlay:true, mute:true, startAt:0, opacity:1}">Video Vimeo</div> -->
	      </div>
	      <!-- .hero-section__option -->
	      <div class="banner-area relative" id="home>
	  		<div class="overlay overlay-bg"></div>
					<div class="container">
						<div class="row fullscreen d-flex justify-content-center align-items-center">
							<div class="banner-content col-lg-12 col-md-12 -content-center ">
								<h1 align="center"> GREAT THINGS NEVER CAME
								</h1>
								<H1 align="center"> FROM COMFORT ZONES</H1>
							</div>											
						</div>
					</div>
	   		 </div>
	</div>
</section>
	<!-- end banner -->

	<!-- pemimpin kwb -->
	<section class="w3-services" style="background-color: #fff">
		<div class="container" style="max-width: 1300px">
			<div class="wthree_head_section">
				<h2 class="w3l_header">Pemerintahan Kota Batu</h2>
				<p>Dinas P3AP2KB merupakan unsur pelaksana urusan pemerintahan di bidang pemberdayaan perempuan dan perlindungan anak, urusan pemerintahan bidang pengendalian penduduk, dan keluarga berencana, serta urusan pemerintahan bidang pemberdayaan masyarakat dan desa.</p>
			</div>

			<div class="row w3-services-grids">
				<div class="col-lg-6 w3-services-left-grid">
					<div class="row w3-icon-grid-gap1">
						<div class="col-md-7 w3-icon-grid1" style="padding: 0; text-align: justify">
							<div class="Supp">
								<h3 style="text-align: right">Dewanti Rumpoko</h3>
								<h3 style="text-align: right; margin: 0 0 0.5em"><small style="font-size: 70%">WALIKOTA BATU</small></h3>
								<p>Hj. Dra Dewanti Rumpoko, M.Si adalah Dosen Fakultas Psikologi, Universitas Merdeka Malang. Terpilih pada pemilihan kepala daerah (Pilkada) kota Batu pada tahun 2017-2022.</p>
							</div>
						</div>
						<div class="col-md-5 w3-icon-grid1">
							<img src="<?=base_url()?>assets/images/walikota.jpg" class="img-fluid" alt="" style="border-radius: 50%">		
						</div>
					</div>
				</div>

				<div class="col-lg-6 w3-services-right-grid">
					<div class="row w3-icon-grid-gap1">
						<div class="col-md-5 w3-icon-grid1">
							<img src="<?=base_url()?>assets/images/wawalikota.jpg" class="img-fluid" alt="" style="border-radius: 50%">		
						</div>
						<div class="col-md-7 w3-icon-grid1" style="padding: 0; text-align: justify">
							<div class="Supp">
								<h3>Punjul Santoso</h3>
								<h3 style="margin: 0 0 0.5em"><small style="font-size: 70%">WAKIL WALIKOTA BATU</small></h3>
								<p>Punjul Santoso yang memiliki nama lengkap Ir H. Punjul Santoso, MM. menjabat sebagai Wakil Wali Kota Batu mendampingi Wali Kota Ibu Dewanti Rumpoko pada tahun 2017-2022.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end pemimpin kwb -->

	<!-- visi dan misi -->
	<section class="w3-services" style="background-color: #029EB7">
		<div class="container" style="max-width: 1300px">
			<div class="wthree_head_section">
				<h2 class="w3l_header" style="color: #fff">Visi dan Misi</h2>
				<p style="color: #fff">Pemerintahan Kota Batu</p>
			</div>

			<div class="row w3-services-grids">
				<div class="col-lg-12 w3-services-right-grid">
					<div class="row w3-icon-grid-gap1">
						<div class="col-md-12 w3-icon-grid1" style="padding: 0; text-align: justify">
							<div class="Supp">
								<h3 style="text-align: center; color: #fff">VISI</h3>
								<p style="color: #fff">Kota Batu Sentra Pertanian Organik berbasis kepariwasataan internasional ditunjang oleh pendidikan yang tepat guna dan berdaya saing ditopang sumberdaya (alam, manusia, dan budaya) yang tangguh diselenggarakan oleh pemerintahan yang baik, kreatif, inovatif, dijiwai oleh keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-12 w3-services-right-grid">
					<div class="row w3-icon-grid-gap1">
						<div class="col-md-12 w3-icon-grid1" style="padding: 0; text-align: justify">
							<div class="Supp" style="float: none">
								<h3 style="text-align: center; color: #fff; margin-top: 2em">MISI</h3>
								<ol start="1" style="color: #fff; float: left; padding: 0 3em" class="col-md-6">
									<li>Peningkatan Kualitas Hidup Antar Umat Beragama</li>
									<li>Reformasi Birokrasi dan Tata Kelola Pemerintahan</li>
									<li>Mengembangkan Pertanian Organik dan Perdagangan Hasil Pertanian Organik</li>
									<li>Meningkatkan Posisi Peran Dari Kota Sentra Pariwisata Menjadi Kota Kepariwisataan Internasional</li>
									<li>Optimalisasi Pemerintahan Daerah</li>
									<li>Peningkatan Kualitas Pendidik Dan Lembaga Pendidikan</li>
								</ol>
								<ol start="7" style="color: #fff; float: left; padding: 0 3em" class="col-md-6">
									<li>Peningkatan Kualitas Kesehatan</li>
									<li>Pengembangan Infrastuktur (Sektor Fisik) Khususnya Perkantoran Pemerintah , Fasilitas Publik, Prasarana Dan Sarana Lalu Lintas</li>
									<li>Meningkatkan Penyelenggaraan Pemerintah Desa, Guna Peningkatkan Pelayanan Kepada Masyarakat</li>
									<li>Menciptakan Stabilitas Dan Kehidupan Politik Di Kota Batu Yang Harmonis Dan Demokratis</li>
									<li>Pemberdayaan Masyarakat Melalui Koperasi Dan UKM</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end visi dan misi -->

	<!-- berita terkini -->
	<section class="projects_w3ls">
		<div class="container">
			<div class="wthree_head_section">
				<h2 class="w3l_header">Berita Terkini</h2>
				<p>Semua Kegiatan Dalam Segala Bidang</p>
			</div>

			<div class="row projects_w3ls_top">
				<?php foreach ($dataKegiatan as $key) { ?>
				<div class="col-md-4 projects_w3ls_left">
					<img class="img-fluid" src="http://localhost/admin_dinaskwb/img_kegiatan/<?php echo $key->gambar ?>" alt="">
					<h4 style="text-align: center; margin: 0.8em 0 0.5em; padding-bottom: 5px; border-bottom: 1px solid #029eb7"><?php echo $key->judul ?></h4>
					<p style="margin-bottom: 0.3em"><small><b><?php echo $key->nama ?></b></small></p>
					<p style="text-align: justify"><?php echo $key->caption ?></p>
					<p align="right" style="margin: 0.3em"><small><?php echo $key->tanggal ?></small></p>
					<p align="right"><a href="<?=base_url('index.php/bidang/detail/').$key->id_kegiatan ?>"><button class="btn btn-info">DETAIL</button></a></p>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- end berita terkini -->

	<!-- suara rakyat -->
	<section class="test">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header w3_agileits_header two">Suara Rakyat</h3>
			</div>

			<div class=" test-gr">
				<div class=" test-gri1">
					<div id="owl-demo2" class="owl-carousel">
						<?php foreach ($dataAspirasi as $key) { ?>
						<div class="row agile">
							<div class="col-md-12 test-grid">
								<div class="test-grid1-agileinfo hrms">
									<img src="<?=base_url()?>assets/images/icon-sr.png" alt="" class="img-r">
									<p><?php echo $key->pesan ?></p>
									<h4><?php echo $key->nama ?></h4>
									<span><?php echo $key->profesi ?></span>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end suara rakyat -->

	<!-- pelayanan -->
 <section class="what_you" style="background-color: #fff">
  <div class="container">
   <div class="wthree_head_section">
    <h3 class="w3l_header">Tautan</h3>
   </div>

   <div class="row about-info-grids">
    <div class="col-md-4 about-info about-info1">
     
     <a href="http://puprkotabatu.xyz/index.php?mod=laporan1&pg=laporan_form" target="_blank"><h4>Laporan untuk Jalan Berlubang</h4></a>
     <div class="h4-underline"></div>
     <p></p>
    </div>

    <div class="col-md-4 about-info about-info2">
     
     <a href="http://batukota.go.id/"><h4>Portal Resmi Pemerintahan Batu</h4></a>
     <div class="h4-underline"></div>
     <p></p>
    </div>

    <div class="col-md-4 about-info about-info3">
    
     <a href="http://ppid.batukota.go.id/"><h4>PPID (Pejabat Pengelola Informasi dan Dokumentasi)</h4></a>
     <div class="h4-underline"></div>
     <p></p>
    </div>
   </div>
   <div class="bord"></div>
   <div class="row about-info-grids">
    <div class="col-md-4 about-info about-info1">
   
     <a href="http://lpse.batukota.go.id/eproc4"><h4>LPSE (Layanan Pengadaan Secara Elektronik)</h4></a>
     <div class="h4-underline"></div>
     <p></p>
    </div>

    <div class="col-md-4 about-info about-info2">
    
     <a href="http://bkkbn.go.id/"><h4>BKKBN (Badan Kependudukan dan Keluarga Berencana Nasional)</h4></a>
     <div class="h4-underline"></div>
     <p></p>
    </div>

    <div class="col-md-4 about-info about-info3">
    
     <a href="http://agropolitan.tv/"><h4>AGROPOLITAN TV</h4></a>
     <div class="h4-underline"></div>
     <p></p>
    </div>
   </div>
  </div>
 </section>
 <!-- end pelayanan -->

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
						<a href="https://www.facebook.com/?sk=welcome" target="_blank" class="fab fa-facebook-f"></a>
					</li>
					<li>
						<a href="https://www.instagram.com/dp3ap2kb_batu/?hl=id" target="_blank" class="fab fa-instagram"></a>
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

	<!-- JS video -->
	        <script src="<?php echo base_url();?>assets/video/assets/js/plugins/jquery.mb.YTPlayer.min.js"></script>
	        <script src="<?php echo base_url();?>assets/video/assets/js/plugins/jquery.mb.vimeo_player.min.js"></script>
	        <script src="<?php echo base_url();?>assets/video/assets/js/plugins/animate-headline.js"></script>
	        <script src="<?php echo base_url();?>assets/video/assets/js/main.js"></script>

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