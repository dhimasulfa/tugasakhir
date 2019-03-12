<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data["barang"] = $this->product_model->getAll('barang');
        $data["barangharga"] = $this->product_model->tablejoin2('barang b','harga h', 'b.brg_id=h.brg_id');
        // var_dump($data["barangharga"]);
        $this->load->view("petani/products", $data);
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $data["categori"] = $this->product_model->getAll('categori');
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $post = $this->input->post();
            $databarang = array(
                'brg_nama'      => $post['name'],
                'brg_deskripsi' => $post['description'],
                'brg_gambar'    => $_FILES['image']['name'],
                'ctg_id'        => $post['selcat'],
                'ptn_id'        => 1
    
            );

            $id_barang = $product->savedata('barang',$databarang);
            $dataharga = array(
                'hrg_tanggal'   => date('Y-m-d'),
                'hrg_nilai'     => $post['price'],
                'brg_id'        => $id_barang
            );
            $product->savedata('harga',$dataharga);

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $this->load->view("petani/new_form", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('petani');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $searchid = array(
            'b.brg_id'        => $id
        );

        // $data["product"] = $product->getById('barang, harga',$searchid);
        $data["product"] = $product->srcjoin('barang b','harga h', 'b.brg_id=h.brg_id', $searchid);
        // var_dump($data["product"]);
        $data["categori"] = $this->product_model->getAll('categori');
        if (!$data["product"]) show_404();
        
        $this->load->view("petani/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        $searchid = array(
            'brg_id'        => $id
        );
        
        if ($this->product_model->delete2tab('barang','harga',$searchid)) {
            redirect(site_url('petani/products'));
        }
    }
}
