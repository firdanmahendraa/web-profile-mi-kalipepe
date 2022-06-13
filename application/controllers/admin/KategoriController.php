<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ModelKategori');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['kategori'] = $this->ModelKategori->read_kategori()->result();
        $this->template->views('admin/data_kategori',$data);        
    }
    function tambah_kategori(){//create kategori
        $nama_kategori = $this->input->post('nama_kategori');
 
        $data = array(
            'nama_kategori' => $nama_kategori
            );
        $this->ModelKategori->create_kategori($data,'tb_profil_kategori');
        redirect('data-kategori');
    }
    function ubah_kategori(){//update kategori
        $id= $this->input->post('id');  
        $nama_kategori = $this->input->post('nama_kategori');
     
        $data = array(
            'nama_kategori' => $nama_kategori
        );

        $this->ModelKategori->update_kategori($id,$data);
        redirect('data-kategori');
    }
    function hapus_kategori($id){//delete kategori
        $where = array('id_kategori' => $id);
        $this->ModelKategori->delete_kategori($where,'tb_profil_kategori');
        redirect('data-kategori');
    }


}
?>