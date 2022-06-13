<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CarouselController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_app');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['carousel'] = $this->m_app->read_carousel()->result();
        $this->template->views('admin/carousel',$data);
    }
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
    public function edit_carousel(){//update guru
        $id= $this->input->post('id');
        $config['upload_path']          = './assets/foto/carousel';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 5128;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;
            $headline               = $this->input->post('headline', TRUE);
            $deskripsi              = $this->input->post('deskripsi', TRUE);
            $status                 = $this->input->post('status', TRUE);
            $tanggal_post           = $this->input->post('tanggal_post', TRUE);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('gambar')){
            $gambar         = $this->upload->data();
            $gambar         = $gambar['file_name'];
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


}
?>