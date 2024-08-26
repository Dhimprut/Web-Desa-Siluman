-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2024 at 09:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portal_dimas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `gambar_artikel` varchar(20) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `nama_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `tgl_posting` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `gambar_artikel`, `id_kategori`, `nama_artikel`, `isi_artikel`, `tgl_posting`) VALUES
(9, 'alm2.jpg', 8, 'Curug Cileat', '<div><i>Lorem ipsum dolor sit </i>amet consectetur adipisicing elit. Consequatur porro maiores fuga explicabo, ex corporis numquam minima soluta labore rem earum dolor praesentium sequi molestias! Reprehenderit excepturi quod quo maiores!</div>', NULL),
(10, 'DSC01215.JPG', 9, 'Alam', '<div><b>&nbsp; &nbsp;Lorem ipsum</b> dolor sit amet<i> consectetur adipisicing</i> elit. Minus ad non enim ea. Cumque maiores assumenda nemo, alias voluptas et voluptate vel incidunt nihil sunt accusantium, consectetur veniam optio ipsam!</div>', NULL),
(12, 'livai.jpg', 4, 'Sejarah Desa Siluman', '<b><i>Desa Siluman</i></b> berdiri pada tahun 1908 M, dan kata SILUMAN diambil dari nama sebuah kali kecil CISILUMAN yang sekarang termasuk kewilayah Desa Kadawung. Luas wilayah Desa Siluman pada tahun 1908 M, adalah kurang lebih 1.730,228 Ha termasuk Desa Kadawung sekarang.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Kali Cisiluman tersebut dipergunakan tempat persembunyiaan para pejuang desa dalam melawan penjajah Belanda, maka untuk mengenang sejarah, kali Cisiluman termasuk ditetapkan sebagai nama sebuah Desa, yang sekarang dikenal DESA SILUMAN. Pada waktu itu Desa Siluman terbagi 8 Dusun yaitu : 1. Dusun Siluman Kerajan 2. Dusun Siluman Girang 3. Dusun Siluman I 4. Dusun Siluman II 5. Dusun Bakan Subang 6. Dusun Cilekor 7. Dusun Bakan Pintu 8. Dusun Kadawung&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dan menurut beberapa saksi sejarah menerangkan bahwa keterangan tersebut diatas informasinya dari keturunan orng yang masih hidup. Susunan nama-nama Kepala Desa Siluman dari sejak berdirinya sampai sekarang : 1.&nbsp; &nbsp;Kepala Desa ke I&nbsp; &nbsp; &nbsp; &nbsp;: BAPAK TINGGI 2.&nbsp; &nbsp;Kepala Desa ke II&nbsp; &nbsp; &nbsp; : BAPAK NARSAM 3.&nbsp; &nbsp;Kepala Desa ke III&nbsp; &nbsp; &nbsp;: BAPAK JAMLANG 4&nbsp; &nbsp; Kepala Desa ke IV&nbsp; &nbsp; &nbsp;: BAPAK H. ENOH 5.&nbsp; &nbsp;Kepala Desa ke V&nbsp; &nbsp; &nbsp; : BAPAK ASMALAN 6.&nbsp; &nbsp;Kepala Desa ke VI&nbsp; &nbsp; &nbsp;: BAPAK H. KURDI 7.&nbsp; &nbsp;Kepala Desa ke VII&nbsp; &nbsp; : BAPAK H. SIDIK 8.&nbsp; &nbsp;Kepala Desa ke VIII&nbsp; &nbsp;: BAPAK JASIH 9.&nbsp; &nbsp;Kepala Desa ke IX&nbsp; &nbsp; &nbsp; : BAPAK MADRUKI 10.&nbsp; Kepala Desa ke X&nbsp; &nbsp; &nbsp; : BAPAK SUKARSA 11.&nbsp; Kepala Desa ke XI&nbsp; &nbsp; &nbsp;: BAPAK ANTA 12.&nbsp; Kepala Desa ke XII&nbsp; &nbsp; : BAPAK WADI 13.&nbsp; Kepala Desa ke XIII&nbsp; &nbsp;: BAPAK UMIN 14.&nbsp; Kepala Desa ke XIV&nbsp; &nbsp;: BAPAK IRI SUHERMAN 15.&nbsp; Kepala Desa ke XV&nbsp; &nbsp; : BAPAK E. SURJI 16.&nbsp; Kepala Desa ke XVI&nbsp; &nbsp;: BAPAK H. CALIM 17.&nbsp; Kepala Desa ke XVII&nbsp; : BAPAK JUNIARSA 18.&nbsp; Kepala Desa ke XVIII : BAPAK WARMAN&nbsp; &nbsp;Desa Siluman telah mengalami pemekaran yaitu :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Pada tahun 1982, Dusun Cilekor, Dusun Kadawung, Dusun Bakan Pintu dimekarkan menjadi sebuah Desa yang sekarang dengan nama DESA KADAWUNG. Maka setelah mengalami pemekaran Desa Siluman memiliki luas wilayah lebih kurang 716,928 Ha yang terdiiri dari lima Dusun yaitu : 1. Dusun Siluman Kerajan 2. Dusun Siluman Girang 3. Dusun Siluman I 4. Dusun Siluman II 5. Dusun Bakan Subang&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Maksud ditulisnya sejarah Desa Siluman ini agar warga masyarakat Desa Siluman terutama generasi penerus supaya mengetahui dan memahami tentang silsilah terbentuknya Desa Siluman sebagai tanah kelahirnya.', NULL),
(17, 'DSC01215.JPG', 9, 'Alam', 'Asalamualaikum', NULL),
(18, 'DSC01211.JPG', 9, 'Sofa Jaguar', '<div>**Sofa Mable: Pilihan Elegan untuk Interior Rumah Anda**</div><div><br></div><div>Sofa Mable adalah salah satu pilihan yang sangat diminati dalam dunia interior karena keunikan dan kualitas bahan yang digunakan. Terbuat dari kayu jati pilihan, sofa ini memadukan elemen kayu yang solid dengan desain modern yang elegan, sehingga menghasilkan perpaduan antara tradisi dan gaya kontemporer yang cocok untuk berbagai jenis ruangan.</div><div><br></div><div>### Kelebihan Sofa Mable</div><div>1. **Bahan Berkualitas Tinggi**: Sofa Mable menggunakan kayu jati berkualitas tinggi yang dikenal karena kekuatan dan ketahanannya. Kayu jati juga memiliki serat yang indah dan tahan terhadap cuaca, menjadikannya pilihan yang sempurna untuk furniture yang tahan lama.</div><div>&nbsp;&nbsp;</div><div>2. **Desain Elegan**: Dengan sentuhan desain minimalis namun tetap memberikan kesan mewah, Sofa Mable cocok untuk menghiasi ruang tamu modern maupun klasik. Desain yang simple dan finishing yang halus menambah nilai estetika dari sofa ini.</div><div><br></div><div>3. **Nyaman dan Ergonomis**: Sofa ini tidak hanya menarik secara visual, tetapi juga menawarkan kenyamanan maksimal dengan bantalan yang empuk dan dukungan yang ergonomis. Pengguna dapat bersantai dengan nyaman tanpa mengorbankan gaya.</div><div><br></div><div>4. **Fleksibilitas Penempatan**: Berkat desainnya yang elegan dan warna netral, Sofa Mable mudah dipadukan dengan berbagai tema dekorasi, baik itu tema minimalis, industrial, hingga skandinavia. Sofa ini dapat ditempatkan di ruang tamu, ruang keluarga, hingga ruang kerja.</div><div><br></div><div>5. **Ramah Lingkungan**: Kayu jati yang digunakan dalam pembuatan Sofa Mable diambil dari hutan yang dikelola secara berkelanjutan, sehingga produk ini juga mendukung upaya pelestarian lingkungan.</div><div><br></div><div>### Cara Perawatan</div><div>Agar Sofa Mable tetap awet dan tampak seperti baru, perawatan yang tepat sangat diperlukan. Membersihkan sofa secara rutin dengan kain lembut dan menjaga dari paparan sinar matahari langsung akan membantu mempertahankan keindahan dan ketahanan kayu jati. Selain itu, menggunakan pelindung anti gores pada kaki sofa juga dapat mencegah kerusakan pada lantai dan sofa itu sendiri.</div><div><br></div><div>### Kesimpulan</div><div>Sofa Mable adalah pilihan ideal bagi Anda yang menginginkan perpaduan antara kenyamanan, estetika, dan kualitas. Dengan berbagai kelebihan yang ditawarkan, sofa ini tidak hanya berfungsi sebagai tempat duduk, tetapi juga sebagai elemen dekorasi yang meningkatkan nilai estetika ruangan. Investasi pada Sofa Mable adalah langkah tepat untuk menciptakan interior rumah yang elegan dan berkelas.</div>', NULL),
(19, 'DSC01215.JPG', 7, 'Amora Sofa', 'fhzgjklkelfle', NULL),
(20, 'a.jpg', 7, 'Artikel terbaru', '<b>shwihashhas hjsdhidiow<i> hjedhuedhw</i></b>', NULL),
(24, 'a.jpg', 8, 'Alam', 'Saya adalah manuk siluman', '2024-08-25 04:34:56'),
(25, 'struktur.jpg', 8, 'Alam', 'hjjkklkl;opop', '2024-08-25 06:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(5) NOT NULL,
  `judul_gallery` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `judul_gallery`, `gambar`, `deskripsi`) VALUES
(5, 'Danau', 'alm3.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt tempore magni labore aliquam esse'),
(7, 'Uranus', 'solarsystem.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt tempore magni labore aliquam esse'),
(8, 'Sofa Mang Edi', 'DSC01215.JPG', 'Memperkenalkan Sofa Desa Siluman: Pilihan Berkualitas dengan Sentuhan Tradisional  Desa Siluman, yan'),
(10, 'Bawang', 'alm.jpg', 'Memperkenalkan Sofa Desa Siluman: Pilihan Berkualitas dengan Sentuhan Tradisional  Desa Siluman, yan'),
(11, 'Sofa', 'sofa1.jpg', 'Memperkenalkan Sofa Desa Siluman: Pilihan Berkualitas dengan Sentuhan Tradisional  Desa Siluman, yan'),
(12, 'Sofa', 'a.jpg', 'Memperkenalkan Sofa Desa Siluman: Pilihan Berkualitas dengan Sentuhan Tradisional  Desa Siluman, yan'),
(13, 'Monic', '2.jpg', 'Memperkenalkan Sofa Desa Siluman: Pilihan Berkualitas dengan Sentuhan Tradisional  Desa Siluman, yan'),
(14, 'Sofa', 'a.jpg', 'Memperkenalkan Sofa Desa Siluman: Pilihan Berkualitas dengan Sentuhan Tradisional  Desa Siluman, yan'),
(15, 'Sofa', 'DSC01211.JPG', 'Memperkenalkan Sofa Desa Siluman: Pilihan Berkualitas dengan Sentuhan Tradisional  Desa Siluman, yan'),
(16, 'Sofa', '3.jpg', 'Memperkenalkan Sofa Desa Siluman: Pilihan Berkualitas dengan Sentuhan Tradisional  Desa Siluman, yan'),
(17, 'Livai', 'livai.jpg', 'nononon'),
(18, 'Livai', 'IMG_20230422_065908.jpg', 'Memperkenalkan Sofa Desa Siluman: Pilihan Berkualitas dengan Sentuhan Tradisional  Desa Siluman, yan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(6, 'Peternakan'),
(7, 'UMKM'),
(8, 'Desa'),
(12, 'saung'),
(13, 'Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_produk`
--

