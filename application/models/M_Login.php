<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class M_Login extends CI_Model
{
    public function __construct(){
        parent::__construct();
    }
    public function ceklogin()
    {
        $user=$this->input->post("user");
        $pass=$this->input->post("pass");
        $q="select * from tbl_user where username='$user' and password='$pass'";
        $db=$this->db->query($q);
        if ($db->num_rows()!=0) {
            $db=$db->row();
            if ($db->level=="1") {
                $data=array('level'=>'Admin');
                $this->session->set_userdata($data);
                $msg="<script>alert('Login Sebagai Admin')</script>";
                $this->session->set_flashdata("pesan",$msg);
                redirect('dashboard');
            }
            if ($db->level=="2") {
                $data=array('level'=>'Member');
                $this->session->set_userdata($data);
                $msg="<script>alert('Login Sebagai Member')</script>";
                $this->session->set_flashdata("pesan",$msg);
                redirect('dashboard');
            }
        }else {
            $msg="<script>alert('Maaf username dan Password anda salah')</script>";
            $this->session->set_flashdata("pesan",$msg);
            redirect('login');
        }
    }
}
?>