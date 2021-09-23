<section class="projects_w3ls">
	<div class="container">
		<div class="wthree_head_section">
			<?php foreach ($dataTitle as $key) { ?>
			<h2 class="w3l_header">Detail Kegiatan Dari <?php echo $key->nama ?></h2>
			<p>Berikut Merupakan Detail Kegiatan Dari <?php echo $key->nama ?> - <?php echo $key->judul ?></p>
			<?php } ?>
		</div>

		<?php echo form_open('bidang/detail/'.$this->uri->segment(3)); ?>
		<div class="row projects_w3ls_top" style="margin: 1em">
			<div class="col-md-12 projects_w3ls_left">
				<div class="col-md-12 gal-sec" style="padding: 0; margin-bottom: 2em">
					<div class="gallery-grid1">
						<a title="<?php echo $dataKegiatan[0]->judul ?> - <?php echo $dataBidang[0]->nama ?>" href="http://localhost/admin_dinaskwb/img_kegiatan/<?php echo $key->gambar ?>">
							<img src="http://localhost/admin_dinaskwb/img_kegiatan/<?php echo $key->gambar ?>" alt=" " class="img-responsive img-fluid" />
						</a>	
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<h4 style="text-align: left; margin: 0 0 0.5em; padding-bottom: 5px; border-bottom: 1px solid #029eb7"><?php echo $dataKegiatan[0]->judul ?></h4>
				<p style="margin: 0.5em 0"><small><b><?php echo $dataBidang[0]->nama ?></b></small></p>
				<p style="margin: 0.5em 0"><small><b><?php echo $dataKegiatan[0]->tanggal ?></b></small></p>
				<p style="text-align: justify"><?php echo $dataKegiatan[0]->deskripsi ?></p>
			</div>
		</div>
	</div>
</section>