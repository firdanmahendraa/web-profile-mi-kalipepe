<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_app');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['galeri'] = $this->m_app->read_galeri();
        $this->template->views('admin/galeri',$data);        
    }
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
            $foto_gl        = $this->upload->data();
            $foto_gl        = $foto_gl['file_name'];
            $judul_gl   = $this->input->post('judul_gl', TRUE);
            $tanggal_gl     = $this->input->post('tanggal_gl', TRUE);

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


}
?>