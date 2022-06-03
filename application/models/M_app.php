<?php 
/**
 * 
 */
class M_app extends CI_Model{
	
	public function read_datajabatan(){
        return $this->db->get('tb_jabatan');         
    }

}
 ?>