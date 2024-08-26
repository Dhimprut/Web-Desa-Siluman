<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url()?>assets/front/bootstrap/img/siluman.png">
  <title>Desa Siluman</title>
  <link href="<?php echo base_url()?>assets/front/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url()?>assets/front/bootstrap/img/logo.png" width="30" height="30" alt="">
      <b>Desa Siluman</b>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="<?php echo base_url()?>index.php/Beranda">Beranda</a>
        </li>
        
        <!-- Dropdown Profil Desa -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" id="profilDesaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil Desa
          </a>
          <ul class="dropdown-menu" aria-labelledby="profilDesaDropdown">
            <li><a class="dropdown-item" href="<?php echo base_url()?>index.php/beranda/tentang_desa">Tentang Desa</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url()?>index.php/beranda/visi_misi">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url()?>index.php/beranda/sejarah_desa">Sejarah Desa</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="<?php echo base_url()?>index.php/Beranda/Artikel_All">Artikel</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-dark" href="<?php echo base_url()?>index.php/Beranda/Produk">Produk</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?php echo base_url()?>index.php/Beranda/Gallery_All">Gallery</a>
        </li>

        <!-- Dropdown Produk -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" id="produkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            UMKM
          </a>
          <ul class="dropdown-menu" aria-labelledby="produkDropdown">
            <?php if (isset($listkategoriproduk)) : ?>
              <?php foreach($listkategoriproduk as $data) { ?>
                <li><a class="dropdown-item" href="<?php echo base_url()?>index.php/Kelola_Kategori_Produk/view_kategori_produk_front/<?php echo $data->id_kategori_produk ?>"><?php echo $data->nama_kategori_produk ?></a></li>
              <?php } ?>
            <?php else: ?>
              <li><a class="dropdown-item" href="#">No categories available</a></li>
            <?php endif; ?>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="<?php echo base_url()?>index.php/login">Login</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- JavaScript Bundle with Popper -->
  <script src="<?php echo base_url()?>assets/front/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
