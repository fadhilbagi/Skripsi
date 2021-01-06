<?php
 
class Mapel_model extends CI_Model {
 
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
	public function get_category() {
        //query the table 'users' and get the result count
        $this->db->distinct();
		$this->db->select('pelajaran');
		$query = $this->db->get('mapel');
		
        return $query;
    }
	
	public function get_sub_category($category_id) {
        //query the table 'users' and get the result count
        $this->db->where('pelajaran', $category_id);
		$query = $this->db->get('mapel');
		return $query;
    }
}
