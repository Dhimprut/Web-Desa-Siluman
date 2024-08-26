<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Kelola_Gallery extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Gallery');
    }

    public function view_gallery()
    {
        $data['gallery'] = $this->M_Gallery->view_gallery();
        $data['konten'] = "view_gallery";
        $this->load->view('template_back', $data);
    }

    public function view_gallery_all()
    {
        $data['gallery'] = $this->M_Gallery->view_gallery($id);
        $data['konten'] = "view_gallery";
        $this->load->view('template_back', $data);
    }

    public function tambah_gallery()
    {
        $data['konten'] = "tambah_gallery";
        $this->load->view('template_back', $data);
    }

    public function proses_tambah()
    {



        
        // Ambil data dari form
        $judul_gallery = $this->input->post('judul_gallery'); // Tambahkan ini
        $deskripsi = $this->input->post('deskripsi');
        $deskripsi = $this->input->post('deskripsi');
 

        // Proses tambah data dengan model
        $data = [
            'judul_gallery' => $judul_gallery, // Tambahkan ini
            'deskripsi' => $deskripsi,

            // Pastikan gambar diupload dengan benar
        ];
        $this->M_Gallery->proses_tambah();

        $msg = "<script>alert('Data Berhasil Di Tambahkan!!!')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect("kelola_gallery/view_gallery");
    }

    public function edit_gallery($id)
    {
        $data['gallery'] = $this->M_Gallery->edit_gallery($id);
        $data['konten'] = "edit_gallery";
        $this->load->view('template_back', $data);
    }

    public function proses_edit($id)
    {
        // Ambil data dari form
        $judul_gallery = $this->input->post('judul_gallery'); // Tambahkan ini
        $deskripsi = $this->input->post('deskripsi');


        // Proses edit data dengan model
        $data = [
            'judul_gallery' => $judul_gallery, // Tambahkan ini
            'deskripsi' => $deskripsi,

            // Pastikan gambar diupload dengan benar
        ];
        $this->M_Gallery->proses_edit($id);

        $msg = "<script>alert('Data Berhasil Di Edit')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect("kelola_gallery/view_gallery");
    }

    public function hapus_gallery($id)
    {
        $this->M_Gallery->hapus_gallery($id);
        $msg = "<script>alert('Data Berhasil Di Hapus')</script>";
        $this->session->set_flashdata("pesan", $msg);
        redirect("kelola_gallery/view_gallery");
    }
}
?>
