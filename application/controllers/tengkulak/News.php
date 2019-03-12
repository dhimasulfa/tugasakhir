<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("tengkulak_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["news"] = $this->tengkulak_model->getAll('news');
        // $data["news"] = $this->tengkulak_model->getQ('select * from barang b join harga h on b.brg_id=h.brg_id where h.hrg_status=1');
        $this->load->view("tengkulak/news", $data);
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $data["categori"] = $this->product_model->getAll('categori');
        $validation->set_rules($product->rulesbwadd());

        if ($validation->run()) {
            $post = $this->input->post();
            $temp = explode(".", $_FILES['image']['name']);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            $databarang = array(
                'brg_nama'      => $post['name'],
                'brg_deskripsi' => $post['description'],
                'brg_gambar'    => $newfilename,
                'brg_luas'      => $post['luas'],
                'brg_lokasi'    => $post['lokasi'],
                'ctg_id'        => $post['selcat'],
                'ptn_id'        => $this->session->userdata('id')
                
    
            );

            $id_barang = $product->savedata('barang',$databarang);
            // $dataharga = array(
            //     'hrg_tanggal'   => date('Y-m-d'),
            //     'hrg_nilai'     => $post['price'],
            //     'brg_id'        => $id_barang
            // );
            // $product->savedata('harga',$dataharga);

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $this->load->view("petani/newbawang", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('petani');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rulesbwadd());
        $searchid = array(
            'brg_id'        => $id
        );

        if ($validation->run()) {
            $post = $this->input->post();
            if (empty($_FILES["image"]["name"])) {
               $newfilename = $post['old_image'];
               $identifier = "lama";
            } else {
                $temp = explode(".", $_FILES['image']['name']);
                $newfilename = round(microtime(true)) . '.' . end($temp);
                $identifier = "baru";
            }
            $dataupdate = array(
                'brg_gambar'    => $newfilename,
                'brg_nama'      => $post['name'],
                'brg_deskripsi' => $post['description'],
                'ctg_id'        => $post['selcat'],
                'brg_luas'      => $post['luas'],
                'brg_lokasi'    => $post['lokasi']
            );

            $product->update("barang",$dataupdate,$searchid,$identifier);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById("barang",$searchid);
        $data["categori"] = $this->product_model->getAll('categori');
        if (!$data["categori"]) show_404();
        
        $this->load->view("petani/editbawang", $data);
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

