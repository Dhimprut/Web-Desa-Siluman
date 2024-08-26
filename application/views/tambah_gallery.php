<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Tambah Gallery</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Gallery</a></li>
            <li class="breadcrumb-item active">Tambah Gallery</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form action="<?php echo base_url();?>index.php/kelola_gallery/proses_tambah"method="post" enctype="multipart/form-data">
                <div class="form-body">
                    <h4 class="card-title m-t-15">Form Input Gallery</h4>
                    <hr>
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-grouphas-success">
                                <label class="control-label">Gambar</label>
                                <input type="file" required class="form-control input-default"name="gambar">
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                    <div class="col-md-12">
                        <div class="form-group has-success">
                            <label class="control-label">Judul Gallery</label>
                            <input type="text" id="firstName" require class="form-control input-default" name="judul_gallery">
                        </div>
                    </div>
                </div>
                    <div class="row p-t-20">
                    <div class="col-md-12">
                    <div class="form-grouphas-success">
                    <label class="control-label">Deskripsi</label>
                    <input type="text" id="firstName" required 
                    class="form-control input-default" name="deskripsi">
</div>
</div>
</div>



</div>
                              <div class="form-actions">
                                  <button type="submit" class="btn btn-success"> <i class="fa fa-
                                        check"></i> Simpan</button>
                                            <a href="<?php echo
                                             base_url(); ?>index.php/kelola_gallery/view_gallery">
                                             <button type="button" class="btn btn-inverse">Batal</button></a>

                            </div>
                          </form>
                          </div>
                       </div>
                    </div>
                 </div>
                    <!-- Row -->
             </div>