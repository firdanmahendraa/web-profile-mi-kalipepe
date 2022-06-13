<?php 

class ModelMapel extends CI_Model{

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