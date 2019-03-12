<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index()
	{
        // load view admin/overview.php
        $this->load->view("petani/setting_akun");
	}
}