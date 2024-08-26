<div class="container article-container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <?php
        foreach($artikel as $data) { ?>
            <div class="card-body">
                <div class="border-none p-4 mt-3">
                <img src="<?php echo base_url() ?>assets/gallery/<?php echo $data->gambar_artikel?>" class="card-img-top" width="500px" height="500%" alt="...">
                    <h2><?php echo $data->nama_artikel ?></h2>
                    <p><small>Kategori Berita: <?php echo $data->nama_kategori ?></small></p>
                    <p><?php echo $data->isi_artikel ?></p>
                    <p class="text-muted mb-3">
                                <small>
                                    <i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($data->tgl_posting)); ?>
                                </small>
                            </p>
                </div>
            </div>
        <?php } ?>
    </div>
   
</div>
</div>

