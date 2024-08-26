<?php 
$level =$this->session->userdata('level');if($level=="Admin")
{
?>
<ul id="sidebarnav">
    <li class="nav-devider"></li>
    <li class="nav-label">Home</li>
    <li>
        <a href="<?php echo base_url() ?>index.php/dashboard"><i class="fa fa-home"></i><span class="hide-menu">Beranda</span></a>
    </li>
    <li>
        <a href="<?php echo base_url() ?>index.php/kelola_artikel/view_artikel"><i class="fa fa-book"></i><span class="hide-menu"> Artikel</span></a>
    </li>
    <li>
        <a href="<?php echo base_url() ?>index.php/kelola_kategori/view_kategori"><i class="fa fa-list"></i><span class="hide-menu">Kelola Kategori</span></a>
    </li>
    <li>
        <a href="<?php echo base_url() ?>index.php/kelola_kategori_produk/view_kategori_produk"><i class="fa fa-list"></i><span class="hide-menu">Kelola Kategori Produk</span></a>
    </li>
    <li>
        <a href="<?php echo base_url() ?>index.php/kelola_produk/view_produk"><i class="fa fa-list"></i><span class="hide-menu">Kelola Produk</span></a>
    </li>
    <li>
        <a href="<?php echo base_url() ?>index.php/kelola_gallery/view_gallery"><i class="fa fa-image"></i><span class="hide-menu">Kelola Gallery</span></a>
    </li>
</ul>
<?php } ?>

