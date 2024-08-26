<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url()?>assets/front/bootstrap/img/bnr1.jpg" class="d-block w-100" alt="..." style="height: 750px;">

    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url()?>assets/front/bootstrap/img/banner2.jpg" class="d-block w-100" alt="..." style="height: 750px;">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url()?>assets/front/bootstrap/img/sofa2.jpg" class="d-block w-100" alt="..." style="height: 750px;">
      <div class="carousel-caption">
        <h5>Everest Mountain</h5>
        <p>Highest mountain in the world.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- Carousel End -->

<!-- USP -->
<div class="container-fluid" style="height: 50vh; display: flex; justify-content: center; align-items: center; background-color: #343a40;">
    <div class="row text-center">
        <div class="col-12 animate__animated animate__fadeInDown">
            <h2 class="display-4 text-light mb-4">SILUMAN.GO.ID</h2>
            <p class="text-light">Website Resmi Desa Siluman</p>
        </div>
    </div>
</div>


<!-- Artikel -->
<div class="container">

                      


<section id="artikel">
    <h3 class="pb-4 mb-4 fst-italic border-bottom text-center">Berita Terkini</h3>
    <div class="container">
        <div class="row g-5">
            <div class="col-md-7">
                <?php
                $n = 1;
                foreach ($artikel as $data) {
                    if ($n > 3) break; // Membatasi hanya 3 artikel
                ?>
                    <div class="card mb-4"> <!-- Adding mb-4 for spacing between cards -->
                        <div class="card-body">
                            <article class="blog-post">
                            <img src="<?php echo base_url('assets/gallery/'.$data->gambar_artikel); ?>" class="card-img-top" alt="<?php echo $data->nama_artikel ?>">


                                <h2 class="blog-post-title"><?php echo $data->nama_artikel ?></h2>
                                <p><small>Kategori Berita: <?php echo $data->nama_kategori ?></small></p>
                                <p class="text-muted mb-3">
                                <small>
                                    <i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($data->tgl_posting)); ?>
                                </small>
                            </p>
                                <p style="text-align: justify;">
                                    <?php echo substr($data->isi_artikel, 0, 200); ?>...
                                </p>
                                
                                <a href="<?php echo base_url() ?>index.php/Beranda/Artikel/<?php echo $data->id_artikel ?>" class="btn btn-primary">Baca Selengkapnya</a>
                            </article>
                        </div>
                    </div>
                <?php $n++;
                } ?>

    <div class="card mb-3">
      <img src="<?php echo base_url()?>assets/front/bootstrap/img/alm2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <article class="blog-spot">
        <div class="p-4">
    <h4 class="fst-italic">Berita Terbaru</h4>
        <br>
        <?php
        $n=1;foreach($artikel as $data)
        {?>
        <p style="align:  justify;"><?php echo $n++?>,<?php echo $data->nama_artikel ?></p>
        <?php }?>
        <h4 class="fst-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
            <li><a href="#arsip">March 2021</a></li>
            <li><a href="#arsip">February 2021</a></li>
        </ol>
    </div>
     </article>
     <nav class="blog-pagination" aria-label="pagination">
         <a class="btn btn-outline-primary" href="#">Older</a>
         <a class="btn btn-outline-secondary disabled">Newer</a>
     </nav>
 </div>
      </div>
    </div>
    

                    <!--Ini About-->
                    <div class="col-md-5">
    <div class="position-sticky" style="top: 2rem;">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-12">
                    <ul class="list-group border-none rounded-0" style="box-shadow: 5px 5px 0px black;">
                        <li class="list-group-item active border-none text-dark" style="background-color:#646464;border: none;" aria-current="true">Kategori Berita</li>
                        <?php if (isset($listkategori) && !empty($listkategori)) : ?>
                            <?php foreach($listkategori as $data) { ?>
                                <li class="list-group-item">
                                    <a href="<?php echo base_url()?>index.php/Kelola_Kategori/view_kategori_front/<?php echo $data->id_kategori ?>" style="color: black; text-decoration: none;"><?php echo $data->nama_kategori ?></a>
                                </li>
                            <?php } ?>
                        <?php else: ?>
                            <li class="list-group-item">No categories available</li>
                        <?php endif; ?>
                    </ul>   
                </div>
            </div>
        </div>
    </div>
