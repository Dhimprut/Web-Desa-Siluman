<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_Artikel extends CI_Controller { 
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_artikel');
        $this->load->model('m_kategori');
    }
    
    public function view_artikel()
    {
        $data['artikel'] = $this->m_artikel->view_artikel();
        $data['konten'] = "view_artikel";
        $this->load->view('template_back', $data);
    }

    public function tambah_artikel()
    {
        $data['list_kategori'] = $this->m_kategori->ListKategori();
        $data['konten'] = "tambah_artikel";
        $this->load->view('template_back', $data);
    }

    public function proses_tambah()
    {
        $this->load->library('upload');
        
        $config['upload_path'] = './assets/gallery/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['gambar_artikel']['name'];
        
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar_artikel')) {
            $uploadData = $this->upload->data();
            $gambar_artikel = $uploadData['file_name'];
        } else {
            $gambar_artikel = ''; // Jika gagal, simpan sebagai string kosong atau default
        }

        $data = array(
            "gambar_artikel" => $gambar_artikel,
            "nama_artikel" => $this->input->post('nama_artikel'),
            "id_kategori" => $this->input->post('id_kategori'),
            "isi_artikel" => $this->input->post('isi_artikel'),
            "tgl_posting" => date('Y-m-d H:i:s'),
        );
        
        if ($this->db->insert("tbl_artikel", $data)) {
            $msg = "<script>alert('Artikel berhasil ditambahkan!')</script>";
            $this->session->set_flashdata('pesan', $msg);
            redirect('kelola_artikel/view_artikel');
        } else {
            $msg = "<script>alert('Artikel gagal ditambahkan!')</script>";
            $this->session->set_flashdata('pesan', $msg);
            redirect('kelola_artikel/tambah_artikel');
        }
    }

    public function edit_artikel($id)
    {
        $data['list_kategori'] = $this->m_kategori->ListKategori();
        $data['artikel'] = $this->m_artikel->edit_artikel($id);
        $data['konten'] = "edit_artikel";
        $this->load->view('template_back', $data);
    }

    public function proses_edit($id)
    {
        $this->load->library('upload');

        $config['upload_path'] = './assets/gallery/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['gambar_artikel']['name'];
        
        $this->upload->initialize($config);

        if (!empty($_FILES['gambar_artikel']['name'])) {
            if ($this->upload->do_upload('gambar_artikel')) {
                $uploadData = $this->upload->data();
                $gambar_artikel = $uploadData['file_name'];
            } else {
                $gambar_artikel = ''; // Jika gagal, simpan sebagai string kosong atau default
            }
        } else {
            // Jika tidak ada gambar baru, ambil gambar yang lama dari database
            $gambar_artikel = $this->input->post('gambar_artikel_lama');
        }

        $data = array(
            "gambar_artikel" => $gambar_artikel,
            "nama_artikel" => $this->input->post('nama_artikel'),
            "id_kategori" => $this->input->post('id_kategori'),
            "isi_artikel" => $this->input->post('isi_artikel'),
        );
        
        $this->db->where("id_artikel", $id);
        if ($this->db->update("tbl_artikel", $data)) {
            $msg = "<script>alert('Data Berhasil Diedit')</script>";
            $this->session->set_flashdata('pesan', $msg);
            redirect('kelola_artikel/view_artikel');
        } else {
            $msg = "<script>alert('Data Gagal Diedit')</script>";
            $this->session->set_flashdata('pesan', $msg);
            redirect('kelola_artikel/edit_artikel/'.$id);
        }
    }

    public function hapus_artikel($id)
    {
        if ($this->m_artikel->hapus_artikel($id)) {
            $msg = "<script>alert('Data Berhasil Dihapus')</script>";
        } else {
            $msg = "<script>alert('Data Gagal Dihapus')</script>";
        }
        $this->session->set_flashdata('pesan', $msg);
        redirect("kelola_artikel/view_artikel");
    }
}
?>
