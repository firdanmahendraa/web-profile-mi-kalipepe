<?php 


class ModelGaleri extends CI_Model{
    function read_galeri(){//read galeri
        $query = $this->db->get('tb_galeri');   
        return $query->result();        
    }
    function update_galeri($id,$data){//update galeri
        $this->db->where('id_galeri',$id);
        return $this->db->update('tb_galeri',$data);
    }
    function getDataById($id){
        $this->db->where('id_galeri',$id);
        return $this->db->get('tb_galeri');
    }
    function delete_galeri($id){//delete galeri
        $this->db->where('id_galeri',$id);
        return $this->db->delete('tb_galeri');       
    }

}
 ?>