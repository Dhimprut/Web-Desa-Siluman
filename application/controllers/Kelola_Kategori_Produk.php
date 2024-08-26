<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Kelola_kategori_produk extends CI_Controller { 
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_kategori_produk');
    }

    public function view_kategori_produk ()
    {
        $data['kategori_produk'] = $this->m_kategori_produk->view_kategori_produk(); 
        $data['konten'] = "view_kategori_produk";
        $this->load->view('template_back', $data);
    }

    public function tambah_kategori_produk ()
    {
        $data['konten'] = "tambah_kategori_produk";
        $this->load->view('template_back', $data);
    }

    public function proses_tambah () 
    {
        $this->m_kategori_produk->proses_tambah();
        $msg="<script>alert('Data Berhasil Ditambahkan')</script>";
        $this->session->set_flashdata('pesan', $msg);
        redirect("kelola_kategori_produk/view_kategori_produk");
    }

    public function edit_kategori_produk($id)
    {
        $data['kategori_produk'] = $this->m_kategori_produk->edit_kategori_produk($id);
        $data['konten'] = "edit_kategori_produk";
        $this->load->view('template_back', $data);
    }

    public function proses_edit($id)
    {
        $this->m_kategori_produk->proses_edit($id);
        $msg="<script>alert('Data Berhasil Diedit')</script>";
        $this->session->set_flashdata('pesan', $msg);
        redirect('kelola_kategori_produk/view_kategori_produk');
    }

    public function hapus_kategori_produk($id)
    {
        $this->m_kategori_produk->hapus_kategori_produk($id);
        $msg="<script>alert('Data Berhasil Dihapus')</script>";
        $this->session->set_flashdata('pesan', $msg);
        redirect("kelola_kategori_produk/view_kategori_produk");
    }

    public function view_kategori_produk_front($id_kategori_produk) {
        // Mengambil semua kategori_produk untuk dropdown
        $data['listkategoriproduk'] = $this->m_kategori_produk->view_kategori_produk();

        // Mengambil produk berdasarkan kategori
        $data['produk'] = $this->m_kategori_produk->get_produk_by_kategori_produk($id_kategori_produk);

        // Memuat view dengan data
        $data['konten'] = "view_kategori_produk_front";
        $this->load->view('template_front2', $data);
    }
}
?>
