<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ModelProfile');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['profile'] =$this->ModelProfile->read_profile()->result();
        $data['visi'] =$this->ModelProfile->read_profile_visi()->result();
        $data['ekskul'] =$this->ModelProfile->read_profile_ekskul()->result();
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
            $this->ModelProfile->create_profile();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('profile/p');
        }else{
            print_r($this->upload->display_errors());
            die;
        }
    }
    function hapus_profile($id){//delete carousel
        $data = $this->ModelProfile->getDataById($id)->row();
        $gambar = './assets/foto/profile/'.$data->gambar_profile;
        if (is_readable($gambar) && unlink($gambar)) {
            $delete = $this->ModelProfile->delete_profile($id);
            redirect('profile/p');
        }else{
            echo "gagal";
            echo $gambar; 
        }
    }

}
?>