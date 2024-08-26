<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kategori extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // List Kategori
    public function ListKategori() 
    {
        return $this->db->query("SELECT * FROM tbl_kategori")->result();
    }

    // View
    public function view_kategori()
    {
        return $this->db->query("SELECT * FROM tbl_kategori")->result();
    }

    // Insert
    public function proses_tambah()
    {
        $data = array(
            "nama_kategori" => $this->input->post('nama_kategori'),
        );
        $this->db->insert("tbl_kategori", $data);
    }

    // Edit
    public function edit_kategori($id)
    {
        $this->db->where("id_kategori", $id);
        return $this->db->get("tbl_kategori")->row();    
    }

    public function proses_edit($id)
    {
        $data = array(
            "nama_kategori" => $this->input->post('nama_kategori'),
        );
        $this->db->where("id_kategori", $id);
        return $this->db->update("tbl_kategori", $data);
    }

    // Delete
    public function hapus_kategori($id)
    {
        $this->db->where("id_kategori", $id);
        return $this->db->delete("tbl_kategori");    
    }

    // Get artikel by kategori


    public function get_artikel_by_kategori($id_kategori)
{
    $this->db->select('tbl_artikel.*, tbl_kategori.nama_kategori');
    $this->db->from('tbl_artikel');
    $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_artikel.id_kategori');
    $this->db->where('tbl_artikel.id_kategori', $id_kategori);
    $query = $this->db->get();

    return $query->result();
}

}
?>
