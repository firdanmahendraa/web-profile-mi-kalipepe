<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_app');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['kategori'] = $this->m_app->read_kategori()->result();
        $this->template->views('admin/data_kategori',$data);        
    }
    function tambah_kategori(){//create kategori
        $nama_kategori = $this->input->post('nama_kategori');
 
        $data = array(
            'nama_kategori' => $nama_kategori
            );
        $this->m_app->create_kategori($data,'tb_profil_kategori');
        redirect('data-kategori');
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
?>