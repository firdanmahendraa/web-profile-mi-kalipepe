<?php 

class ModelProfile extends CI_Model{

    function create_profile(){//create guru
        $gambar_profile      = $this->upload->data();
        $gambar_profile      = $gambar_profile['file_name'];
        $id_kategori         = $this->input->post('id_kategori', TRUE);
        $judul_profile       = $this->input->post('judul_profile', TRUE);
        $deskripsi_profile   = $this->input->post('deskripsi_profile', TRUE);

        $data = array(
            'id_kategori' => $id_kategori,
            'judul_profile' => $judul_profile,
            'deskripsi_profile' => $deskripsi_profile,
            'gambar_profile' => $gambar_profile
        );
        $this->db->insert('tb_profile', $data);
    }
    function read_profile(){//read profile
        $this->db->select('*');
        $this->db->from('tb_profile');
        $this->db->where('id_kategori', '1');
        return $this->db->get();     
    }
    function read_profile_visi(){//read profile visi
        $this->db->select('*');
        $this->db->from('tb_profile');
        $this->db->where('id_kategori', '2');
        return $this->db->get();     
    }
    function read_profile_ekskul(){//read profile ekskul
        $this->db->select('*');
        $this->db->from('tb_profile');
        $this->db->where('id_kategori', '3');
        return $this->db->get();     
    }

}

 ?>