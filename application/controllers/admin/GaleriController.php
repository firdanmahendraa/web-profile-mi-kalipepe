<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('ModelGaleri');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['galeri'] = $this->ModelGaleri->read_galeri();
        $this->template->views('admin/galeri',$data);        
    }
    function tambah_galeri(){//create galeri
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
    function edit_galeri(){//update galeri
        $id= $this->input->post('id');
        $data = $this->ModelGaleri->getDataById($id)->row();
        $gambar = './assets/foto/fotogaleri/'.$data->gambar;
            
        if (is_readable($gambar) && unlink($gambar)) {
            $config['upload_path']          = './assets/foto/fotogaleri';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['max_width']            = 10000000;
            $config['max_height']           = 10000000;
                $judul              = $this->input->post('judul', TRUE);
                $tanggal_gl               = $this->input->post('tanggal_gl', TRUE);
                $jabatan_galeri           = $this->input->post('jabatan_galeri', TRUE);
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        }
        if ($this->upload->do_upload('gambar')){
            $gambar      = $this->upload->data();
            $gambar      = $gambar['file_name'];
            $data = array(
                'judul' => $judul,
                'tanggal_gl' => $tanggal_gl,
                'gambar' => $gambar
            );
            $this->ModelGaleri->update_galeri($id,$data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">berhasil di simpan</div>');
            redirect('galeri/p');    
        }else{
            echo 'error';
            redirect('galeri/p');
        }
    }
    function hapus_galeri($id){//delete carousel
        $data = $this->ModelGaleri->getDataById($id)->row();
        $gambar = './assets/foto/fotogaleri/'.$data->gambar;
        if (is_readable($gambar) && unlink($gambar)) {
            $delete = $this->ModelGaleri->delete_galeri($id);
            redirect('galeri/p');
        }else{
            echo "gagal";
            echo $gambar; 
        }
    }


}
?>