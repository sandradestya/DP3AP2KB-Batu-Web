<section class="gallery">
	<div class="container">
		<div class="wthree_head_section">
			<h2 class="w3l_header">Galeri</h2>
			<p>Galeri Dari Setiap Kegiatan Dalam Segala Bidang</p>
		</div>

		<div class="row agile_gallery_grids w3-agile demo">
			<?php foreach ($dataGaleri as $key) { ?>
			<div class="col-md-4 gal-sec" style="margin: 0 0 1em">
				<div class="gallery-grid1">
					<a title="<?php echo $key->judul ?> - <?php echo $key->nama ?>" href="http://localhost/admin_dinaskwb/img_kegiatan/<?php echo $key->gambar ?>">
						<img src="http://localhost/admin_dinaskwb/img_kegiatan/<?php echo $key->gambar ?>" alt=" " class="img-responsive" />
						<div class="p-mask">
							<h4><?php echo $key->judul ?></h4>
							<p><?php echo $key->nama ?></p>
						</div>
					</a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>