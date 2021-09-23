<section class="projects_w3ls">
  <div class="container">
    <div class="wthree_head_section">
      <?php foreach ($dataTitle as $key) { ?>
      <h2 class="w3l_header">Kegiatan Dari <?php echo $key->nama ?></h2>
      <p>Berikut Merupakan Kegiatan Dari <?php echo $key->nama ?></p>
      <?php } ?>
    </div>

    <div class="col-md-2"></div>
   <div class="container col-md-8" id="grafikOt" ></div>
   <div class="col-md-2"></div>
   <div class="col-md-2"></div>

    <?php foreach ($dataBidang as $key) { ?>
    <div class="row projects_w3ls_top" style="margin: 1em">
      <div class="col-md-4 projects_w3ls_left">
        <img class="img-fluid" src="http://localhost/admin_dinaskwb/img_kegiatan/<?php echo $key->gambar ?>" alt="">
      </div>
      <div class="col-md-8">
        <h4 style="text-align: left; margin: 0 0 0.5em; padding-bottom: 5px; border-bottom: 1px solid #029eb7">
          <?php echo $key->judul ?>
        </h4>
        <p style="margin-bottom: 0.3em"><small><b><?php echo $key->nama ?></b></small></p>
        <p style="text-align: justify"><?php echo $key->caption ?></p>
        <p align="right" style="margin: 0.5em 0"><small><?php echo $key->tanggal ?></small></p>
        <p align="right"><a href="<?=base_url('index.php/bidang/detail/').$key->id_kegiatan ?>"><button class="btn btn-info">DETAIL</button></a></p>
      </div>
    </div>
    <?php } ?>
  </div>
</section>