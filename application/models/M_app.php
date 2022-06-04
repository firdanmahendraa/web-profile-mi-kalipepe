<?php 
/**
 * 
 */
class M_app extends CI_Model{
	// ============== Jabatan Model ==============
	function input_jabatan($data,$table){//create jabatan
		$this->db->insert($table,$data);
	}
	function read_datajabatan(){//read jabatan
        return $this->db->get('tb_jabatan');         
    }
    function update_jabatan($id,$data){//update jabatan
        $this->db->where('id_jabatan',$id);
        $this->db->update('tb_jabatan', $data);
	}
	function delete_jabatan($where,$table){//delete jabatan
        $this->db->where($where);
		$this->db->delete($table);       
    }

    // ============== Jenjang Model ==============
	function create_jenjangpendidikan($data,$table){//create jabatan
		$this->db->insert($table,$data);
	}
    function read_jenjangpendidikan(){//read jejangpendidikan
        return $this->db->get('tb_pendidikan');         
    }
    function update_jenjangpendidikan($id,$data){//update jabatan
        $this->db->where('id_pendidikan',$id);
        $this->db->update('tb_pendidikan', $data);
	}

}
 ?>