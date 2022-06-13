<?php 

class ModelStruktur extends CI_Model{

    function create_struktur(){//create struktur
        $foto_guru              = $this->upload->data();
        $foto_guru              = $foto_guru['file_name'];
        $nama_guru              = $this->input->post('nama_guru', TRUE);
        $nip_guru               = $this->input->post('nip_guru', TRUE);
        $id_jabatan             = $this->input->post('id_jabatan', TRUE);
        $id_pendidikan          = $this->input->post('id_pendidikan', TRUE);
        $pendidikan_terakhir    = $this->input->post('pendidikan_terakhir', TRUE);

        $data = array(
            'nama_guru' => $nama_guru,
            'nip_guru' => $nip_guru,
            'id_jabatan' => $id_jabatan,
            'id_pendidikan' => $id_pendidikan,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'foto_guru' => $foto_guru
        );
        $this->db->insert('tb_struktur', $data);
    }
    function read_struktur(){//read struktur
        $this->db->select('*');
        $this->db->from('tb_struktur');
        $this->db->join('tb_pendidikan','tb_pendidikan.id_pendidikan=tb_struktur.id_pendidikan');
        $this->db->join('tb_jabatan','tb_jabatan.id_jabatan=tb_struktur.id_jabatan');
        $this->db->order_by('id_struktur','ASC');

        $query = $this->db->get();
        return $query->result();      
    }
    function update_struktur($id,$data){//update guru
        $this->db->where('id_struktur',$id);
        $this->db->update('tb_struktur', $data);
    }
    function getDataById($id){
        $this->db->where('id_struktur',$id);
        return $this->db->get('tb_struktur');
    }
    function delete_struktur($id){//delete carausel
        $this->db->where('id_struktur',$id);
        return $this->db->delete('tb_struktur');       
    }

}

 ?>