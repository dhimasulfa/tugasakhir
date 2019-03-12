<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Petani extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tani"] = $this->product_model->getAll('petani');
        // $data["bawang"] = $this->bawang_model->tablejoin2('barang b','categori c', 'b.brg_id=c.brg_id');
        $this->load->view("admin/petani/viewpetani", $data);
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $data["categori"] = $this->product_model->getAll('categori');
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $post = $this->input->post();
            $datapetani = array(
                'ptn_nama'      => $post['name'],
                'ptn_alamat'    => $post['alamat'],
                'ptn_nohp'      => $post['nomor'],
                'ptn_gender'    => $post['gender'],
                'ptn_created'   => $post['tanggal'],
                'ptn_uname'     =>1,
                'ptn_password'  =>1
    
            );

            $id_barang = $product->savedata2('petani',$datapetani);
            // $dataharga = array(
            //     'hrg_tanggal'   => date('Y-m-d'),
            //     'hrg_nilai'     => $post['price'],
            //     'brg_id'        => $id_barang
            // );
            // $product->savedata('harga',$dataharga);

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }


        $this->load->view("admin/petani/newpetani", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/petani');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
        $searchid = array(
            'ptn_id'        => $id
        );

        if ($validation->run()) {
            $post = $this->input->post();
            $dataupdate = array(
                'ptn_nama'      => $post['name'],
                'ptn_alamat'    => $post['alamat'],
                'ptn_nohp'      => $post['nomor'],
                'ptn_gender'    => $post['gender']
            );

            $product->update("petani",$dataupdate,$searchid);

            if ($post['password'] != "") {
                $dataupdate = array(
                    'ptn_password'  => md5($post['password'])
                );
                
                $product->update("petani",$dataupdate,$searchid);
            }

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById("petani",$searchid);
        
        $this->load->view("admin/petani/editpetani", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        $searchid = array(
            'ptn_id'        => $id
        );
         if ($this->product_model->delete('petani',$searchid)) {
            redirect(site_url('admin/petani'));
        }
       

    }

    public function verifikasi($id = null)
    {
        if (!isset($id)) redirect('admin/petani');
       
        $product = $this->product_model;
        $searchid = array(
            'ptn_id'        => $id
        );

        $dataupdate = array(
                'ptn_status'      => 'terverifikasi',
        );

        $product->update("petani",$dataupdate,$searchid);
        if ($product) {
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            redirect('admin/petani');
        }
    }

   
}
