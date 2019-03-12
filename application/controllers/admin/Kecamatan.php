<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["kecamatan"] = $this->product_model->getAll('kecamatan');
        // $data["list"] = $this->tengkulak_model->getQ('select * from barang b join harga h on b.brg_id=h.brg_id where h.hrg_status=1');
        $this->load->view("admin/kecamatan", $data);
    }

    public function add()
    {   
        $data["kecamatan"] = $this->product_model->getAll('kecamatan'); 
        $this->load->view("admin/add_kec", $data);
    }
    
    public function simpan()
    {   
        $kecamatan = $this->input->post('kec');
           
            $data = array(
                'kec_nama'   => $kecamatan
            );
            $this->product_model->insert_data($data,'kecamatan');
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url().'index.php/admin/Kecamatan/add');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/kecamatan');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->ruleskec());
        $searchid = array(
            'kec_id'        => $id
        );

        if ($validation->run()) {
            $post = $this->input->post();
            $dataupdate = array(
                'kec_nama'      => $post['kec']
            );

            $product->update2("kecamatan",$dataupdate,$searchid);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById("kecamatan",$searchid);
        $data["kecamatan"] = $this->product_model->getAll('kecamatan');
        if (!$data["kecamatan"]) show_404();
        
        $this->load->view("admin/edit_kec", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        $searchid = array(
            'kec_id'        => $id
        );
         if ($this->product_model->delete('kecamatan',$searchid)) {
            redirect(site_url('admin/kecamatan'));
        }
       

    }

   
}
