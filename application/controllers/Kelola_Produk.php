<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class Kelola_produk extends CI_Controller { 
    public function __construct() 
    {
    parent::__construct ();
    $this->load->model ('m_produk');
    $this->load->model ('m_kategori_produk');
    } 
    
public function view_produk ()
{
    $data ['produk'] = $this->m_produk->view_produk ();
    $data ['konten'] = "view_produk";
    $this->load->view ('template_back',$data);
}
public function tambah_produk ()
{
    $data['list_kategori_produk']=$this->m_kategori_produk->Listkategoriproduk();
    $data ['konten'] = "tambah_produk";
    $this->load->view ('template_back',$data);
}

public function proses_tambah()
{
    $this->load->library('upload');
    
    // Konfigurasi upload
    $config['upload_path'] = './assets/gallery/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['file_name'] = $_FILES['gambar_produk']['name'];
    
    $this->upload->initialize($config);

    // Proses upload
    if ($this->upload->do_upload('gambar_produk')) {
        $uploadData = $this->upload->data();
        $gambar_produk = $uploadData['file_name'];
    } else {
        $gambar_produk = ''; // Jika gagal, simpan sebagai string kosong atau default
    }

    // Simpan data produk
    $data = array(
        "gambar_produk" => $gambar_produk,
        "nama_produk" => $this->input->post('nama_produk'),
        "id_kategori_produk" => $this->input->post('id_kategori_produk'),
        "isi_produk" => $this->input->post('isi_produk'),
    );
    $this->db->insert("tbl_produk", $data);

    $msg = "<script>alert('Data Berhasil Ditambahkan')</script>";
    $this->session->set_flashdata('pesan', $msg);
    redirect("kelola_produk/view_produk");
}


public function edit_produk ($id)
{
    $data['list_kategori_produk']=$this->m_kategori_produk->Listkategoriproduk();
    $data ['produk'] =$this->m_produk->edit_produk($id);
    $data ['konten'] = "edit_produk";
    $this->load->view ('template_back',$data);

}

public function proses_edit($id)
{
    $this->load->library('upload');
    
    // Konfigurasi upload
    $config['upload_path'] = './assets/gallery/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['file_name'] = $_FILES['gambar_produk']['name'];
    
    $this->upload->initialize($config);

    // Cek apakah ada gambar baru yang diupload
    if (!empty($_FILES['gambar_produk']['name'])) {
        if ($this->upload->do_upload('gambar_produk')) {
            $uploadData = $this->upload->data();
            $gambar_produk = $uploadData['file_name'];
        } else {
            $gambar_produk = ''; // Jika gagal, simpan sebagai string kosong atau default
        }
    } else {
        // Jika tidak ada gambar baru, ambil gambar yang lama dari database
        $gambar_produk = $this->input->post('gambar_produk_lama');
    }

    // Simpan data produk
    $data = array(
        "gambar_produk" => $gambar_produk,
        "nama_produk" => $this->input->post('nama_produk'),
        "id_kategori_produk" => $this->input->post('id_kategori_produk'),
        "isi_produk" => $this->input->post('isi_produk'),
    );
    
    $this->db->where("id_produk", $id);
    $this->db->update("tbl_produk", $data);

    $msg = "<script>alert('Data Berhasil Diedit')</script>";
    $this->session->set_flashdata('pesan', $msg);
    redirect('kelola_produk/view_produk');
}

public function hapus_produk ($id)
{
    $this->m_produk->hapus_produk($id);
    $msg="<script>alert('Data Berhasil Dihapus')</script>";
    $this->session->set_flashdata('pesan',$msg);
    redirect("kelola_produk/view_produk");
}


public function view_produk_all()
{
    $data['produk'] = $this->M_Produk->view_produk($id);
    $data['konten'] = "view_produk";
    $this->load->view('template_back', $data);
}


}
















?>