<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Artikel extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function view_artikel($limit = null) 
    {
        $this->db->select('*');
        $this->db->from('tbl_artikel AS ta');
        $this->db->join('tbl_kategori AS tk', 'ta.id_kategori = tk.id_kategori');
        $this->db->order_by('ta.id_artikel', 'DESC');

        if ($limit) {
            $this->db->limit($limit);
        }

        return $this->db->get()->result();
    }
    
    public function edit_artikel($id)
    {
        $this->db->where("id_artikel", $id);
        return $this->db->get("tbl_artikel")->row();
    }

    public function proses_edit($id)
    {
        $data = array(
            "gambar_artikel" => $this->input->post('gambar_artikel'),
            "nama_artikel" => $this->input->post('nama_artikel'),
            "id_kategori" => $this->input->post('id_kategori'),
            "isi_artikel" => $this->input->post('isi_artikel'),
        );
        
        $this->db->where("id_artikel", $id);
        return $this->db->update("tbl_artikel", $data);
    }

    public function hapus_artikel($id)
    {
        $this->db->where("id_artikel", $id);
        return $this->db->delete("tbl_artikel");
    }
}
?>
