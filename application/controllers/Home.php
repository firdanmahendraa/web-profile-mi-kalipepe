<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('main_model','', TRUE);
		$this->load->model('m_app','', TRUE);
		$this->load->library('pagination');	
		$this->load->helper('url');

	}

	public function index()	{
		// $data['prestasi'] = $this->main_model->read_post()->result();

		$data['carousel'] = $this->main_model->getCarousel(3);
		// $data['prestasi'] = $this->main_model->getPost(3);
		// $data['guru'] = $this->main_model->getGuru(3);
		// $data['berita'] = $this->main_model->getBerita(3);
		$data['galeri'] = $this->main_model->getGaleri(6);
		
		$this->load->view('index',$data);
	}

	public function profile(){
		// $data['galeri'] = $this->m_app->read_galeri()->result();
		$this->load->view('profile');
	}
	public function tenaga_pendidik(){
		// $data['guru'] = $this->m_guru->read_guru();
		$this->load->view('tenaga_pendidik');
	}
	public function ekstra_kulikuler(){
		// $data['guru'] = $this->m_guru->read_guru();
		$this->load->view('ekskul');
	}
	public function prestasi(){
		// $data['galeri'] = $this->m_app->read_galeri()->result();
		$this->load->view('prestasi');
	}
	public function prestas_detail(){
		// $data['galeri'] = $this->m_app->read_galeri()->result();
		$this->load->view('prestas-detail');
	}
	public function berita(){
		// $data['galeri'] = $this->m_app->read_galeri()->result();
		$this->load->view('berita');
	}
	public function berita_detail(){
		// $data['galeri'] = $this->m_app->read_galeri()->result();
		$this->load->view('berita-detail');
	}
	public function galeri(){
		$data['galeri'] = $this->m_app->read_galeri()->result();
		$this->load->view('galeri',$data);
	}
	public function galeri_detail(){
		// $data['galeri'] = $this->m_app->read_galeri()->result();
		$this->load->view('galeri-detail');
	}
	public function kontak(){
		// $data['galeri'] = $this->m_app->read_galeri()->result();
		$this->load->view('kontak');
	}

} 