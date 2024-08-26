
  <!-- Article Section -->
  <div class="container article-container mt-5">
    <div class="row">
      <div class="col-lg-12">
      <?php
                            $n=1; foreach($produk as $data)
                            {?>
          <div class="article-card mb-4">
          <img src="<?php echo base_url() ?>assets/gallery/<?php echo $data->gambar_produk ?>" class="card-img-top" alt="..." width="50%" height="40%">

            <div class="article-card-body">
              <h2><?php echo $data->nama_produk ?></h2>
              <p><small>Kategori Berita: <?php echo $data->nama_kategori_produk ?></small></p>
              <p align="justify"><?php echo $data->isi_produk ?></p>
              <a href="https://wa.me/?text=Hallo%20saya%20ingin%20order%20sofa" class="btn btn-danger btn-sm">Pesan Sekarang</a>
              <a href="<?php echo base_url()?>index.php/Beranda/detail_produk/<?php echo $data->id_produk ?>" class="btn btn-primary">Detail</a>

              
            </div>
          </div>
        <?php 
            } // end if
           // end foreach
        ?>
      </div>
    </div>

  </div>

