<?php 

class ModelJenjang extends CI_Model{

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

}

 ?>