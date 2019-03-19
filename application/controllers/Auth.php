<?php
class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
    }
 
    function index(){
        $this->load->view('login');
    }

    function auth(){
        $username=$this->input->post('ptn_uname');
        $password=$this->input->post('ptn_password');
        $uname=$this->input->post('tkl_uname');
        $pass=$this->input->post('tkl_password');
 
        $cek_login=$this->Login_model->auth_login($username,$password);
        
        if($cek_login->num_rows() > 0){ //jika login sebagai admin
                        $data=$cek_login->row_array();
                $this->session->set_userdata('masuk',TRUE);

                if($data['ptn_status']== 'terverivikasi'){ 
                    $this->session->set_userdata('akses','terverivikasi');
                    $this->session->set_userdata('ses_id',$data['ptn_id']);
                    $this->session->set_userdata('ses_nama',$data['ptn_username']);
                    redirect('tengkulak/Home');
                }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect(base_url('Auth'));
                    }
 
        }else{ //jika login sebagai peserta
                    $cek_peserta=$this->Login_model->auth_user($uname,$pass);
                    if($cek_peserta->num_rows() > 0){
                            $data=$cek_peserta->row_array();
                        $this->session->set_userdata('masuk',TRUE);
                            
                            $this->session->set_userdata('akses','terverivikasi');
                            $this->session->set_userdata('ses_id',$data['tkl_id']);
                            $this->session->set_userdata('ses_nama',$data['tkl_nama']);
                            redirect('petani/Overview');
                    }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect(base_url('Auth'));
                    }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}