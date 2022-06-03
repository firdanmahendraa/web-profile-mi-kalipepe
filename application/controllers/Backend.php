<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {
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

	// CMS
	public function carousel()	{
		$this->template->views('admin/carousel');
	}
	public function profile()	{
		$this->template->views('admin/profile');
	}
	public function prestasi()	{
		$this->template->views('admin/prestasi');
	}
	public function galeri()	{
		$this->template->views('admin/galeri');
	}
	public function news()	{
		$this->template->views('admin/news');
	}

	// Menu
	public function data_guru()	{
		$this->template->views('admin/data_guru');
	}
	// Setting
	public function data_jabatan()	{
		$data['jabatan'] = $this->m_app->read_datajabatan()->result();
		$this->template->views('admin/data_jabatan',$data);
	}
	public function data_kategori()	{
		$this->template->views('admin/data_kategori');
	}

}
