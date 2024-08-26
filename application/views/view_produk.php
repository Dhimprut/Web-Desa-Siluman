<!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kelola produk</h3> </div>
            <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola produk</a></li>
            <li class="breadcrumb-item active">View produk</li>
        </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h4 class="card-title">Data produk <a href="<?php echo base_url();?>index.php/kelola_produk/tambah_produk"><button type="button" class="btn btn-info btn-flat btn-sm m-b-10 m-1-5">Tambah produk</button></a></h4>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-borderd"
                        cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar produk</th>
                                    <th>Nama produk</th>
                                    <th>Nama Kategori</th>
                                    <th>Isi produk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            <?php
                            $n=1; foreach($produk as $data)
                            {?>
                            <tbody>
                                <tr>
                                    <td><?php echo $n++?></td>
                                    <td><?php echo $data->gambar_produk ?></td>
                                    <td><?php echo $data->nama_produk ?></td>
                                    <td><?php echo $data->nama_kategori_produk ?> </td>
                                    <td><?php echo $data->isi_produk ?></td>
                                    <td><a href="<?php echo base_url();?>index.php/kelola_produk/edit_produk/<?PHP echo $data->id_produk ?>">
                                    <i class="fa fa-edit">Edit</i>
                                    </a>
                                    <a onclick="return hapus()" href="<?php echo base_url();?>index.php/kelola_produk/hapus_produk/<?PHP echo $data->id_produk ?>">
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