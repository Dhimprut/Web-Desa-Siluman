<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Tambah Artikel</h3> 
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Artikel</a></li>
            <li class="breadcrumb-item active">Tambah Artikel</li>
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
                    <form action="<?php echo base_url();?>index.php/kelola_artikel/proses_tambah" method="post" enctype="multipart/form-data">
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group has-success">
                                    <label class="control-label">Gambar Artikel</label>
                                    <input type="file" id="image" required class="form-control input-default" name="gambar_artikel">
                                    <small class="form-text text-muted text-danger">Gambar yang di upload harus dalam orientasi landscape (lebar lebih besar dari tinggi).</small>
                                </div>
                            </div>
                        </div>
                        <!-- Other fields here -->
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group has-success">
                                    <label class="control-label">Nama Artikel</label>
                                    <input type="text" id="firstName" required class="form-control input-default" name="nama_artikel">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-success">
                                    <label class="control-label">Kategori</label>
                                    <select name="id_kategori" id="id_kategori" class="form-control">
                                        <?php 
                                            foreach ($list_kategori as $list ) {
                                                echo "<option value='$list->id_kategori'>$list->nama_kategori</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-success">
                                    <label class="control-label">Isi Artikel</label>
                                    <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text..."
                                    style="height:300px" name="isi_artikel"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Simpan</button>
                            <a href="<?php echo base_url();?>index.php/kelola_artikel/view_artikel"><button type="button"
                            class="btn btn-inverse">Batal</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
</div>
<!-- End Container fluid -->
