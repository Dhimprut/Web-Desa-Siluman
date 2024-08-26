<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class Kelola_Kategori extends CI_Controller { 
    public function __construct() 
    {
    parent::__construct ();
    $this->load->model ('m_kategori');
    }
    
    
public function view_kategori ()
{
    $data ['kategori'] = $this->m_kategori->view_kategori (); 
    $data ['konten'] = "view_kategori";
    $this->load->view ('template_back',$data);
}
public function tambah_kategori ()
{
    $data ['konten'] = "tambah_kategori";
    $this->load->view ('template_back',$data);
}

public function proses_tambah () 
{
    $data['kategori']=$this->m_kategori->proses_tambah();
    $msg="<script>alert('Data Berhasil Ditambahkan')</script>";
    $this->session->set_flashdata ('pesan',$msg);
    redirect("kelola_kategori/view_kategori");
}

public function edit_kategori ($id)
{
    $data ['kategori'] =$this->m_kategori->edit_kategori($id);
    $data ['konten'] = "edit_kategori";
    $this->load->view ('template_back',$data);

}

public function proses_edit ($id)
{
    $this->m_kategori->proses_edit($id);
    $msg="<script>alert('Data Berhasil Diedit')</script>";
    $this->session->set_flashdata('pesan',$msg);
    redirect('kelola_kategori/view_kategori');
}
public function hapus_kategori ($id)
{
    $this->m_kategori->hapus_kategori($id);
    $msg="<script>alert('Data Berhasil Dihapus')</script>";
    $this->session->set_flashdata('pesan',$msg);
    redirect("kelola_kategori/view_kategori");
}



public function view_kategori_front($id_kategori) {
    // Mengambil artikel berdasarkan kategori
    $data['artikel'] = $this->m_kategori->get_artikel_by_kategori($id_kategori);
    
    // Mengambil semua kategori untuk dropdown
    $data['listkategori'] = $this->m_kategori->view_kategori(); // Pastikan ini ada

    // Memuat view dengan data
    $data['konten']="view_kategori_front";
    $this->load->view('template_front2', $data);
}

  


}


?>