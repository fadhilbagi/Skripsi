<?php
class UpdateGuru extends CI_Model{
     
    function show_user($email){
        $hasil=$this->db->query("SELECT * FROM guru WHERE email='$email'");
        return $hasil;
    }
	function show_bidang($email){
        $this->db->where('email', $email);
        $query = $this->db->get('guru');
		$row= $query->row();
		$data = $row->pelajaran;
		return $data;
    }
	function show_id($email){
        $this->db->where('email', $email);
        $query = $this->db->get('photo');
		$row= $query->row();
		$data = $row->Id;
		return $data;
    }
	function show_kode($email){
        $this->db->where('email', $email);
        $query = $this->db->get('photo');
		$row= $query->row();
		$data = $row->kode;
		return $data;
    }
 
    function edit_user($id,$name,$email,$password){
        $hasil=$this->db->query("UPDATE guru SET name='$name',email='$email',password='$password' WHERE user_id='$id'");
        return $hsl;
    }
	function edit_foto($email,$path){
        $hasil=$this->db->query("UPDATE photo SET kode=1,image='$path' WHERE email='$email'");
        return $hasil;
    }
	function add_media($data2,$matkul,$media,$email){
        $hasil=$this->db->query("INSERT Into media(name,matkul,media,email) values ('$data2','$matkul','$media','$email')");
        return $hasil;
    }
	
     
	function getmatakuliah($bidang){
        $query = $this->db->query("SELECT mapel FROM mapel where pelajaran='$bidang'");


        return $query->result();
	}
	function getmedia($email){
        $query = $this->db->query("SELECT name FROM media where email='$email'");


        return $query->result();
	}
}