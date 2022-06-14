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
    function edit_prestasi(){//update prestasi
        $id= $this->input->post('id');
        $data = $this->ModelPrestasi->getDataById($id)->row();
        $gambar = './assets/foto/fotoprestasi/'.$data->gambar_prestasi;
            
        if (is_readable($gambar) && unlink($gambar)) {
            $config['upload_path']          = './assets/foto/fotoprestasi';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['max_width']            = 10000000;
            $config['max_height']           = 10000000;
                $judul_prestasi             = $this->input->post('judul_prestasi', TRUE);
                $isi_prestasi               = $this->input->post('isi_prestasi', TRUE);
                $tanggal_prestasi           = $this->input->post('tanggal_prestasi', TRUE);
                $author          = $this->input->post('author', TRUE);
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        }
        if ($this->upload->do_upload('gambar_prestasi')){
            $gambar_prestasi      = $this->upload->data();
            $gambar_prestasi      = $gambar_prestasi['file_name'];
            $data = array(
                'judul_prestasi' => $judul_prestasi,
                'isi_prestasi' => $isi_prestasi,
                'tanggal_prestasi' => $tanggal_prestasi,
                'author' => $author,
                'gambar_prestasi' => $gambar_prestasi
            );
            $this->ModelPrestasi->update_prestasi($id,$data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">berhasil di simpan</div>');
            redirect('prestasi/p');    
        }else{
            echo 'error';
            redirect('prestasi/p');
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