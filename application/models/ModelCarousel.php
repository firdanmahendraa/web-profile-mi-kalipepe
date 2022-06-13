<?php 

class ModelCarousel extends CI_Model{

    function create_carousel(){//create carausel
        $gambar      = $this->upload->data();
        $gambar      = $gambar['file_name'];
        $headline      = $this->input->post('headline', TRUE);
        $deskripsi       = $this->input->post('deskripsi', TRUE);
        $status             = $this->input->post('status', TRUE);

        $data = array(
            'headline' => $headline,
            'deskripsi' => $deskripsi,
            'status' => $status,
            'gambar' => $gambar
        );
        $this->db->insert('tb_carousel', $data);
    }
    function read_carousel(){//read mapel
        return $this->db->get('tb_carousel');         
    }
    function update_carousel($id,$data){//update carausel
        $this->db->where('id_carousel',$id);
        return $this->db->update('tb_carousel',$data);
    }
    function getDataById($id){
        $this->db->where('id_carousel',$id);
        return $this->db->get('tb_carousel');
    }
    function delete_carousel($id){//delete carausel
        $this->db->where('id_carousel',$id);
        return $this->db->delete('tb_carousel');       
    }

}

 ?>