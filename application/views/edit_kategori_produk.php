<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Edit Kategori Produk</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Kategori Produk</a></li>
            <li class="breadcrumb-item active">Edit Kategori Produk</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form action="<?php echo base_url();?>index.php/kelola_kategori_produk/proses_edit/<?php echo $this->uri->segment('3')?>" method="post">
                    <div class="form-body">
                        <h4 class="card-title m-t-15">Form Edit Kategori Produk</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-grouphas-success">
                                    <label for="" class="control-label">Nama Kategori Produk</label>
                                    <input type="text" id="fristName" required class="form-control input-default" name="nama_kategori_produk" value="<?php echo $kategori_produk->nama_kategori_produk?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions mt-3">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>Update </button>
                        <a href="<?php echo base_url();?>index.php/kelola_kategori_produk/view_kategori_produk"><button type="button" class="btn btn-inverse">Batal</button></a>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>