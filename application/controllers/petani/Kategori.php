<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
                                function __construct()
                {
                                parent:: __construct();
                                $this->load->model('Kategori_model','', TRUE);
                                //ini digunakan untuk dapat mengakses model Kategori_model
                }

                public function index()
                {
                                $data['dd_bidang'] = $this->Kategori_model->get();
                                $this->load->view('new_form',$data);
                }
}
?>