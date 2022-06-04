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
	function create_jenjangpendidikan($data,$table){//create jejangpendidikan
		$this->db->insert($table,$data);
	}
    function read_jenjangpendidikan(){//read jejangpendidikan
        return $this->db->get('tb_pendidikan');         
    }
    function update_jenjangpendidikan($id,$data){//update jejangpendidikan
        $this->db->where('id_pendidikan',$id);
        $this->db->update('tb_pendidikan', $data);
	}
	function delete_jenjangpendidikan($where,$table){//delete jejangpendidikan
        $this->db->where($where);
		$this->db->delete($table);       
    }

     // ============== Mapel Model ==============
	function create_mapel($data,$table){//create mapel
		$this->db->insert($table,$data);
	}
    function read_mapel(){//read mapel
        return $this->db->get('tb_mapel');         
    }
    function update_mapel($id,$data){//update mapel
        $this->db->where('id_mapel',$id);
        $this->db->update('tb_mapel', $data);
	}
	function delete_mapel($where,$table){//delete mapel
        $this->db->where($where);
		$this->db->delete($table);       
    }

}
 ?>