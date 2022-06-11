<?php 

class ModelPrestasi extends CI_Model{

	function create_prestasi(){//create prestasi
        $gambar_prestasi          = $this->upload->data();
        $gambar_prestasi          = $gambar_prestasi['file_name'];
        $judul_prestasi           = $this->input->post('judul_prestasi', TRUE);
        $isi_prestasi             = $this->input->post('isi_prestasi', TRUE);
        $tanggal_prestasi         = $this->input->post('tanggal_prestasi', TRUE);
        $author  		        = $this->input->post('author', TRUE);
        $pendidikan_terakhir    = $this->input->post('pendidikan_terakhir', TRUE);

        $data = array(
            'judul_prestasi' => $judul_prestasi,
            'isi_prestasi' => $isi_prestasi,
            'tanggal_prestasi' => $tanggal_prestasi,
            'author' => $author,
            'gambar_prestasi' => $gambar_prestasi
        );
        $this->db->insert('tb_prestasi', $data);
    }
    function read_prestasi(){//read prestasi
        $this->db->order_by("id_prestasi", "desc");
        return $this->db->get('tb_prestasi');         
    }
    function getPrestasiId($id_prestasi){
        $query = $this->db->query("SELECT * FROM tb_prestasi WHERE id_prestasi='$id_prestasi'");
        return $query->result();
    }

	

}

 ?>