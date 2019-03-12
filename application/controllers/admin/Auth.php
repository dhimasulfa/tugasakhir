<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    function index(){
        if($this->session->userdata('status') == "login"){
			redirect(site_url("admin/overview"));
        }
        
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->ruleslogin());

        if ($validation->run()==TRUE) {
            $this->session->set_flashdata('gagal', 'Username atau Password Salah!'); 
            $post = $this->input->post();
            // var_dump($post);
            $wuname = array('adm_uname' => $post['uname']); 
            $wpass = array('adm_password' => md5($post['password'])); 

            $login = $product->cek_user('admin', $wuname, $wpass); 

            if (!empty($login)) { 
                // login berhasil
                $data_session = array(
                    'id' => $login["adm_id"],
                    'nama' => $login["adm_nama"],
                    'status' => "login_admin"
                    ); 
                $this->session->set_userdata($data_session); 
                redirect(site_url("admin/overview")); 
            } else { 
                // login gagal 
                $this->session->set_flashdata('gagal', 'Username atau Password Salah!'); 
                redirect(site_url("admin/auth")); 
            }
        }
        
        $this->load->view("admin/login");
    }
    
    function logout(){
            $this->session->sess_destroy();
            redirect(site_url("admin/auth"));
    }
    

}