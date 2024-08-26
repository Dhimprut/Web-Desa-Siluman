<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Edit produk</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="javascript:void(0)">Kelola produk</a></li>
            <li class="breadcrumb-item active">Edit produk</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline-info">
                <div class="card-body">
                <form action="<?php echo base_url('index.php/kelola_produk/proses_edit/'.$this->uri->segment('3')); ?>" method="post" enctype="multipart/form-data">

              
                        <div class="form-body">
                            <h4 class="card-title m-t-15">Form Edit produk</h4>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label for="" class="control-label">Gambar produk</label>
                                        <input type="hidden" name="gambar_produk_lama" value="<?php echo $produk->gambar_produk; ?>">
                                        <?php if (!empty($produk->gambar_produk)): ?>
                                            <div class="mb-3">
                                                <img src="<?php echo base_url('assets/gallery/'.$produk->gambar_produk); ?>" alt="Gambar produk" style="max-width: 200px; max-height: 200px;">
                                            </div>
                                        <?php endif; ?>
                                        <input type="file" id="gambar" class="form-control input-default" name="gambar_produk">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label for="" class="control-label">Nama produk</label>
                                        <input type="text" id="fristName" required class="form-control input-default" name="nama_produk" value="<?php echo $produk->nama_produk?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label for="" class="control-label">Kategori produk</label>
                                        <select name="id_kategori_produk" id="id_kategori_produk" class="form-control">
                                            <?php 
                                                foreach ($list_kategori_produk as $list ) { ?>
                                                    <option value="<?php echo $list->id_kategori_produk ?>"
                                                    <?php if($list->id_kategori_produk==$produk->id_kategori_produk) echo "selected='selected'"; ?>>
                                                    <?php echo $list->nama_kategori_produk;?>
                                                    </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grouphas-success">
                                        <label for="" class="control-label">Isi produk</label>
                                        <textarea class="textarea_editor form-control" name="isi_produk" rows="15" placeholder="Enter text......" style="height:300px"><?php echo $produk->isi_produk ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions mt-3">
                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Update </button>
                                <a href="<?php echo base_url();?>index.php/kelola_produk/view_produk"><button type="button" class="btn btn-inverse">Batal</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>
