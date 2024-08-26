<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Tambah Kategori</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Kategori</a></li>
            <li class="breadcrumb-item active">Tambah Kategori</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form action="<?php echo base_url();?>index.php/kelola_kategori/proses_tambah"method="post">
                <div class="form-body">
                    <h4 class="card-title m-t-15">Form Input Kategori</h4>
                    <hr>
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="form-grouphas-success">
                                <label class="control-label">Nama Kategori</label>
                                <input type="text" id="firstName" required class="form-control input-default" name="nama_kategori">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Simpan</button>
                    <a href="<?php echo base_url();?>index.php/kelola_kategori/view_kategori"> <button type="button" class="btn btn-inverse">Batal</button></a>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>