<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kelola kategori_produk</h3> </div>
            <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola kategori_produk</a></li>
            <li class="breadcrumb-item active">View kategori_produk</li>
        </ol>
        </div> b
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                 <a href="<?php echo base_url();?>index.php/kelola_kategori_produk/tambah_kategori_produk"><button type="button" class="btn btn-info btn-flat btn-sm m-b-10 m-1-5">Tambah kategori_produk</button></a>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-borderd"
                        cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama kategori_produk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                    
                            <?php
                            $n=1; foreach($kategori_produk as $data)
                            {?>
                            <tbody>
                                <tr>
                                    <td><?php echo $n++?></td>
                                    <td><?php echo $data->nama_kategori_produk ?></td>
                                    <td><a href="<?php echo base_url();?>index.php/kelola_kategori_produk/edit_kategori_produk/<?php echo $data->id_kategori_produk ?>">
                                    <i class="fa fa-edit">Edit</i>
                                    </a>
                                    <a onclick="return hapus()" href="<?php echo base_url();?>index.php/kelola_kategori_produk/hapus_kategori_produk/<?php echo $data->id_kategori_produk ?>">
                                    <i class="fa fa-trash">Hapus</i>
                                    </a>
                                </td>
                                </tr>
                            </tbody>
                            <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Content -->
</div>
<!-- End Container Fluid -->