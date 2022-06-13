<?php 

class ModelKategori extends CI_Model{

    function create_kategori($data,$table){//create mapel
        $this->db->insert($table,$data);
    }
    function read_kategori(){//read mapel
        return $this->db->get('tb_profil_kategori');         
    }
    function update_kategori($id,$data){//update mapel
        $this->db->where('id_kategori',$id);
        $this->db->update('tb_profil_kategori', $data);
    }
    function delete_kategori($where,$table){//delete mapel
        $this->db->where($where);
        $this->db->delete($table);       
    }

}

 ?>