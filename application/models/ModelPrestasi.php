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
    function update_prestasi($id,$data){//update guru
        $this->db->where('id_prestasi',$id);
        $this->db->update('tb_prestasi', $data);
    }
    function getDataById($id){
        $this->db->where('id_prestasi',$id);
        return $this->db->get('tb_prestasi');
    }
    function delete_prestasi($id){//delete carausel
        $this->db->where('id_prestasi',$id);
        return $this->db->delete('tb_prestasi');       
    }

	

}

 ?>