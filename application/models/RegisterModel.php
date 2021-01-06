<?php
 
class RegisterModel extends CI_Model{
    public function add_user($data){
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('users', $data);
    }
	public function add_guru($data){
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('guru', $data);
    }
	public function add_kode($data2){
        //get the data from controller and insert into the table 'photo'
        return $this->db->insert('photo', $data2);
    }	
	public function add_kuis($data){
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('assign', $data);
    }
	public function add_kuis2($data){
        //get the data from controller and insert into the table 'users'
        return $this->db->insert('kuis', $data);
    }
}