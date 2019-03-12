<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("tengkulak_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data["list"] = $this->tengkulak_model->getAll('barang','harga','kecamatan','categori');
        $data["list"] = $this->tengkulak_model->getQ('select * from categori, kecamatan, barang, harga where barang.ctg_id = categori.ctg_id
         and barang.kec_id = kecamatan.kec_id and harga.brg_id = barang.brg_id and harga.hrg_status = 1');
         $data["kategori"] = $this->tengkulak_model->getAll('categori');
        $this->load->view("tengkulak/listing", $data);
    }

    public function kategori($id)
    {
        // $data["list"] = $this->tengkulak_model->getAll('barang','harga','kecamatan','categori');
        $data["list"] = $this->tengkulak_model->getQ('select * from categori, kecamatan, barang, harga where barang.ctg_id = categori.ctg_id
         and barang.kec_id = kecamatan.kec_id and harga.brg_id = barang.brg_id and harga.hrg_status = 1 and barang.ctg_id = '.$id);
         $data["kategori"] = $this->tengkulak_model->getAll('categori');
        $this->load->view("tengkulak/lkategori", $data);
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $data["list"] = $this->product_model->getAll('barang');
        $data["list"] = $this->product_model->getAll('categori');
        $data["list"] = $this->product_model->getAll('kecamatan');
        $validation->set_rules($product->rulesbwadd());

        if ($validation->run()) {
            $post = $this->input->post();
            $temp = explode(".", $_FILES['image']['name']);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            $databarang = array(
                // 'brg_nama'      => $post['name'],
                'brg_deskripsi' => $post['description'],
                'brg_gambar'    => $newfilename,
                'brg_luas'      => $post['luas'],
                'kec_id'    => $post['sellok'],
                'ctg_id'        => $post['selcat'],
                'ptn_id'        => $this->session->userdata('id')
                
    
            );

            $id_barang = $product->savedata('barang',$databarang);
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

