<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function index()	{
		$this->template->views('admin/dashboard');
	}

	public function login()	{
		$this->load->view('admin/login');
	}
}
