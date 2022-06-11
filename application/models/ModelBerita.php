<?php 

class ModelBerita extends CI_Model{

	function create_berita(){//create berita
        $gambar_berita          = $this->upload->data();
        $gambar_berita          = $gambar_berita['file_name'];
        $judul_berita           = $this->input->post('judul_berita', TRUE);
        $isi_berita             = $this->input->post('isi_berita', TRUE);
        $tanggal_berita         = $this->input->post('tanggal_berita', TRUE);
        $author  		        = $this->input->post('author', TRUE);
        $pendidikan_terakhir    = $this->input->post('pendidikan_terakhir', TRUE);

        $data = array(
            'judul_berita' => $judul_berita,
            'isi_berita' => $isi_berita,
            'tanggal_berita' => $tanggal_berita,
            'author' => $author,
            'gambar_berita' => $gambar_berita
        );
        $this->db->insert('tb_berita', $data);
    }
    function read_berita(){//read berita
        $this->db->order_by("id_berita", "desc");
        return $this->db->get('tb_berita');         
    }
    function getBeritaId($id_berita){
        $query = $this->db->query("SELECT * FROM tb_berita WHERE id_berita='$id_berita'");
        return $query->result();
    }

	

}

 ?>