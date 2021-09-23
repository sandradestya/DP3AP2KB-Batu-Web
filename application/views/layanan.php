<section class="projects_w3ls">
	<div class="container">
		<div class="wthree_head_section">
			<?php foreach ($dataTitle as $key) { ?>
			<h2 class="w3l_header">Layanan <?php echo $key->nama ?></h2>
			<p>Berikut Merupakan Layanan Dari <?php echo $key->nama ?></p>
			<?php } ?>
		</div>

		<?php foreach ($dataLayanan as $key) { ?>
		<div class="row projects_w3ls_top" style="margin: 1em">
			<div class="col-md-7">
				<h4 style="text-align: left; margin: 0 0 0.5em; padding-bottom: 5px; border-bottom: 1px solid #029eb7"><?php echo $key->judul ?></h4>
				<p style="margin: 0.5em 0"><small><b><?php echo $key->caption ?></b></small></p>
				<p style="text-align: justify"><?php echo $key->deskripsi ?></p>
			</div>
			<div class="col-md-5 projects_w3ls_left">
				<div class="col-md-12 gal-sec">
					<div class="gallery-grid1">
						<a title="<?php echo $key->judul ?> - <?php echo $key->nama ?>" href="http://localhost/admin_dinaskwb/img_layanan/<?php echo $key->gambar ?>">
							<img src="http://localhost/admin_dinaskwb/img_layanan/<?php echo $key->gambar ?>" alt=" " class="img-responsive img-fluid" />
						</a>	
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</section>