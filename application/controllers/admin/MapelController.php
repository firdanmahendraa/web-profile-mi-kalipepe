<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MapelController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_app');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['mapel'] = $this->m_app->read_mapel()->result();
        $this->template->views('admin/data_mapel',$data);        
    }
    function tambah_mapel(){//create mapel
        $mata_pelajaran = $this->input->post('mata_pelajaran');
 
        $data = array(
            'mata_pelajaran' => $mata_pelajaran
            );
        $this->m_app->create_mapel($data,'tb_mapel');
        redirect('data-mapel');
    }
    function ubah_mapel(){//update mapel
        $id= $this->input->post('id');  
        $mata_pelajaran = $this->input->post('mata_pelajaran');
     
        $data = array(
            'mata_pelajaran' => $mata_pelajaran
        );

        $this->m_app->update_mapel($id,$data);
        redirect('data-mapel');
    }
    function hapus_mapel($id){//delete mapel
        $where = array('id_mapel' => $id);
        $this->m_app->delete_mapel($where,'tb_mapel');
        redirect('data-mapel');
    }


}
?>