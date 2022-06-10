<?php 
/**
 * 
 */
class M_app extends CI_Model{
    // ============== Carausel Model ==============
    public function create_carousel(){//create guru
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



    // ============== Guru Model ==============
    public function create_guru(){//create guru
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
    function read_guru(){//read jabatan
        $this->db->select('*');
        $this->db->from('tb_guru');
        $this->db->join('tb_pendidikan','tb_pendidikan.id_pendidikan=tb_guru.id_pendidikan');
        $this->db->join('tb_mapel','tb_mapel.id_mapel=tb_guru.id_mapel');
        $this->db->order_by('id_guru','ASC');

        $query = $this->db->get();
        return $query->result();      
    }
    public function update_guru($id,$data){
        $this->db->where('id_guru',$id);
        $this->db->update('tb_guru', $data);
    }
    public function delete_guru($id_guru, $foto_guru){
        $this->db->where('id_guru', $id_guru);
        $this->db->delete('tb_guru', array('id_guru' => $id_guru));
        unlink(FCPATH."/foto/fotoguru/".$foto_guru);
    }

    // ============== Galeri Model ==============
    function read_galeri(){//read mapel
        return $this->db->get('tb_galeri');         
    }

    // ============== Jabatan Model ==============
    function read_struktur(){//read jabatan
        return $this->db->get('tb_struktur');         
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

}
 ?>