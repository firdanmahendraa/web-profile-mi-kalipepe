<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CarouselController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('modelcarousel');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['carousel'] = $this->modelcarousel->read_carousel()->result();
        $this->template->views('admin/carousel',$data);
    }
    public function tambah_carousel(){
        $config['upload_path']          = './assets/foto/carousel';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('gambar')){
            $this->modelcarousel->create_carousel();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('carousel');
        }else{
            print_r($this->upload->display_errors());
            die;
        }
    }
    public function edit_carousel(){//update carousel
        $id= $this->input->post('id_carousel');
        $data = $this->modelcarousel->getDataById($id)->row();
        $gambar = './assets/foto/carousel/'.$data->gambar;

        if (is_readable($gambar) && unlink($gambar)) {
            $config['upload_path']          = './assets/foto/carousel';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['max_width']            = 10000000;
            $config['max_height']           = 10000000;

          $this->load->library('upload', $config);
          $this->upload->initialize($config);  
          if (!$this->upload->do_upload('gambar')) {
              $error = array('error' => $this->upload->display_errors());
          }else{
            $data = array(
                    'headline' => $this->input->post('headline'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'status' => $this->input->post('status'),
                    'tanggal_post' => $this->input->post('tanggal_post'),
                    'gambar' => $gambar
                );
            $update = $this->modelcarousel->update_carousel($id,$data);
            if ($update) {
                redirect('carousel');
            }else{
                echo 'Gagal';
            }
          }
        }
    }
    public function hapus_carousel($id){//delete carousel
        $data = $this->modelcarousel->getDataById($id)->row();
        $gambar = './assets/foto/carousel/'.$data->gambar;
        if (is_readable($gambar) && unlink($gambar)) {
            $delete = $this->modelcarousel->delete_carousel($id);
            redirect('carousel');
        }else{
            echo "gagal";
            echo $gambar; 
        }
    }

}
?>