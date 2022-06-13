<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_app');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}	
	}

	public function index()	{	
		$this->template->views('admin/dashboard');
	}
}
