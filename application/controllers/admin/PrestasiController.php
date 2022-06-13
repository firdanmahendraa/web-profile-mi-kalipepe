<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PrestasiController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ModelPrestasi');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['prestasi'] = $this->ModelPrestasi->read_prestasi()->result();
        $this->template->views('admin/prestasi',$data);
    }
    public function tambah_prestasi(){//create prestasi
        $config['upload_path']          = './assets/foto/fotoprestasi';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('gambar_prestasi')){
            $this->ModelPrestasi->create_prestasi();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">berhasil di simpan</div>');
            redirect('prestasi/p');
        }else{
            print_r($this->upload->display_errors());
            die;
        }
    }
    function hapus_prestasi($id){//delete prestasi
        $data = $this->ModelPrestasi->getDataById($id)->row();
        $gambar = './assets/foto/fotoprestasi/'.$data->gambar_prestasi;
        if (is_readable($gambar) && unlink($gambar)) {
            $delete = $this->ModelPrestasi->delete_prestasi($id);
            redirect('prestasi/p');
        }else{
            echo "gagal";
            echo $gambar; 
        }
    }

}
?>