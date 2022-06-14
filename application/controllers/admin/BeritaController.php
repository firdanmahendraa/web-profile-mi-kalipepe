<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ModelBerita');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['berita'] = $this->ModelBerita->read_berita()->result();
        $this->template->views('admin/news',$data);
    }
    function tambah_berita(){//create berita
        $config['upload_path']          = './assets/foto/fotoberita';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('gambar_berita')){
            $this->ModelBerita->create_berita();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">berhasil di simpan</div>');
            redirect('berita/p');
        }else{
            print_r($this->upload->display_errors());
            die;
        }
    }
    function edit_berita(){//update berita
        $id= $this->input->post('id');
        $data = $this->ModelBerita->getDataById($id)->row();
        $gambar = './assets/foto/fotoberita/'.$data->gambar_berita;
            
        if (is_readable($gambar) && unlink($gambar)) {
            $config['upload_path']          = './assets/foto/fotoberita';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 5128;
            $config['max_width']            = 10000000;
            $config['max_height']           = 10000000;
                $judul_berita              = $this->input->post('judul_berita', TRUE);
                $isi_berita               = $this->input->post('isi_berita', TRUE);
                $tanggal_berita           = $this->input->post('tanggal_berita', TRUE);
                $author          = $this->input->post('author', TRUE);
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        }
        if ($this->upload->do_upload('gambar_berita')){
            $gambar_berita      = $this->upload->data();
            $gambar_berita      = $gambar_berita['file_name'];
            $data = array(
                'judul_berita' => $judul_berita,
                'isi_berita' => $isi_berita,
                'tanggal_berita' => $tanggal_berita,
                'author' => $author,
                'gambar_berita' => $gambar_berita
            );
            $this->ModelBerita->update_berita($id,$data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">berhasil di simpan</div>');
            redirect('berita/p');    
        }else{
            echo 'error';
            redirect('berita/p');
        }
    }

    function hapus_berita($id){//delete berita
        $data = $this->ModelBerita->getDataById($id)->row();
        $gambar = './assets/foto/fotoberita/'.$data->gambar_berita;
        if (is_readable($gambar) && unlink($gambar)) {
            $delete = $this->ModelBerita->delete_berita($id);
            redirect('berita/p');
        }else{
            echo "gagal";
            echo $gambar; 
        }
    }

}
?>