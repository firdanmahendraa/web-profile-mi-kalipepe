<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class StrukturController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ModelJenjang');
        $this->load->model('ModelJabatan');
        $this->load->model('ModelStruktur');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['jenjang'] = $this->ModelJenjang->read_jenjangpendidikan()->result();
        $data['jabatan'] = $this->ModelJabatan->read_datajabatan()->result();  
        $data['struktur'] = $this->ModelStruktur->read_struktur();
        $this->template->views('admin/data_struktur',$data);        
    }
    public function tambah_struktur(){//create guru
        $config['upload_path']          = './assets/foto/fotostruktur';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('foto_guru')){
            $this->ModelStruktur->create_struktur();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">berhasil di simpan</div>');
            redirect('data-struktur');
        }else{
            print_r($this->upload->display_errors());
            die;
        }
    }
    public function hapus_struktur($id){//delete guru
        $data = $this->ModelStruktur->getDataById($id)->row();
        $gambar = './assets/foto/fotostruktur/'.$data->foto_guru;
        if (is_readable($gambar) && unlink($gambar)) {
            $delete = $this->ModelStruktur->delete_struktur($id);
            redirect('data-struktur');
        }else{
            echo "gagal";
            echo $gambar; 
        }
    }


}
?>