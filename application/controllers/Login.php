<?php
class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
    }

    public function index()
    {
        if($this->session->userdata("level"))
        {
            redirect("login");
        }
        $this->load->view('view_login');
    }
    public function ceklogin()
    {
        $this->load->model('M_Login');
        $this->M_Login->ceklogin();
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect("login");
    }
}
?>