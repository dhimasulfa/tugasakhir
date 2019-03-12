<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tengkulak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tengkulak"] = $this->product_model->getAll('tengkulak');
        // $data["bawang"] = $this->bawang_model->tablejoin2('barang b','categori c', 'b.brg_id=c.brg_id');
        $this->load->view("admin/tengkulak/viewtengkulak", $data);
    }

    // public function add()
    // {
    //     $product = $this->product_model;
    //     $validation = $this->form_validation;
    //     $data["categori"] = $this->product_model->getAll('categori');
    //     $validation->set_rules($product->rules());

    //     if ($validation->run()) {
    //         $post = $this->input->post();
    //         $datapetani = array(
    //             'ptn_nama'      => $post['name'],
    //             'ptn_alamat'    => $post['alamat'],
    //             'ptn_nohp'      => $post['nomor'],
    //             'ptn_gender'    => $post['gender'],
    //             'ptn_created'   => $post['tanggal'],
    //             'ptn_uname'     =>1,
    //             'ptn_password'  =>1
    
    //         );

    //         $id_barang = $product->savedata('tengkulak',$datapetani);
    //         // $dataharga = array(
    //         //     'hrg_tanggal'   => date('Y-m-d'),
    //         //     'hrg_nilai'     => $post['price'],
    //         //     'brg_id'        => $id_barang
    //         // );
    //         // $product->savedata('harga',$dataharga);

    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }


    //     $this->load->view("admin/tengkulak/newtengkulak", $data);
    // }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/tengkulak');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
        $searchid = array(
            'tkl_id'        => $id
        );

        if ($validation->run()) {
            $post = $this->input->post();
            $dataupdate = array(
                'tkl_nama'      => $post['name'],
                'tkl_alamat'    => $post['alamat'],
                'tkl_nohp'      => $post['nomor'],
                'tkl_gender'    => $post['gender'],
                'tkl_created'   => $post['tanggal'],
                'tkl_uname'     =>1,
                'tkl_password'  =>1
            );

            $product->update2("tengkulak",$dataupdate,$searchid);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById("tengkulak",$searchid);
        $data["categori"] = $this->product_model->getAll('categori');
        if (!$data["categori"]) show_404();
        
        $this->load->view("admin/tengkulak/edittengkulak", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        $searchid = array(
            'tkl_id'        => $id
        );
         if ($this->product_model->delete('tengkulak',$searchid)) {
            redirect(site_url('admin/tengkulak'));
        }   

    }

    public function verifikasi($id = null)
    {
        if (!isset($id)) redirect('admin/tengkulak');
       
        $product = $this->product_model;
        $searchid = array(
            'tkl_id'        => $id
        );

        $dataupdate = array(
                'tkl_status'      => 'terverifikasi',
        );

        $product->update2("tengkulak",$dataupdate,$searchid);
        if ($product) {
            $this->session->set_flashdata('success', 'Berhasil diupdate');
            redirect('admin/tengkulak');
        }
    }


   
}
