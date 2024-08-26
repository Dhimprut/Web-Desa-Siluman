<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url()?>assets/front/bootstrap/img/3.png">
  <title>Desa Siluman</title>
  <link href="<?php echo base_url()?>assets/front/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
/* Tambahkan kelas parent yang lebih spesifik untuk galeri */
.gallery-container .card-img-top {
  object-fit: cover;
  height: 200px; /* Adjust the height to suit your design */
}

.gallery-container .card-body {
  text-align: center;
}

.gallery-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.gallery-container .card {
  margin: 15px;
  max-width: 300px; /* Adjust card width as needed */
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.gallery-container h2 {
  margin-bottom: 30px; /* Add margin to ensure space below the title */
}

  </style>
</head>
<body>

  <!-- Container for Gallery -->
  <div class="container pt-5 mt-5">
    <div class="gallery-container">
      <?php foreach ($gallery as $data) { ?>
        <div class="card">
          <img src="<?php echo base_url() ?>assets/gallery/<?php echo $data->gambar ?>" class="card-img-top" alt="Gallery Image">
          <div class="card-body">
            <h2><?php echo $data->judul_gallery ?></h2>
            <p><?php echo $data->deskripsi ?></p>
            <a href="https://wa.me/<?php echo $data->whatsapp;?>?text=Hallo%20saya%20ingin%20order%20sofa" class="btn btn-danger btn-sm">Pesan Sekarang</a>
            <a href="<?php echo base_url()?>index.php/Beranda/Gallery/<?php echo $data->id_gallery ?>" class="btn btn-primary">Detail</a>

          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <script src="<?php echo base_url()?>assets/front/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
