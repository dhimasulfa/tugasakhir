<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["categori"] = $this->product_model->getAll('categori');
        // $data["list"] = $this->tengkulak_model->getQ('select * from barang b join harga h on b.brg_id=h.brg_id where h.hrg_status=1');
        $this->load->view("admin/categori", $data);
    }

    public function add()
    {   
        $data["categori"] = $this->product_model->getAll('categori'); // bentar, ini buata apa?
        $this->load->view("admin/add_categori", $data);
    }
    
    public function simpan()
    {   
        $kategori = $this->input->post('ctg');
           
            $data = array(
                'ctg_nama'   => $kategori
            );
            $this->product_model->insert_data($data,'categori');
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url().'index.php/admin/Categori/add');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/categori');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rulesctg());
        $searchid = array(
            'ctg_id'        => $id
        );

        if ($validation->run()) {
            $post = $this->input->post();
            $dataupdate = array(
                'ctg_nama'      => $post['ctg']
            );

            $product->update2("categori",$dataupdate,$searchid);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById("categori",$searchid);
        $data["categori"] = $this->product_model->getAll('categori');
        if (!$data["categori"]) show_404();
        
        $this->load->view("admin/edit_categori", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        $searchid = array(
            'ctg_id'        => $id
        );
         if ($this->product_model->delete('categori',$searchid)) {
            redirect(site_url('admin/categori'));
        }
       

    }

   
}
