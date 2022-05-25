<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	public function index()	{
		$this->load->view('admin/login');
	}

	public function dashboard()	{
		$this->template->views('admin/dashboard');
	}

	// Menu
	public function data_guru()	{
		$this->template->views('admin/data_guru');
	}
	public function data_mapel()	{
		$this->template->views('admin/data_mapel');
	}
	public function data_jabatan()	{
		$this->template->views('admin/data_jabatan');
	}
	public function data_kategori()	{
		$this->template->views('admin/data_kategori');
	}

}
