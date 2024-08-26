<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Websiteku</title>
      <link href="<?php echo base_url()?>assets/front/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  	</head>
  	<body>
  	<!--Navigation Bar-->
    <nav class="navbar fixed-top navbar-expand-lg bg-light">
    <div class="container">
     <?php $this->load->view('nav_menu/menu_front.php') ?>
    </div>
  </nav>
    <!--Navigation Bar-->
    <main role="main">
        <!--Grid-->
        <div class="container marketing">
          <?php $this->load->view($konten)?>
      </div>

      <!-- svg -->

<!-- svg -->

<!-- Footer -->
<footer class="bg-dark text-white pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Home</a></li>
                    <li><a href="#" class="text-white">About</a></li>
                    <li><a href="#" class="text-white">Services</a></li>
                    <li><a href="#" class="text-white">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                
                <h5>Contact Us</h5>
                <p>Email: info@example.com</p>
                <p>Phone: +62 838-2492-6271</p>
                <a href="https://maps.app.goo.gl/w6WnbySPCwnzBHBKA">ddress: Desa Siluman, Kecamatan Pabuaran, Kabupaten Subang(41262)</a>
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

<script src="<?php echo base_url()?>assets/front/bootstrap/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/front/bootstrap/js/bootstrap.min.js"></script>