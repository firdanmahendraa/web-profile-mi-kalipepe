<?php 

class ModelJabatan extends CI_Model{

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
}

 ?>