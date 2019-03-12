<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('status') != "login_admin"){
			redirect(site_url("admin/auth"));
		}
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}
}