</div>




<!-- End Artikel -->
 <!-- End USP -->
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo base_url()?>assets/front/bootstrap/img/stunting.jpeg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="display-4 mb-4">Cegah Stunting, Kenali Penyebabnya</h1>
                                
                                <p>
                                    Stunting adalah kondisi di mana anak mengalami gangguan pertumbuhan akibat kekurangan gizi dan kesehatan. Untuk mencegah stunting, kita harus memahami penyebabnya. Kekurangan gizi dari makanan yang tidak cukup bergizi, infeksi berulang seperti diare, kesehatan ibu yang tidak optimal selama kehamilan, dan kurangnya akses ke layanan kesehatan adalah faktor-faktor utama yang dapat menyebabkan stunting. Dengan mengetahui penyebab-penyebab ini, kita bisa melakukan langkah-langkah preventif untuk memastikan anak-anak tumbuh sehat dan mencapai potensi mereka secara maksimal.
                                </p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="<?php echo base_url()?>assets/front/bootstrap/img/gadget.jpeg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="display-4 mb-4">Bahaya Memberi Gadget Terlalu Dini pada Anak </h1>
                                <p>Memberikan gadget kepada anak sejak dini dapat berdampak negatif pada perkembangan mereka. Penggunaan gadget yang berlebihan dapat mengganggu interaksi sosial dan fisik anak, menyebabkan masalah kesehatan seperti gangguan penglihatan (seperti mata kering dan ketegangan mata), postur tubuh buruk, serta mengurangi aktivitas fisik. Selain itu, anak-anak yang terlalu sering menggunakan gadget mungkin juga mengalami masalah kesehatan seperti obesitas, gangguan tidur, dan sindrom carpal tunnel.</p>
                                <p>
                                   Gangguan kesehatan ini dapat menyebabkan kesulitan dalam konsentrasi, penurunan kualitas tidur, dan masalah dalam perkembangan sosial serta emosional. Penting untuk mengatur waktu layar dan memberikan alternatif yang lebih sehat, seperti bermain di luar ruangan dan interaksi langsung dengan keluarga dan teman. Dengan begitu, anak-anak dapat tumbuh dengan keseimbangan yang sehat antara teknologi dan kegiatan fisik, serta menjaga perkembangan sosial dan emosional mereka.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="<?php echo base_url()?>assets/front/bootstrap/img/sampah.jpeg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Jagalah Lingkungan</h1>
                               <p> Jaga lingkungan sekitar kita dengan informasi dan tips tentang perlindungan lingkungan, pengelolaan sampah, dan kebersihan desa. Bersama kita dapat membuat Desa Siluman lebih bersih dan hijau.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
        </div>
    <!-- End Banner Hero -->

