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
	// ============== Data Jabatan ==============
	function tambah_jabatan(){//create jabatan
		$nama_jabatan = $this->input->post('nama_jabatan');
 
		$data = array(
			'nama_jabatan' => $nama_jabatan
			);
		$this->m_app->input_jabatan($data,'tb_jabatan');
		redirect('data-jabatan');
	}
	function data_jabatan()	{//read jabatan
		$data['jabatan'] = $this->m_app->read_datajabatan()->result();
		$this->template->views('admin/data_jabatan',$data);
	}
	function ubah_jabatan(){//update jabatan
		$id= $this->input->post('id');	
		$nama_jabatan = $this->input->post('nama_jabatan');
	 
		$data = array(
			'nama_jabatan' => $nama_jabatan
		);

		$this->m_app->update_jabatan($id,$data);
		redirect('data-jabatan');
	}
	function hapus_jabatan($id){//delete jabatan
		$where = array('id_jabatan' => $id);
		$this->m_app->delete_jabatan($where,'tb_jabatan');
		redirect('data-jabatan');
    }

    // ============== Data Jabatan ==============
	function tambah_jenjang(){//create jenjang
		$jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
 
		$data = array(
			'jenjang_pendidikan' => $jenjang_pendidikan
			);
		$this->m_app->create_jenjangpendidikan($data,'tb_pendidikan');
		redirect('data-jenjang');
	}
	function data_jenjang()	{//read jenjang
		$data['jenjang'] = $this->m_app->read_jenjangpendidikan()->result();
		$this->template->views('admin/data_jenjang',$data);
	}
	function ubah_jenjang(){//update jenjang
		$id= $this->input->post('id');	
		$jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
	 
		$data = array(
			'jenjang_pendidikan' => $jenjang_pendidikan
		);

		$this->m_app->update_jenjangpendidikan($id,$data);
		redirect('data-jenjang');
	}
	function hapus_jenjang($id){//delete jabatan
		$where = array('id_pendidikan' => $id);
		$this->m_app->delete_jabatan($where,'tb_pendidikan');
		redirect('data-jenjang');
    }

}
