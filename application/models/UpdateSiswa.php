<?php
class UpdateSiswa extends CI_Model{
     
    function show_user($email){
        $hasil=$this->db->query("SELECT * FROM users WHERE email='$email'");
        return $hasil;
    }
	function show_media($email){
        $hasil=$this->db->query("SELECT * FROM media WHERE email='$email'");
        return $hasil;
    }
	 function show_kuis($id){
        $hasil=$this->db->query("SELECT * FROM assign WHERE id='$id'");
        return $hasil;
    }
	function show_kuis2($id2){
        $hasil=$this->db->query("SELECT * FROM assign WHERE id=$id2");
        return $hasil;
    }
	function show_id($email){
        $this->db->where('email', $email);
        $query = $this->db->get('photo');
		$row= $query->row();
		$data = $row->Id;
		return $data;
    }
	
 
    function edit_user($id,$name,$email,$password){
        $hasil=$this->db->query("UPDATE users SET name='$name',email='$email',password='$password' WHERE user_id='$id'");
        return $hsl;
    }
	function edit_foto($email,$path){
        $hasil=$this->db->query("UPDATE photo SET kode=1,image='$path' WHERE email='$email'");
        return $hasil;
    }
     
}