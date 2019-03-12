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
			redirect(site_url("petani/overview"));
        }
        
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->ruleslogin());

        if ($validation->run()==TRUE) {
            $this->session->set_flashdata('gagal', 'Username atau Password Salah!'); 
            $post = $this->input->post();
            // var_dump($post);
            $wuname = array('ptn_uname' => $post['uname']); 
            $wpass = array('ptn_password' => md5($post['password'])); 

            $login = $product->cek_user('petani', $wuname, $wpass); 

            if (!empty($login)) { 
                // login berhasil
                $data_session = array(
                    'id' => $login["ptn_id"],
                    'nama' => $login["ptn_nama"],
                    'status' => "login_petani"
                    ); 
                $this->session->set_userdata($data_session); 
                redirect(site_url("petani/overview")); 
            } else { 
                // login gagal 
                $this->session->set_flashdata('gagal', 'Username atau Password Salah!'); 
                redirect(site_url("petani/auth")); 
            }
        }
        $this->load->view("petani/login");
    }
    
    function logout(){
            $this->session->sess_destroy();
            redirect(site_url("petani/auth"));
    }
public function register()
{   
	
    $product = $this->product_model;
    $validation = $this->form_validation;
    // $data["categori"] = $this->product_model->getAll('categori');
    $validation->set_rules($product->rulesregister());

    if ($validation->run()) {
        
        $post = $this->input->post();
        $databarang = array(
            'ptn_nama'       => $post['name'],
            'ptn_alamat'     => $post['alamat'],
            'ptn_nohp'       => $post['nohp'],
            'ptn_uname'      => $post['uname'],
            'ptn_password'   => md5($post['password']),
            'ptn_gender'     => $post['gender'], 
            'ptn_status'     => 'belum verifikasi'
        );

        $id_barang = $product->savedata('petani',$databarang);

        $this->session->set_flashdata('success', 'Berhasil disimpan');
    }
    $this->load->view('petani/register');
    
}
}