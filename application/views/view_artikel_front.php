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
    .hero {
      background-image: url('<?php echo base_url()?>assets/front/bootstrap/img/hero-bg.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 60px 0;
      text-align: center;
    }
    .article-card {
      border: 1px solid #ddd;
      border-radius: .375rem;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      margin-bottom: 20px;
      transition: all 0.3s ease;
    }
    .article-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }
    .article-card img {
      border-bottom: 1px solid #ddd;
    }
    .article-card-body {
      padding: 20px;
    }
    .author-info {
      background: #f8f9fa;
      border-radius: .375rem;
      padding: 15px;
      margin-top: 30px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .related-articles {
      margin-top: 50px;
    }
    .related-articles .card {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>


  <!-- Article Section -->
  <div class="container article-container mt-5">
    <div class="row">
      <div class="col-lg-12">
      <?php 
          // Get the article ID from the URL
          $article_id = $this->uri->segment('3'); // Assuming the ID is the 4th segment in the URL

          // Loop through articles and display only the one that matches the ID
          foreach($artikel as $data) {
            if($data->id_artikel == $article_id) {
        ?>
          <div class="article-card mb-4">
            <img src="<?php echo base_url() ?>assets/gallery/<?php echo $data->gambar_artikel?>" class="card-img-top" alt="...">
            <div class="article-card-body">
              <h2><?php echo $data->nama_artikel ?></h2>
              <p><small>Kategori Berita: <?php echo $data->nama_kategori ?></small></p>
              <p align="justify"><?php echo $data->isi_artikel ?></p>
              
            </div>
          </div>
        <?php 
            } // end if
          } // end foreach
        ?>
      </div>
    </div>
    </div>
  <script src="<?php echo base_url()?>assets/front/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
