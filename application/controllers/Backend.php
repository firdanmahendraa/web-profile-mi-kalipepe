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
	// ============== Carausel ==============
	public function tambah_carousel(){
		$config['upload_path']          = './assets/foto/carousel';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('gambar')){
            $this->m_app->create_carousel();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('carousel');
        }else{
            print_r($this->upload->display_errors());
            die;
        }
    }
	public function carousel()	{
		$data['carousel'] = $this->m_app->read_carousel()->result();
		$this->template->views('admin/carousel',$data);
	}
	public function edit_carousel(){//update guru
        $id= $this->input->post('id');
        $config['upload_path']          = './assets/foto/carousel';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 5128;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;
            $headline 				= $this->input->post('headline', TRUE);
            $deskripsi 				= $this->input->post('deskripsi', TRUE);
            $status 				= $this->input->post('status', TRUE);
            $tanggal_post			= $this->input->post('tanggal_post', TRUE);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('gambar')){
            $gambar 		= $this->upload->data();
            $gambar 		= $gambar['file_name'];
            $data = array(
            	'gambar' => $gambar,
            	'headline' => $headline,
            	'deskripsi' => $deskripsi,
            	'status' => $status,
            	'tanggal_post' => $tanggal_post
            );
            
            $old_image = $data['id_carousel']['gambar'];
            if ($old_image != null){
                unlink(FCPATH . 'assets/foto/carousel/' . $old_image);
            }
            
            $this->m_app->update_carousel($id,$data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">berhasil di simpan</div>');
            redirect('carousel');
                        
        }else{
            $data = array(
            	'gambar' => $gambar,
            	'headline' => $headline,
            	'deskripsi' => $deskripsi,
            	'status' => $status,
            	'tanggal_post' => $tanggal_post
            );

            $this->m_app->update_carousel($id,$data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">berhasil di simpan</div>');
            redirect('data-guru');
        }
    }
    public function hapus_carousel($id){//delete guru
        $data = $this->m_app->ambil_id_carousel($id);
        $path = 'assets/foto/carousel/';
        @unlink($path.$data->carousel);
        if ($this->m_app->delete_carousel($id) ==  TRUE) {
        	$this->session->set_flashdata('pesan', ' DATA BERHASIL DIHAPUS');
        }
        redirect ('data-guru');
    }


	// ============== Profile ==============
    public function tambah_profile(){
        $config['upload_path']          = './assets/foto/profile';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('gambar_profile')){
            $this->m_app->create_profile();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('profile/p');
        }else{
            print_r($this->upload->display_errors());
            die;
        }
    }
	public function profile(){
        $data['profile'] =$this->m_app->read_profile()->result();
        $data['visi'] =$this->m_app->read_profile_visi()->result();
        $data['ekskul'] =$this->m_app->read_profile_ekskul()->result();
		$this->template->views('admin/profile',$data);
	}


	// ============== Galeri ==============
	public function tambah_galeri(){//create galeri
		$config['upload_path']          = './assets/foto/fotogaleri';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ( ! $this->upload->do_upload('gambar')){
            
            print_r($this->upload->display_errors());
            die;
        }else{
            $foto_gl 		= $this->upload->data();
            $foto_gl 		= $foto_gl['file_name'];
            $judul_gl 	= $this->input->post('judul_gl', TRUE);
            $tanggal_gl 	= $this->input->post('tanggal_gl', TRUE);

            $data = array(
            	'judul' => $judul_gl,
            	'tanggal_gl' => $tanggal_gl,
            	'gambar' => $foto_gl
            );
            $this->db->insert('tb_galeri', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            	Data Berhasil Disimpan!</div>');
            redirect('galeri/p');
        }
    }
	public function galeri(){//read galeri
		$data['galeri'] = $this->m_app->read_galeri();
		$this->template->views('admin/galeri',$data);
	}



	// Menu
	// ============== Data Struktur ==============
	public function tambah_struktur(){//create guru
		$config['upload_path']          = './assets/foto/fotostruktur';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('foto_guru')){
            $this->m_app->create_struktur();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">berhasil di simpan</div>');
            redirect('data-struktur');
        }else{
            print_r($this->upload->display_errors());
            die;
        }
    }
	public function data_struktur()	{//read strukur
		$data['jenjang'] = $this->m_app->read_jenjangpendidikan()->result();
		$data['jabatan'] = $this->m_app->read_datajabatan()->result();	
		$data['struktur'] = $this->m_app->read_struktur();
		$this->template->views('admin/data_struktur',$data);
	}

	// ============== Data Guru ==============
	public function tambah_guru(){//create guru
		$config['upload_path']          = './assets/foto/fotoguru';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('foto_guru')){
            $this->m_app->create_guru();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('data-guru');
        }else{
            print_r($this->upload->display_errors());
            die;
        }
    }
	public function data_guru()	{//read guru
		$data['jenjang'] = $this->m_app->read_jenjangpendidikan()->result();
		$data['mapel'] = $this->m_app->read_mapel()->result();		
		$data['guru'] = $this->m_app->read_guru();
		$this->template->views('admin/data_guru',$data);
	}
	public function edit_guru(){//update guru
        $id= $this->input->post('id');
        $config['upload_path']          = './assets/foto/fotoguru';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 5128;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;
            $nama_guru 				= $this->input->post('nama_guru', TRUE);
            $nip_guru 				= $this->input->post('nip_guru', TRUE);
            $jabatan_guru 			= $this->input->post('jabatan_guru', TRUE);
            $id_pendidikan			= $this->input->post('id_pendidikan', TRUE);
            $pendidikan_terakhir 	= $this->input->post('pendidikan_terakhir', TRUE);
            $id_mapel 				= $this->input->post('id_mapel', TRUE);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('foto_guru')){
            $foto_guru 		= $this->upload->data();
            $foto_guru 		= $foto_guru['file_name'];
            $data = array(
            	'nama_guru' => $nama_guru,
            	'nip_guru' => $nip_guru,
            	'jabatan_guru' => $jabatan_guru,
            	'id_pendidikan' => $id_pendidikan,
            	'pendidikan_terakhir' => $pendidikan_terakhir,
            	'id_mapel' => $id_mapel,
            	'foto_guru' => $foto_guru
            );
            
            $old_image = $data['id_guru']['foto_guru'];
            if ($old_image != null){
                unlink(FCPATH . 'assets/foto/fotoguru/' . $old_image);
            }
            
            $this->m_app->update_guru($id,$data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">berhasil di simpan</div>');
            redirect('data-guru');
                        
        }else{
            $data = array(
            	'nama_guru' => $nama_guru,
            	'nip_guru' => $nip_guru,
            	'jabatan_guru' => $jabatan_guru,
            	'id_pendidikan' => $id_pendidikan,
            	'pendidikan_terakhir' => $pendidikan_terakhir,
            	'id_mapel' => $id_mapel,
            	'foto_guru' => $foto_guru
            );

            $this->m_app->edit_guru($id,$data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('data-guru');
        }
    }
    public function hapus_guru($id){//delete guru
        $data = $this->m_app->ambil_id($id);
        $path = 'assets/foto/fotoguru/';
        @unlink($path.$data->foto_guru);
        if ($this->m_app->delete_guru($id) ==  TRUE) {
        	$this->session->set_flashdata('pesan', ' DATA BERHASIL DIHAPUS');
        }
        redirect ('data-guru');
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

    // ============== Data Jenjang ==============
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

    // ============== Data Jabatan ==============
	function tambah_mapel(){//create mapel
		$mata_pelajaran = $this->input->post('mata_pelajaran');
 
		$data = array(
			'mata_pelajaran' => $mata_pelajaran
			);
		$this->m_app->create_mapel($data,'tb_mapel');
		redirect('data-mapel');
	}
	function data_mapel(){//read mapel
		$data['mapel'] = $this->m_app->read_mapel()->result();
		$this->template->views('admin/data_mapel',$data);
	}
	function ubah_mapel(){//update mapel
		$id= $this->input->post('id');	
		$mata_pelajaran = $this->input->post('mata_pelajaran');
	 
		$data = array(
			'mata_pelajaran' => $mata_pelajaran
		);

		$this->m_app->update_mapel($id,$data);
		redirect('data-mapel');
	}
	function hapus_mapel($id){//delete mapel
		$where = array('id_mapel' => $id);
		$this->m_app->delete_mapel($where,'tb_mapel');
		redirect('data-mapel');
    }

    // ============== Data Kategori ==============
    function tambah_kategori(){//create kategori
        $nama_kategori = $this->input->post('nama_kategori');
 
        $data = array(
            'nama_kategori' => $nama_kategori
            );
        $this->m_app->create_kategori($data,'tb_profil_kategori');
        redirect('data-kategori');
    }
    function data_kategori(){//read kategori
        $data['kategori'] = $this->m_app->read_kategori()->result();
        $this->template->views('admin/data_kategori',$data);
    }
    function ubah_kategori(){//update kategori
        $id= $this->input->post('id');  
        $nama_kategori = $this->input->post('nama_kategori');
     
        $data = array(
            'nama_kategori' => $nama_kategori
        );

        $this->m_app->update_kategori($id,$data);
        redirect('data-kategori');
    }
    function hapus_kategori($id){//delete kategori
        $where = array('id_mapel' => $id);
        $this->m_app->delete_kategori($where,'tb_profil_kategori');
        redirect('data-kategori');
    }
}
