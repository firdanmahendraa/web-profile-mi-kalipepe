<?php 

class Main_model extends CI_Model{

//Prestasi Model
	function getCarousel($limit){
		return $this->db->get('tb_carousel', $limit)->result();
	}
//end prestasi model
	
//Prestasi Model
	function getPost($limit){
		$this->db->where('id_kategori', '2');
		$this->db->order_by("id_post", "desc");
		return $this->db->get('tb_post', $limit)->result();
	}
//end prestasi model

//Guru Model
	function getGuru($limit){
        $this->db->join('tb_jabatan','tb_jabatan.id_jabatan=tb_guru.id_jabatan');
        $query = $this->db->get('tb_guru', $limit);
        return $query->result();
	}
//end guru model

//Berita Model
	function getBerita(){
		$this->db->order_by("id_berita", "desc");
		return $this->db->get('tb_berita');
	}
    function getBeritaId($id_berita){
        $query = $this->db->query("SELECT * FROM tb_berita WHERE id_berita='$id_berita'");
        return $query->result();
    }
//end berita model

//Galeri Model
	function getGaleri($limit){
		return $this->db->get('tb_galeri', $limit)->result();
	}
//end berita model
}

 ?>