<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_app');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['profile'] =$this->m_app->read_profile()->result();
        $data['visi'] =$this->m_app->read_profile_visi()->result();
        $data['ekskul'] =$this->m_app->read_profile_ekskul()->result();
        $this->template->views('admin/profile',$data);        
    }
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


}
?>