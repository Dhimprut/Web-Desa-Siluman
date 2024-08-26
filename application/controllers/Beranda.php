<?php defined('BASEPATH') OR exit ('No direct script access allowed');
    class Beranda extends CI_Controller {
        public function __construct() 
        {
        parent::__construct ();
        $this->load->model ('M_Artikel');
        $this->load->model ('M_Gallery');
        $this->load->model ('M_Kategori');
        $this->load->model ('M_Kategori_Produk');
        $this->load->model('M_Produk'); // Muat model M_Produk
        }
public function index()
{
    $data['artikel'] = $this->M_Artikel->view_artikel(3); // Ambil 3 artikel saja
    $data['kategori'] = $this->M_Kategori->view_kategori();
    $data['produk'] = $this->M_Produk->view_produk();
    $data['listkategori'] = $this->M_Kategori->ListKategori(); // Load
    $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk(); 
    

    $data['konten'] = "view_beranda";
    $this->load->view('template_front', $data);
}

    
        public function artikel()

        {
            $data['artikel']= $this->M_Artikel->view_artikel();
            $data['konten']= "view_artikel_front";
            $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
            $this->load->view('template_front', $data);
        }

        public function artikel_all()

        {
            $data['artikel']= $this->M_Artikel->view_artikel();
            $data['listkategori'] = $this->M_Kategori->ListKategori(); // Load
            $data['konten']= "view_artikel_all";
            $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
            $this->load->view('template_front', $data);
        }

        public function gallery()

        {
            $data['gallery']= $this->M_Gallery->view_gallery();
            $data['konten']= "view_gallery_front";
            $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
            $this->load->view('template_front', $data);
        }

        public function gallery_all()

        {
            $data['gallery']= $this->M_Gallery->view_gallery();
            $data['listkategori'] = $this->M_Kategori->ListKategori(); // Load
            $data['konten']= "view_gallery_all";
            $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
            $this->load->view('template_front', $data);
        }
        public function view_kategori_front($id)
	{

		$data['artikel']=$this->M_Artikel->kategori($id);
		$data['kategori']=$this->M_Kategori->view_kategori();
        $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
		$data['konten']="view_kategori_front";
		$this->load->view('template_front2',$data);
	}
	// Halaman Artikel depan
	public function view_artikel_front()
	{
		$data['artikel']=$this->M_Artikel->view_artikel();
		$data['kategori']=$this->M_Kategori->view_kategori();
        $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
		$data['konten']="view_artikel_front";
		$this->load->view('template_front2',$data);
	}

    public function view_gallery_front()
	{

		$data['artikel']=$this->M_Artikel->view_gallery();
		$data['kategori']=$this->M_Kategori->view_kategori();
        $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
		$data['konten']="view_gallery_front";
		$this->load->view('template_front2',$data);
	}

    public function view_artikel_all()
	{
        $data['listkategori'] = $this->M_Kategori->ListKategori(); // Load
		$data['artikel']=$this->M_Artikel->view_artikel();
		$data['kategori']=$this->M_Kategori->view_kategori();
        $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
		$data['konten']="view_artikel_all";
		$this->load->view('template_front2',$data);
	}

    public function view_gallery_all()
	{
        $data['listkategori'] = $this->M_Kategori->ListKategori(); // Load
		$data['gallery']=$this->M_Gallery->view_gallery();
        $data['kategori']=$this->M_Gallery->ListKategori();
        $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
		$data['konten']="view_gallery_all";
		$this->load->view('template_front2',$data);
	}
        public function login()

        {
            $data['gallery']= $this->M_Gallery->view_gallery();
            $data['konten']= "view_gallery_front";
            $this->load->view('template_front', $data);
        }

        public function logout()

        {
            
            $this->session->sess_destroy();
            redirect("beranda");
        }

        public function produk()

        {
            $data['produk']= $this->M_Produk->view_produk();
            $data['konten']= "view_produk_front";
            $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
            $this->load->view('template_front', $data);
        }

        public function produk_all()

        {
            $data['produk']= $this->M_Produk->view_produk();
            $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk(); // Load
            $data['konten']= "view_produk_front";
            $this->load->view('template_front', $data);
        }

        public function detail_produk($id)
{
    $data['produk'] = $this->M_Produk->get_produk_by_id($id); // Ambil data produk berdasarkan ID
    $data['konten'] = "view_detail_produk"; // View baru untuk detail produk
    $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
    $this->load->view('template_front', $data);
}

public function about_me()
{
    $data['konten'] = "view_about_me"; // View baru untuk halaman About Me
    $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
    $this->load->view('template_front', $data);
    
}

public function tentang_desa()
{
    $data['konten'] = "v_tentang_desa"; // View baru untuk halaman About Me
    $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
    $this->load->view('template_front', $data);
    
}

public function visi_misi()
{
    $data['konten'] = "v_visi_misi"; // View baru untuk halaman About Me
    $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
    $this->load->view('template_front', $data);
}

public function sejarah_desa()
{
    $data['konten'] = "v_sejarah_desa"; // View baru untuk halaman About Me
    $data['listkategoriproduk'] = $this->M_Kategori_Produk->listkategoriproduk();
    $this->load->view('template_front', $data);
}



    }
?>