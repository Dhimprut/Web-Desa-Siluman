
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Card Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Scoped CSS for card layout */
        .card-layout .card {
            border-radius: 15px;
            overflow: hidden;
        }

        .card-layout .card-body {
            padding: 20px;
        }

        .card-layout .card-title {
            font-weight: bold;
            color: #2c3e50;
        }

        .card-layout .card-text {
            font-size: 1rem;
            color: #34495e;
        }

        .card-layout .btn-custom {
            background-color: #d50202; /* Warna hijau elegan */
            color: white;
            padding: 15px 30px; /* Lebih besar */
            font-size: 18px; /* Ukuran font lebih besar */
            border-radius: 10px; /* Membuat sudut lebih melengkung */
            transition: all 0.3s ease; /* Animasi halus saat hover */
            text-decoration: none; /* Menghilangkan garis bawah pada teks */
        }

        .card-layout .btn-custom:hover {
            background-color: #45a049; /* Warna berubah sedikit saat dihover */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Efek bayangan */
        }

        .card-layout .elegant-btn {
            font-family: 'Poppins', sans-serif; /* Menggunakan font elegan */
            font-weight: bold;
        }
    </style>
</head>
<body>



<div class="container pt-5 my-5 card-layout">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php foreach($produk as $data) { ?>
                <div class="card mb-4 shadow-lg">
                    <img src="<?php echo base_url() ?>assets/gallery/<?php echo $data->gambar_produk?>" class="card-img-top img-fluid" alt="<?php echo $data->nama_produk ?>">
                    <div class="card-body">
                        <h2 class="card-title text-center"><?php echo $data->nama_produk ?></h2>
                        <p class="text-muted text-center"><small>Kategori: <?php echo $data->nama_kategori_produk ?></small></p>
                        <p class="card-text text-center"><?php echo $data->isi_produk ?></p>
                        <div class="text-center">
                        <a href="https://wa.me/6283816354211?text=Halo%2C%20saya%20tertarik%20untuk%20membeli%20sofa%20dari%20Desa%20Siluman.%20Bisakah%20Anda%20memberikan%20informasi%20lebih%20lanjut%20mengenai%20model%20dan%20harga%3F" class="btn btn-custom btn-lg elegant-btn">Pesan Sekarang</a>
                       


                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


</body>
</html>
