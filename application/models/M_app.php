<?php 
/**
 * 
 */
class M_app extends CI_Model{
	// Jabatan Model
	function input_jabatan($data,$table){//create jabatan
		$this->db->insert($table,$data);
	}
	function read_datajabatan(){//read jabatan
        return $this->db->get('tb_jabatan');         
    }
    function update_jabatan($id,$data){
        $this->db->where('id_jabatan',$id);
        $this->db->update('tb_jabatan', $data);
	}

}
 ?>