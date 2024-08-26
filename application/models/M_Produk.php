<?php defined('BASEPATH') OR exit('No direct script acces allowed');
class M_produk extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    
    public function kategori_produk($id)
	{
		return $this->db->query("SELECT * FROM tbl_produk AS ta JOIN tbl_kategori_produk AS tk ON ta.`id_kategori_produk` = tk.`id_kategori_produk` WHERE ta.id_kategori_produk=$id")->result();
	}
    
 
    public function view_produk($limit = null)
    {
        $this->db->select('*');
        $this->db->from('tbl_produk AS ta');
        $this->db->join('tbl_kategori_produk AS tk', 'ta.id_kategori_produk = tk.id_kategori_produk');
    
        if ($limit) {
            $this->db->limit($limit); // Batasi jumlah produk yang diambil
        }
    
        return $this->db->get()->result();
    }
    
    public function proses_tambah()
    {
        $data=array(
            "gambar_produk"=>$this->input->post('gambar_produk'),
            "nama_produk"=>$this->input->post('nama_produk'),
            "id_kategori_produk"=>$this->input->post('id_kategori_produk'),
            "isi_produk"=>$this->input->post('isi_produk'),
        );
        $this->db->insert("tbl_produk",$data);
    }
    public function edit_produk($id)
    {
        $this->db->where("id_produk",$id);
        return $this->db->get("tbl_produk")->row();
    }
    public function proses_edit($id)
    {
        $data=array(
            "gambar_produk"=>$this->input->post('gambar_produk'),
            "nama_produk"=>$this->input->post('nama_produk'), 
            "id_kategori_produk"=>$this->input->post('id_kategori_produk'),
            "isi_produk"=>$this->input->post('isi_produk'),
        );
        $this->db->where("id_produk",$id);
        return $this->db->update("tbl_produk",$data);
    }
    public function hapus_produk($id)
    {
        $this->db->where("id_produk",$id);
        return $this->db->delete("tbl_produk");
   
}

public function get_produk_by_kategori_produk($id_kategori_produk)
{
    $this->db->select('*');
    $this->db->from('tbl_produk');
    $this->db->where('id_kategori_produk', $id_kategori_produk);
    return $this->db->get()->result();
}

public function get_produk_by_id($id)
{
    $this->db->where('id_produk', $id);
    $query = $this->db->get('tbl_produk');
    return $query->row(); // Mengembalikan satu baris data produk
}




}
?>

    