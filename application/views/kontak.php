<section class="contact-agile contact-page">
	<div class="container">
		<div class="wthree_head_section">
			<h2 class="w3l_header">Suara Rakyat</h2>
			<p>Hubungi &amp; Temukan Kami</p>
		</div>

		<div class="contact-eql">
			<!-- <div class="contact-left">
				<h4>Tentang Kami</h4>
				<p class="para-w3-agileits" align="justify">Dinas P3AP2KB merupakan unsur pelaksana urusan pemerintahan di bidang pemberdayaan perempuan dan perlindungan anak, urusan pemerintahan bidang pengendalian penduduk, dan keluarga berencana, serta urusan pemerintahan bidang pemberdayaan masyarakat dan desa.</p>
				
				<h4>Kontak</h4>
				<?php foreach ($dataKontak as $key) { ?>
				<address>
					<div class="add-info">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
						<p><?php echo $key->alamat ?></p>
					</div>
					<div class="add-info">
						<span class="fa fa-clock" aria-hidden="true"></span>
						<p><?php echo $key->jamker ?></p>
					</div>
					<div class="add-info">
						<span class="fa fa-phone" aria-hidden="true"></span>
						<p><?php echo $key->telepon ?></p>
					</div>
					<div class="add-info">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<p><a href="#"><?php echo $key->email ?></a></p>
					</div>
				</address>
				<?php } ?>
			</div> -->
			<div class="contact-middle">
				<h4>Berikan Aspirasi Anda</h4>
					<?php echo form_open_multipart('kontak/create_action'); ?>
					<?php echo validation_errors(); ?>
					<form role="form">
					<div class="form-fields-agileinfo">
						<p>Nama</p>
						<input type="text" name="nama" placeholder="" required="">
					</div>
					<div class="form-fields-agileinfo">
						<p>Profesi</p>
						<input type="text" name="profesi" placeholder="" required="">
					</div>
					<div class="form-fields-agileinfo">
						<p>Pesan</p>
						<textarea name="pesan" placeholder="" required=""></textarea>
					</div>
					<input type="submit" value="KIRIM">
				</form>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>

<section class="map-w3ls">
<?php foreach ($dataKontak as $key) { ?>
	<?php echo $key->maps ?>
<?php } ?>
</section>