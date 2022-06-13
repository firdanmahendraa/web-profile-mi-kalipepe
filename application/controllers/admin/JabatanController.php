<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class JabatanController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ModelJabatan');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['jabatan'] = $this->ModelJabatan->read_datajabatan()->result();
        $this->template->views('admin/data_jabatan',$data);        
    }
    function tambah_jabatan(){//create jabatan
        $nama_jabatan = $this->input->post('nama_jabatan');
 
        $data = array(
            'nama_jabatan' => $nama_jabatan
            );
        $this->ModelJabatan->input_jabatan($data,'tb_jabatan');
        redirect('data-jabatan');
    }
    function ubah_jabatan(){//update jabatan
        $id= $this->input->post('id');  
        $nama_jabatan = $this->input->post('nama_jabatan');
     
        $data = array(
            'nama_jabatan' => $nama_jabatan
        );

        $this->ModelJabatan->update_jabatan($id,$data);
        redirect('data-jabatan');
    }
    function hapus_jabatan($id){//delete jabatan
        $where = array('id_jabatan' => $id);
        $this->ModelJabatan->delete_jabatan($where,'tb_jabatan');
        redirect('data-jabatan');
    }


}
?>