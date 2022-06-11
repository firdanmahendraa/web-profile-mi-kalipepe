<?php 
/**
 * 
 */
class M_app extends CI_Model{
    // ============== Carausel Model ==============
    function create_carousel(){//create guru
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
    function update_carousel($id,$data){//update guru
        $this->db->where('id_carousel',$id);
        $this->db->update('tb_carousel', $data);
    }
    function c($id_carousel){//get-id
        $data = $this->db->where(['id_carousel', $id_carousel])->get('tb_carousel');
        if ($data->num_rows()>0) {
            return $data->row();
        }
    }
    function delete_carousel($id_carousel){//delete guru
        $this->db->where('id_carousel', $id_carousel);
        $this->db->delete('tb_carousel');
        return TRUE;
    }

    // ============== Profile Model ==============
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
    function read_profile(){//read mapel
        return $this->db->get('tb_profile');         
    }

    // ============== Struktur Model ==============
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

    // ============== Guru Model ==============
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
    function ambil_id($id_guru){//get-id
        $data = $this->db->where(['id_guru', $id_guru])->get('tb_guru');
        if ($data->num_rows()>0) {
            return $data->row();
        }
    }
    function delete_guru($id_guru){//delete guru
        $this->db->where('id_guru', $id_guru);
        $this->db->delete('tb_guru');
        return TRUE;
    }

    // ============== Galeri Model ==============
    function read_galeri(){//read mapel
        $query = $this->db->get('tb_galeri');   
        return $query->result();        
    }



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

     // ============== Kategori Model ==============
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