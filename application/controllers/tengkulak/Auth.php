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
			redirect(site_url("tengkulak/home"));
        }
        
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->ruleslogin());

        if ($validation->run()==TRUE) {
            $this->session->set_flashdata('gagal', 'Username atau Password Salah!'); 
            $post = $this->input->post();
            // var_dump($post);
            $wuname = array('tkl_uname' => $post['uname']); 
            $wpass = array('tkl_password' => md5($post['password'])); 

            $login = $product->cek_user('tengkulak', $wuname, $wpass); 

            if (!empty($login)) { 
                // login berhasil
                $data_session = array(
                    'id' => $login["tkl_id"],
                    'nama' => $login["tkl_nama"],
                    'status' => "login_tengkulak"
                    ); 
                $this->session->set_userdata($data_session); 
                redirect(site_url("tengkulak/homepage")); 
            } else { 
                // login gagal 
                $this->session->set_flashdata('gagal', 'Username atau Password Salah!'); 
                // redirect(site_url("tengkulak/auth")); 
            }
        }
        $this->load->view("tengkulak/login");
    }
    
    function logout(){
            $this->session->sess_destroy();
            redirect(site_url("tengkulak/auth"));
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
            'tkl_nama'       => $post['name'],
            'tkl_alamat'     => $post['alamat'],
            'tkl_nohp'       => $post['nohp'],
            'tkl_uname'      => $post['uname'],
            'tkl_password'   => md5($post['password']),
            'tkl_gender'     => $post['gender'], 
            'tkl_status'     => 'belum verifikasi'
        );

        $id_barang = $product->savedata2('tengkulak',$databarang);

        $this->session->set_flashdata('success', 'Berhasil disimpan');
    }
    $this->load->view('tengkulak/register');
    
}
}