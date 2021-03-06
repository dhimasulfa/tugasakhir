<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bawang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["bawang"] = $this->product_model->getAll('barang');
        $data["kecamatan"] = $this->product_model->getAll('kecamatan');
        // $data["bawang"] = $this->bawang_model->tablejoin2('select * from barang b join categori c on b.ctg_id=c.ctg_idsss');
        $this->load->view("petani/bawangmerah", $data);
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $data["categori"] = $this->product_model->getAll('categori');
        $data["kecamatan"] = $this->product_model->getAll('kecamatan');
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
                'brg_berat'     => $post['berat'],
                'kec_id'      => $post['sellok'],
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
                // 'brg_nama'      => $post['name'],
                'brg_deskripsi' => $post['description'],
                'ctg_id'        => $post['selcat'],
                'brg_luas'      => $post['luas'],
                'brg_berat'     => $post['berat'],
                'kec_id'    => $post['sellok']
            );

            $product->update("barang",$dataupdate,$searchid,$identifier);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById("barang",$searchid);
        $data["categori"] = $this->product_model->getAll('categori');        
        $data["kecamatan"] = $this->product_model->getAll('kecamatan');
        if (!$data["categori"]) show_404();
        if(!$data["kecamatan"]) show_404();
        
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
