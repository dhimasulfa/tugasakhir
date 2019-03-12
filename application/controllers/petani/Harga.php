<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["harga"] = $this->product_model->getAll('harga');
        // $data["bawang"] = $this->bawang_model->tablejoin2('barang b','categori c', 'b.brg_id=c.brg_id');
        $this->load->view("petani/hargabawang", $data);
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $data["categori"] = $this->product_model->getAll('barang');
        $validation->set_rules($product->rulesharga());

        if ($validation->run()) {
            $post = $this->input->post();
           
            $dataharga = array(
                'hrg_tanggal'   => $post['tanggal'],
                'hrg_nilai'     => $post['price'],
                'brg_id'        => $post['selcat'],
                'hrg_status'    => 1
            );

            $updateharga = array(
                'hrg_status'    => 0
            );
            $searchid = array(
                'brg_id'        => $post['selcat']
            );

            $product->update2('harga',$updateharga,$searchid);

            $product->savedata2('harga',$dataharga);

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $this->load->view("petani/newharga", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('petani/harga');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rulesharga());
        $searchid = array(
            'hrg_id'        => $id
        );

        if ($validation->run()) {
            $post = $this->input->post();
            $dataupdate = array(
                'hrg_nilai'      => $post['price'],
                'hrg_tanggal'   => $post['tanggal'],
                'brg_id'        => $post['selcat'],
            );

            $product->update2("harga",$dataupdate,$searchid);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById("harga",$searchid);
        $data["categori"] = $this->product_model->getAll('barang');
        if (!$data["categori"]) show_404();
        
        $this->load->view("petani/editharga", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        $searchid = array(
            'brg_id'        => $id
        );
         if ($this->product_model->delete('barang',$searchid)) {
            redirect(site_url('petani/bawang'));
        }
       

    }

   
}
