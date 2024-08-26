<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Tambah produk</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrum-item"><a href="javascript:void(0)">Kelola produk</a></li>
                <li class="breadcrumb-item active">Tambah produk</li>
            </ol>
        </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid -->
<div class="container-fluid">
<!-- Start Page Content -->
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
            <form action="<?php echo base_url();?>index.php/kelola_produk/proses_tambah" method="post" enctype="multipart/form-data">

                
                <div class="row p-t-20">
                    <div class="col-md-12">
                        <div class="form-group has-success">
                            <label class="control-label">Gambar produk</label>
                            <input type="file" id="image" require class="form-control input-default" name="gambar_produk">
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-12">
                        <div class="form-group has-success">
                            <label class="control-label">Nama produk</label>
                            <input type="text" id="firstName" require class="form-control input-default" name="nama_produk">
                        </div>
                    </div>
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-success">
                            <label class="control-label">Kategori</label>
                            <select name="id_kategori_produk" id="id_kategori_produk" class="form-control">
                                <?php 
                                    foreach ($list_kategori_produk as $list ) {
                                        echo "<option value='$list->id_kategori_produk'->$list->nama_kategori_produk</option>";}
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-success">
                            <label class="control-label">Isi produk</label>
                            <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text..."
                            style="height:300px" name="isi_produk"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Simpan</button>
                <a href="<?php echo base_url();?>index.php/kelola_produk/view_produk"><button type="button"
                class="btn btn-inverse">Batal</button></a>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
<!-- Row -->
</div>

