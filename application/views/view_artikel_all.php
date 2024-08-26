<div class="container mt-5 pt-5">
    <h3 class="fst-italic mb-3 border-bottom text-center">Artikel-Artikel</h3>
    <div class="container">
        <div class="row g-4">
            <?php $n=1; foreach($artikel as $data) { ?>
            <div class="col-md-4">
                <div class="card shadow-lg mb-4 rounded-3">
                    <img src="<?php echo base_url()?>assets/gallery/<?php echo $data->gambar_artikel?>" class="card-img-top" alt="<?php echo $data->nama_artikel ?>">
                    <div class="card-body">
                        <article class="blog-post">
                            <h5 class="card-title"><?php echo $data->nama_artikel ?></h5>
                            <p class="text-muted mb-2">
                                <small>Kategori Berita: <?php echo $data->nama_kategori ?></small>
                            </p>
                            <p class="text-muted mb-3">
                                <small>
                                    <i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($data->tgl_posting)); ?>
                                </small>
                            </p>
                            <p class="card-text" style="text-align: justify;">
                                <?php echo substr($data->isi_artikel, 0, 150); ?>...
                            </p>
                            <a href="<?php echo base_url()?>index.php/Beranda/Artikel/<?php echo $data->id_artikel ?>" class="btn btn-primary rounded-pill">Baca Selengkapnya</a>
                        </article>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
