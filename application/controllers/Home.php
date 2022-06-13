<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('main_model','', TRUE);
		$this->load->model('ModelProfile');
		$this->load->model('ModelStruktur');
		$this->load->model('ModelGuru');
		$this->load->model('ModelProfile');
		$this->load->model('ModelGaleri');
		$this->load->library('pagination');	
		$this->load->helper('url');
	}

	public function index()	{
		$data['carousel'] = $this->main_model->getCarousel(3);
        $data['profile'] =$this->ModelProfile->read_profile()->result();
		$data['berita'] = $this->main_model->getBerita(3)->result();
		$data['prestasi'] = $this->main_model->getPrestasi(3)->result();
		$data['galeri'] = $this->main_model->getGaleri(6);
		
		$this->load->view('index',$data);
	}

	public function profile(){
		$data['struktur'] = $this->ModelStruktur->read_struktur();
        $data['profile'] =$this->ModelProfile->read_profile()->result();
        $data['visi'] =$this->ModelProfile->read_profile_visi()->result();
		$this->load->view('profile',$data);
	}
	public function tenaga_pendidik(){
        $data['profile'] =$this->ModelProfile->read_profile()->result();
		$data['guru'] = $this->ModelGuru->read_guru();
		$this->load->view('tenaga_pendidik',$data);
	}
	public function ekstra_kulikuler(){
        $data['profile'] =$this->ModelProfile->read_profile()->result();
        $data['ekskul'] =$this->ModelProfile->read_profile_ekskul()->result();
		$this->load->view('ekskul',$data);
	}
	public function prestasi(){
		$data['prestasi'] = $this->main_model->getPrestasi()->result();
		$this->load->view('prestasi',$data);
	}
	public function prestasi_detail(){
		$id_prestasi = $this->uri->segment(2);
		$data['prestasi'] = $this->main_model->getPrestasiId($id_prestasi);
		$data['prestasiside'] = $this->main_model->getPrestasi()->result();
		$this->load->view('prestasi-detail',$data);
	}
	public function berita(){
		$data['berita'] = $this->main_model->getBerita()->result();
		$this->load->view('berita',$data);
	}
	public function berita_detail(){
		$id_berita = $this->uri->segment(2);
		$data['berita'] = $this->main_model->getBeritaId($id_berita);
		$data['beritaside'] = $this->main_model->getBerita()->result();
		$this->load->view('berita-detail',$data);
	}
	public function galeri(){
		$data['galeri'] = $this->ModelGaleri->read_galeri();
		$this->load->view('galeri',$data);
	}
	public function galeri_detail(){
		$this->load->view('galeri-detail');
	}
	public function kontak(){
        $data['profile'] =$this->ModelProfile->read_profile()->result();
		$this->load->view('kontak', $data);
	}

} 