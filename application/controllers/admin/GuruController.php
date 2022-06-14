<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class GuruController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ModelJenjang');
        $this->load->model('ModelMapel');
        $this->load->model('ModelGuru');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['jenjang'] = $this->ModelJenjang->read_jenjangpendidikan()->result();
        $data['mapel'] = $this->ModelMapel->read_mapel()->result();      
        $data['guru'] = $this->ModelGuru->read_guru();
        $this->template->views('admin/data_guru',$data);        
    }
    public function tambah_guru(){//create guru
        $config['upload_path']          = './assets/foto/fotoguru';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('foto_guru')){
            $this->ModelGuru->create_guru();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('data-guru');
        }else{
            print_r($this->upload->display_errors());
            die;
        }
    }

    public function edit_guru(){//update guru
        $id= $this->input->post('id');
        $data = $this->ModelGuru->getDataById($id)->row();
        $gambar = './assets/foto/fotoguru/'.$data->foto_guru;
            
        if (is_readable($gambar) && unlink($gambar)) {
            $config['upload_path']          = './assets/foto/fotoguru';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;
            $config['max_width']            = 10000000;
            $config['max_height']           = 10000000;
                $nama_guru              = $this->input->post('nama_guru', TRUE);
                $nip_guru               = $this->input->post('nip_guru', TRUE);
                $jabatan_guru           = $this->input->post('jabatan_guru', TRUE);
                $id_pendidikan          = $this->input->post('id_pendidikan', TRUE);
                $pendidikan_terakhir    = $this->input->post('pendidikan_terakhir', TRUE);
                $id_mapel               = $this->input->post('id_mapel', TRUE);
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        }
        if ($this->upload->do_upload('foto_guru')){
            $foto_guru      = $this->upload->data();
            $foto_guru      = $foto_guru['file_name'];
            $data = array(
                'nama_guru' => $nama_guru,
                'nip_guru' => $nip_guru,
                'jabatan_guru' => $jabatan_guru,
                'id_pendidikan' => $id_pendidikan,
                'pendidikan_terakhir' => $pendidikan_terakhir,
                'id_mapel' => $id_mapel,
                'foto_guru' => $foto_guru
            );
            $this->ModelGuru->update_guru($id,$data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">berhasil di simpan</div>');
            redirect('data-guru');    
        }else{
            echo 'error';
            redirect('data-guru');
        }
    }

    public function hapus_guru($id){//delete guru
        $data = $this->ModelGuru->getDataById($id)->row();
        $gambar = './assets/foto/fotoguru/'.$data->foto_guru;
        if (is_readable($gambar) && unlink($gambar)) {
            $delete = $this->ModelGuru->delete_guru($id);
            redirect('data-guru');
        }else{
            echo "gagal";
            echo $gambar; 
        }
    }


}
?>