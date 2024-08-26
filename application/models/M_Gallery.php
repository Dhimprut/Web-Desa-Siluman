<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Gallery extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Read
    public function view_gallery()
    {
        return $this->db->query("SELECT * FROM tbl_gallery")->result();
    }

    // Create
    public function proses_tambah()
    {
        $lokasi_file = $_FILES['gambar']['tmp_name'];
        $tipe_file = $_FILES['gambar']['type'];
        $nama_file = $_FILES['gambar']['name'];
        $direktori = "assets/gallery/$nama_file";

        if (!empty($lokasi_file)) {
            move_uploaded_file($lokasi_file, $direktori);
        }

        $data = array(
            "gambar" => $nama_file,
            "deskripsi" => $this->input->post('deskripsi'),
            "judul_gallery" => $this->input->post('judul_gallery'), 
    
            // Menambahkan judul_gallery
        );
        $this->db->insert("tbl_gallery", $data);
    }

    // Edit
    public function edit_gallery($id)
    {
        $this->db->where("id_gallery", $id);
        return $this->db->get("tbl_gallery")->row();    
    }

    public function proses_edit($id)
    {
        $lokasi_file = $_FILES['gambar']['tmp_name'];
        $tipe_file = $_FILES['gambar']['type'];
        $nama_file = $_FILES['gambar']['name'];
        $direktori = "assets/gallery/$nama_file";

        if (!empty($lokasi_file)) {
            move_uploaded_file($lokasi_file, $direktori);
        }

        $data = array(
            "gambar" => $nama_file,
            "deskripsi" => $this->input->post('deskripsi'),
            "judul_gallery" => $this->input->post('judul_gallery') // Menambahkan judul_gallery
        );
        $this->db->where("id_gallery", $id);
        return $this->db->update("tbl_gallery", $data);
    }

    // Delete
    public function hapus_gallery($id)
    {
        $this->db->where("id_gallery", $id);
        return $this->db->delete("tbl_gallery");    
    }
}
?>
