<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["berita"] = $this->product_model->getAll('news');
        // $data["bawang"] = $this->bawang_model->tablejoin2('barang b','categori c', 'b.brg_id=c.brg_id');
        $this->load->view("admin/news_admin", $data);
    }

    public function add()
    {
        $product = $this->product_model;
        $validation = $this->form_validation;
        $data["news"] = $this->product_model->getAll('news');
        $validation->set_rules($product->rulesnews());

        if ($validation->run()) {
            $post = $this->input->post();
            $temp = explode(".", $_FILES['image']['name']);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            $datanews = array(
                'news_gambar'       => $newfilename,
                'news_judul'        => $post['judul'],
                'news_penulis'      => $post['nama'],
                'news_tgl'          => $post['tanggal'],
                'news_deskripsi'    => $post['isi']
            );
   
            $id_barang = $product->savedatanews('news',$datanews);
           
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/add_news", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('news');
       
        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rulesnews());
        $searchid = array(
            'news_id'        => $id
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
                'news_gambar'       => $newfilename,
                'news_judul'        => $post['judul'],
                'news_penulis'      => $post['nama'],
                'news_tgl'          => $post['tanggal'],
                'news_deskripsi'    => $post['isi']
                
            );

            $product->update("news",$dataupdate,$searchid,$identifier);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById("news",$searchid);
        $data["news"] = $this->product_model->getAll('news');
        if (!$data["news"]) show_404();
        
        $this->load->view("admin/edit_news", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        $searchid = array(
            'news_id'        => $id
        );
         if ($this->product_model->delete('news',$searchid)) {
            redirect(site_url('admin/news'));
        }
       

    }

   
}
