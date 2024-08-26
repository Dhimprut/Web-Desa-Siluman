<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Digital Desa Siluman</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="icon" href="<?php echo base_url()?>assets/front/bootstrap/img/siluman.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/front/bootstrap/lib/animate/animate.min.css" />
    <link href="<?php echo base_url()?>assets/front/bootstrap/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/front/bootstrap/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url()?>assets/front/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url()?>assets/front/bootstrap/css/style.css" rel="stylesheet">
    <style>
        .logo-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            max-width: 60px;
            max-height: 60px;
        }

        .header-carousel-item {
            position: relative;
        }

        .header-carousel-item img {
            object-fit: cover;
            width: 100%;
            height: auto;
        }

        .carousel-caption {
            position: relative;
        }

        .carousel-caption::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.205);
            z-index: 1;
        }

        .carousel-caption .container {
            position: relative;
            z-index: 2;
        }
    </style>
</head>

<body>

  <!-- Ini Navigasi Menu-->
  <nav class="navbar fixed-top navbar-expand-lg bg-light">
    <div class="container">
      <?php $this->load->view('nav_menu/menu_front.php') ?>
    </div>
  </nav>

  <!-- Konten Halaman -->
  <?php $this->load->view($konten) ?>

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

  <!-- JavaScript Libraries -->
<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/front/bootstrap/lib/wow/wow.min.js"></script>
<script src="<?php echo base_url()?>assets/front/bootstrap/lib/easing/easing.min.js"></script>
<script src="<?php echo base_url()?>assets/front/bootstrap/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url()?>assets/front/bootstrap/lib/counterup/counterup.min.js"></script>
<script src="<?php echo base_url()?>assets/front/bootstrap/lib/lightbox/js/lightbox.min.js"></script>
<script src="<?php echo base_url()?>assets/front/bootstrap/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="<?php echo base_url()?>assets/front/bootstrap/js/main.js"></script>


  <!-- Template Javascript -->
  <script src="<?php echo base_url()?>assets/front/bootstrap/js/main.js"></script>

  <!-- Footer -->
  <footer class="bg-dark text-white pt-4">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <h5>About Us</h5>
                  <p>Desa Siluman adalah sebuah desa yang kaya akan budaya dan tradisi. Kami berkomitmen untuk melestarikan warisan budaya dan mengembangkan potensi UMKM lokal untuk kesejahteraan masyarakat.</p>
              </div>
              <div class="col-md-4">
                  <h5>Quick Links</h5>
                  <ul class="list-unstyled">
                      <li><a href="<?php echo base_url()?>index.php/Beranda" class="text-white">Home</a></li>
                      <li><a href="<?php echo base_url()?>index.php/beranda/about_me" class="text-white">About</a></li>
                      <li><a href="#" class="text-white">Services</a></li>
                      <li><a href="#" class="text-white">Contact</a></li>
                  </ul>
              </div>
              <div class="col-md-4">
                  <h5>Contact Us</h5>
                  <p>Email: info@example.com</p>
                  <p>Phone: +62 838-2492-6271</p>
                  <p>Address: Desa Siluman, Kecamatan Pabuaran, Kabupaten Subang (41262)</p>
              </div>
          </div>
          <hr class="bg-white">
          <div class="row">
              <div class="col-md-12 text-center">
                  <p class="mb-0">&copy; KKNM KELOMPOK 10 DESA SILUMAN.</p>
              </div>
          </div>
      </div>
  </footer>

</body>

</html>
