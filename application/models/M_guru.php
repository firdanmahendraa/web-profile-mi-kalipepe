<?php 
/**
 * 
 */
class M_guru extends CI_Model{
	
	public function getGuru(){
		return $this->db->get('tb_guru')->result_array();
	}

}
 ?>