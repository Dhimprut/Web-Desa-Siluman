<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori_produk extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    

    public function get_produk_by_kategori($id_kategori_produk) {
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->where('id_kategori_produk', $id_kategori_produk);
        $query = $this->db->get();
        
        return $query->result(); // Mengembalikan array objek
    }
    
    

    // List kategori_produk
    public function Listkategoriproduk() 
    {
        return $this->db->query("SELECT * FROM tbl_kategori_produk")->result();
    }

    // View
    public function view_kategori_produk()
    {
        return $this->db->query("SELECT * FROM tbl_kategori_produk")->result();
    }

    // Insert
    public function proses_tambah()
    {
        $data = array(
            "nama_kategori_produk" => $this->input->post('nama_kategori_produk'),
        );
        $this->db->insert("tbl_kategori_produk", $data);
    }

    // Edit
    public function edit_kategori_produk($id)
    {
        $this->db->where("id_kategori_produk", $id);
        return $this->db->get("tbl_kategori_produk")->row();    
    }

    public function proses_edit($id)
    {
        $data = array(
            "nama_kategori_produk" => $this->input->post('nama_kategori_produk'),
        );
        $this->db->where("id_kategori_produk", $id);
        return $this->db->update("tbl_kategori_produk", $data);
    }

    // Delete
    public function hapus_kategori_produk($id)
    {
        $this->db->where("id_kategori_produk", $id);
        return $this->db->delete("tbl_kategori_produk");    
    }

    // Get artikel by kategori_produk



public function get_produk_by_kategori_produk($id_kategori_produk)
{
    $this->db->select('tbl_produk.*, tbl_kategori_produk.nama_kategori_produk');
    $this->db->from('tbl_produk');
    $this->db->join('tbl_kategori_produk', 'tbl_kategori_produk.id_kategori_produk = tbl_produk.id_kategori_produk');
    $this->db->where('tbl_produk.id_kategori_produk', $id_kategori_produk);
    $query = $this->db->get();

    return $query->result();
}



}
?>
