<?php 

class ModelGuru extends CI_Model{

    function create_guru(){//create guru
        $foto_guru              = $this->upload->data();
        $foto_guru              = $foto_guru['file_name'];
        $nama_guru              = $this->input->post('nama_guru', TRUE);
        $nip_guru               = $this->input->post('nip_guru', TRUE);
        $jabatan_guru           = $this->input->post('jabatan_guru', TRUE);
        $id_jabatan             = $this->input->post('id_jabatan', TRUE);
        $id_pendidikan          = $this->input->post('id_pendidikan', TRUE);
        $pendidikan_terakhir    = $this->input->post('pendidikan_terakhir', TRUE);
        $id_mapel               = $this->input->post('id_mapel', TRUE);

        $data = array(
            'nama_guru' => $nama_guru,
            'nip_guru' => $nip_guru,
            'jabatan_guru' => $jabatan_guru,
            'id_pendidikan' => $id_pendidikan,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'id_mapel' => $id_mapel,
            'foto_guru' => $foto_guru
        );
        $this->db->insert('tb_guru', $data);
    }
    function read_guru(){//read guru
        $this->db->select('*');
        $this->db->from('tb_guru');
        $this->db->join('tb_pendidikan','tb_pendidikan.id_pendidikan=tb_guru.id_pendidikan');
        $this->db->join('tb_mapel','tb_mapel.id_mapel=tb_guru.id_mapel');
        $this->db->order_by('id_guru','ASC');

        $query = $this->db->get();
        return $query->result();      
    }
    function update_guru($id,$data){//update guru
        $this->db->where('id_guru',$id);
        $this->db->update('tb_guru', $data);
    }
    function getDataById($id){
        $this->db->where('id_guru',$id);
        return $this->db->get('tb_guru');
    }
    function delete_guru($id){//delete carausel
        $this->db->where('id_guru',$id);
        return $this->db->delete('tb_guru');       
    }

}

 ?>