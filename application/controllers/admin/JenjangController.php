<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class JenjangController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ModelJenjang');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }        
    }

    function index(){
        $data['jenjang'] = $this->ModelJenjang->read_jenjangpendidikan()->result();
        $this->template->views('admin/data_jenjang',$data);        
    }
    function tambah_jenjang(){//create jenjang
        $jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
 
        $data = array(
            'jenjang_pendidikan' => $jenjang_pendidikan
            );
        $this->ModelJenjang->create_jenjangpendidikan($data,'tb_pendidikan');
        redirect('data-jenjang');
    }
    function ubah_jenjang(){//update jenjang
        $id= $this->input->post('id');  
        $jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
     
        $data = array(
            'jenjang_pendidikan' => $jenjang_pendidikan
        );

        $this->ModelJenjang->update_jenjangpendidikan($id,$data);
        redirect('data-jenjang');
    }
    function hapus_jenjang($id){//delete jabatan
        $where = array('id_pendidikan' => $id);
        $this->ModelJenjang->delete_jenjangpendidikan($where,'tb_pendidikan');
        redirect('data-jenjang');
    }


}
?>