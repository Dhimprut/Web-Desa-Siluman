<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Kelola Gallery</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola Gallery</a></li>
            <li class="breadcrumb-item active">View Gallery</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-body">
                <h4 class="card-title">Data Gallery <a href="<?php echo base_url();?>index.php/kelola_gallery/tambah_gallery"><button
                type="button" class="btn btn-info btn-flat btn-sm mb-10 m-15">Tambah Gallery
                </button></a></h4>
                <div class="table-responsive m-t-40">

<table id="myTable" class="display nowrap table table-hover table- stripedtable-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                      
                        <th>Action</th>
                    </tr>
                    </thead>
                    <?php
                    $n=1; foreach ($gallery as $data)
                    {?>

                <tbody>
                <tr>

        <td><?php echo $n++?></td>
        <td><img src="<?php echo base_url() ?>assets/gallery/<?php echo $data->gambar ?>" witdh="200px" height="200px"></td>
        <td><?php echo $data->judul_gallery ?></td>
        <td><?php echo $data->deskripsi ?></td>
        <td><a href="<?php echo base_url(); ?>index.php/kelola_gallery/edit_gallery/<?PHP echo $data->id_gallery?>">
                <i class="fa fa-edit">Edit</i>
                </a>
                <a onclick="return hapus ()" href="<?php echo
                base_url(); ?>index.php/kelola_gallery/hapus_gallery/<?PHP echo $data->id_gallery?>">
                <i class="fa fa-trash">Hapus</i>
                </a>
             </td>
        </tr>
      </tbody>
     <?php } ?>
     </table>
    </div>
   </div>
 </div>
</div>
</div>
               <!--End Page Content -->
     </div>
