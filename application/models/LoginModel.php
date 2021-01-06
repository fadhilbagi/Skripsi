<?php
 
class LoginModel extends CI_Model {
 
    public function checkLogin($email, $password) {
        //query the table 'users' and get the result count
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
 
        return $query->num_rows();
    }
	public function checkLogin2($email, $password) {
        //query the table 'users' and get the result count
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('guru');
 
        return $query->num_rows();
    }
	public function getUser($email, $password) {
        //query the table 'users' and get the result count
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
		$data= $query->row();
		//$data = $row->name;
       
        return $data;
    }
	public function getUser2($email, $password) {
        //query the table 'users' and get the result count
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('guru');
		$data= $query->row();
		
       
        return $data;
    }

}