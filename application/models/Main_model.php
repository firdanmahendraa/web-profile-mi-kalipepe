<?php 

class Main_model extends CI_Model{

//Prestasi Model
	public function getCarousel($limit){
		return $this->db->get('tb_carousel', $limit)->result();
	}
//end prestasi model
	
//Prestasi Model
	public function getPost($limit){
		$this->db->where('id_kategori', '2');
		$this->db->order_by("id_post", "desc");
		return $this->db->get('tb_post', $limit)->result();
	}
//end prestasi model

//Guru Model
	public function getGuru($limit){
        $this->db->join('tb_jabatan','tb_jabatan.id_jabatan=tb_guru.id_jabatan');
        $query = $this->db->get('tb_guru', $limit);
        return $query->result();
	}
//end guru model

//Berita Model
	public function getBerita($limit){
		$this->db->where('id_kategori', '1');
		$this->db->order_by("id_post", "desc");
		return $this->db->get('tb_post', $limit)->result();
	}
//end berita model

//Galeri Model
	public function getGaleri($limit){
		return $this->db->get('tb_galeri', $limit)->result();
	}
//end berita model
}

 ?>