CREATE TABLE `tbl_kategori_produk` (
  `id_kategori_produk` int(11) NOT NULL,
  `nama_kategori_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategori_produk`
--

INSERT INTO `tbl_kategori_produk` (`id_kategori_produk`, `nama_kategori_produk`) VALUES
(1, 'Saluyu Furniture'),
(2, 'Aditia Sofa'),
(4, 'Ameera Sofa'),
(5, 'Sayuti Malik'),
(6, 'Amera Mebel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `gambar_produk` varchar(50) NOT NULL,
  `id_kategori_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `isi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `gambar_produk`, `id_kategori_produk`, `nama_produk`, `isi_produk`) VALUES
(2, 'DSC01215.JPG', 7, 'Sofa Jaguar', 'Sofa Manusia dan alam adalah ciptaan tuhan yang maha esa'),
(4, 'monica.jpg', 10, 'Manusia', 'Monica'),
(6, 'sofa1.jpg', 2, 'Sofa Jaguar', '<div>Sofa adalah elemen penting yang tidak hanya berfungsi sebagai tempat duduk, tetapi juga sebagai penunjang estetika ruangan. Sofa yang terbuat dari kayu jinjing menawarkan kekuatan dan ketahanan yang luar biasa. Material ini memberikan kesan alami yang elegan dan sangat cocok untuk berbagai tema dekorasi. Desain sofa ini menggabungkan sentuhan tradisional dengan kenyamanan modern. Tersedia dalam beberapa model, seperti <b><i>Jaguar, Chelsea, dan corner</i></b>, setiap model memberikan karakteristik unik yang sesuai dengan kebutuhan berbeda. Model Jaguar, misalnya, dikenal dengan desain mewah dan lekukan halus yang menawan. Model Chelsea menawarkan kesan minimalis namun tetap elegan, cocok untuk ruang tamu bergaya kontemporer. Sementara itu, model corner didesain untuk memaksimalkan penggunaan ruang dengan bentuk L yang fungsional. Sofa ini dirancang untuk memberikan kenyamanan maksimal dengan sandaran dan dudukan yang dilengkapi busa berkualitas tinggi. Bahan pelapisnya juga tahan noda, memudahkan proses pembersihan. Sofa ini tersedia dalam berbagai warna yang dapat disesuaikan dengan tema dekorasi ruangan Anda. Dengan struktur yang kokoh dan desain yang indah, sofa ini memberikan nilai tambah bagi estetika rumah. Proses pemesanan sofa ini juga mudah, dengan beberapa unit tersedia sebagai ready stock. Sofa ini juga mudah dirawat dan tahan lama, menjadikannya investasi yang baik untuk jangka panjang.<br></div>'),
(7, 'anime.jpg', 2, 'Sofa Jaguar', '<i>Sofa adalah</i> elemen penting yang tidak hanya berfungsi sebagai tempat duduk, tetapi juga sebagai penunjang estetika ruangan. Sofa yang terbuat dari kayu jinjing menawarkan kekuatan dan ketahanan yang luar biasa. Material ini memberikan kesan alami yang elegan dan sangat cocok untuk berbagai tema dekorasi. Desain sofa ini menggabungkan sentuhan tradisional dengan kenyamanan modern. Tersedia dalam beberapa model, seperti&nbsp;<i><b>Jaguar, Chelsea, dan corner</b></i>, setiap model memberikan karakteristik unik yang sesuai dengan kebutuhan berbeda. Model Jaguar, misalnya, dikenal dengan desain mewah dan lekukan halus yang menawan. Model Chelsea menawarkan kesan minimalis namun tetap elegan, cocok untuk ruang tamu bergaya kontemporer. Sementara itu, model corner didesain untuk memaksimalkan penggunaan ruang dengan bentuk L yang fungsional. Sofa ini dirancang untuk memberikan kenyamanan maksimal dengan sandaran dan dudukan yang dilengkapi busa berkualitas tinggi. Bahan pelapisnya juga tahan noda, memudahkan proses pembersihan. Sofa ini tersedia dalam berbagai warna yang dapat disesuaikan dengan tema dekorasi ruangan Anda. Dengan struktur yang kokoh dan desain yang indah, sofa ini memberikan nilai tambah bagi estetika rumah. Proses pemesanan sofa ini juga mudah, dengan beberapa unit tersedia sebagai ready stock. Sofa ini juga mudah dirawat dan tahan lama, menjadikannya investasi yang baik untuk jangka panjang.<br>'),
(8, 'bebe.jpg', 2, 'Sofa Jaguar', 'Saya adalah seorang wisatawan asal bali, di bali adalah seorang wisata'),
(9, 'a1.jpg', 2, 'fgfghkj', 'dsfdghjhjk'),
(10, 'bebe.jpg', 2, 'Sofa Jaguar', 'ghgjkkj'),
(11, 'IMG_20230422_070050.jpg', 2, 'Manusia', 'gvgjkkl,m'),
(12, 'pexels-martinpechy-1866149.jpg', 2, 'Sofa Jaguar', 'ghfrsdr'),
(13, 'sofaw.jpg', 1, 'Sofa Bdg', 'hshkjskj'),
(14, '6bbf30d9-4142-4011-b955-6e97d0c63796.jpeg', 1, 'Manusia', 'gfryjkklkllkl; <b>bngjkjkl</b>'),
(15, 'kampus_merdeka.png', 5, 'sofa comfie', '<span><h1>Sawah Abah Bogor, Review Menu Dan Lokasi</h1><div>April 26, 2022&nbsp;<span>by&nbsp;<a target=\"_blank\" rel=\"nofollow\" href=\"https://travelandword.com/author/admin/\">Navia Azzahra</a></span></div></span><div>Sawah Abah Bogor – Kawasan sentul, Puncak, maupun Kota Bogor memang kerap jadi pelarian anak anak Jakarta sewaktu akhir pekan. Selain menikmati udara segar dan healing di sejumlah wisata alam di Bogor, mencicipi kuliner di Kota Hujan tersebut juga bisa jadi aktivitas yang menarik. Apalagi sekarang menjamur restoran ataupun tempat makan baru yang instagramable.Tempat makan yang popular saat ini umumnya tak hanya mengandalkan menu menunya saja. Namun dari segi tempat dan view haruslah mendukung. Salah satu yang lagi ramai belakangan ini adalah Sawah Abah Bogor. Ini adalah perpaduan antara gaya modern dan tradisional yang bakal membuatmu nyaman berlama lama disini. Selain itu viewnya juga cakep dan menyegarkan mata.Nah buat kamu yang berencana mau liburan ke Bogor dan mencari tempat makan yang rekomended, yuk simak sejumlah informasi berikut ini.</div>'),
(16, 'kampus_merdeka-removebg-preview.png', 6, 'Sofa Bdg', 'Sofa jaguar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_kategori_produk`
--
ALTER TABLE `tbl_kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_kategori_produk`
--
ALTER TABLE `tbl_kategori_produk`
  MODIFY `id_kategori_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