<!-- About Start -->
<div class="container-fluid bg-light about pb-5">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-5 h-100">
                    <h4 class="text-primary">Potensi Desa</h4>
                    <h1 class="display-4 mb-4">Desa Siluman</h1>
                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Pengembangan pertanian dengan lahan subur yang mendukung hasil panen melimpah.</p>
                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Wisata alam yang menawarkan pengalaman natural dengan hutan tropis dan sungai jernih.</p>
                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Kerajinan tangan tradisional seperti anyaman bambu dan ukiran kayu yang memiliki potensi ekspor.</p>
                    <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Peningkatan kualitas pendidikan melalui pelatihan keterampilan yang relevan untuk masyarakat.</p>
                    <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Pengembangan infrastruktur yang mendukung pertumbuhan ekonomi dan aksesibilitas desa.</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-white rounded p-5 h-100">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12">
                            <div class="rounded bg-light">
                                
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="text-primary text fs-2 fw-bold" data-toggle="counter-up">
                                            <?php echo $this->db->from("tbl_artikel")->get()->num_rows();?>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <h4 class="mb-0 text-dark">Jumlah Artikel</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100 d-flex flex-column justify-content-center align-items-center">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">
                                        <?php echo $this->db->from("tbl_kategori")->get()->num_rows();?>
                                    </span>
                                </div>
                                <h4 class="mb-0 text-dark">Jumlah Kategori</h4>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100 d-flex flex-column justify-content-center align-items-center">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">
                                        <?php echo $this->db->from("tbl_gallery")->get()->num_rows();?>
                                    </span>
                                </div>
                                <h4 class="mb-0 text-dark">Jumlah Gallery</h4>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100 d-flex flex-column justify-content-center align-items-center">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">
                                        <?php echo $this->db->from("tbl_produk")->get()->num_rows();?>
                                    </span>
                                </div>
                                <h4 class="mb-0 text-dark">Jumlah Produk</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About End -->
        
        
        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Produk Lokal</h4>
                    <h1 class="display-4 mb-4">Produk UMKM Lokal Berkualitas </h1>
                    <p class="mb-0">Produk lokal dari Desa Siluman yang Berkualitas dan Baik serta terjangkau!
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="<?php echo base_url()?>assets/front/bootstrap/img/blog-1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-users fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">UMKM</a>
                                    <p class="mb-4">Berikut UMKM yang ada di desa siluman.</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="<?php echo base_url()?>index.php/Beranda/Produk">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="<?php echo base_url()?>assets/front/bootstrap/img/blog-2.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-hospital fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Berita</a>
                                    <p class="mb-4">Berita Desa Siluman</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="<?php echo base_url()?>index.php/Beranda/Artikel_All">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="<?php echo base_url()?>assets/front/bootstrap/img/blog-3.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-car fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Gallery</a>
                                    <p class="mb-4">Kegiatan yang ada di Desa Siluman</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="<?php echo base_url()?>index.php/Beranda/Gallery_All">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="<?php echo base_url()?>assets/front/bootstrap/img/blog-4.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="fa fa-home fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Tentang Kami </a>
                                    <p class="mb-4">Tim Developer</p>
                                    <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="<?php echo base_url()?>index.php/beranda/about_me">">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <div class="container-fluid faq-section bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="h-100">
                    <div class="mb-5">
                        <h4 class="text-primary">Beberapa Pertanyaan Mengenai Produk UMKM Lokal</h4>
                        <h1 class="display-4 mb-0">Desa Siluman</h1>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <!-- Pertanyaan 1: Proses Pembelian -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Q: Bagaimana Proses Pembelian?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body rounded">
                                    A: Proses pembelian produk UMKM lokal Desa Siluman cukup mudah. Anda bisa memesan melalui platform e-commerce yang kami sediakan, atau langsung menghubungi penjual melalui WhatsApp yang tertera di setiap halaman produk. Setelah memesan, Anda akan mendapatkan konfirmasi pesanan dan instruksi pembayaran.
                                </div>
                            </div>
                        </div>
                        <!-- Pertanyaan 2: Proses Pengiriman -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: Bagaimana Proses Pengiriman?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Kami bekerja sama dengan jasa pengiriman lokal dan nasional untuk memastikan produk Anda sampai dengan aman. Proses pengiriman biasanya memakan waktu 2-5 hari kerja, tergantung lokasi Anda. Anda juga bisa memilih layanan pengiriman yang lebih cepat dengan biaya tambahan.
                                </div>
                            </div>
                        </div>
                        <!-- Pertanyaan 3: Proses Pembayaran -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: Bagaiman Proses Pembayaran?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Kami menerima berbagai metode pembayaran, termasuk transfer bank, e-wallet, dan pembayaran melalui minimarket. Setelah memilih produk, Anda akan diarahkan ke halaman pembayaran yang menyediakan opsi pembayaran yang tersedia. Setelah pembayaran berhasil, pesanan Anda akan segera diproses.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="<?php echo base_url()?>assets/front/bootstrap/img/carousel-2.png" class="img-fluid w-100" alt="">
            </div>
        </div>
    </div>
</div>
</div>
</section>
</div>
<section id="maps-section" class="py-4">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31718.6150333347!2d107.54029426392408!3d-6.4162854414600865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e696c97e82ca825%3A0xed8ecae90851c6c4!2sSiluman%2C%20Kec.%20Pabuaran%2C%20Kabupaten%20Subang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1723825485973!5m2!1sid!2sid" style="border:0; width: 100%; height: 600px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>




              </div>
            </div>
          </div>
        </div>

     