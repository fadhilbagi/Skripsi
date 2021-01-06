<?php

class Overview extends MY_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('UpdateGuru');
		
	}

	public function index()
	{
		$logged_in = $this->session->userdata('user2');
        if(!$logged_in){
            //if yes redirect to welcome page
            redirect(base_url().'index.php/loginguru');
        }
        // load view admin/overview.php
		//$x['data2']=$this->UpdateSiswa->show_user($this->session->userdata('email'));
		$email=	$this->session->userdata('email2');
        $this->load->view("guru/overview",array('error' => ' ' ,'id'=>$this->UpdateGuru->show_kode($this->session->userdata('email2')),'data2' => $this->UpdateGuru->show_user($email)));
		
	}                                                                     
	function edit_user(){
        $id=$this->input->post('id');
        $name=$this->input->post('name');
        $password=sha1($this->input->post('password'));
        $email=$this->input->post('email');
        $this->UpdateGuru->edit_user($id,$name,$email,$password);
		
		$this->session->set_userdata('user2', $name);
		$this->session->set_userdata('email2', $email);
        redirect('guru/overview');
    }


	
	public function aksi_upload(){
		$email=$this->session->userdata('email2');
		$id=$this->session->userdata('user_id2');
		//$config['file_name']          = 'profile'.$id;
		$file_type=$_FILES['berkas']['type'];
		$tmp = explode('.',$_FILES['berkas']['name']);
        $file_ext=strtolower(end($tmp));
		$extensions= array("jpeg","jpg","png");
		$config['allowed_types']        = '*';
		if (in_array($file_ext,$extensions)=== false)
			$config['upload_path']          = 'uploads/visual/';
		else
			$config['upload_path']          = 'uploads/profile/';
		
		
		$config['overwrite']        = false;
		 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$id=$this->session->userdata('user_id2');
			//$id=$this->UpdateSiswa->show_id($this->session->userdata('email'));
			$email=$this->session->userdata('email2');
			$path=$this->upload->data();
		
			$this->load->view("guru/overview",array('error' => 'fail' ,'id'=>$id,'data2' => $this->UpdateGuru->show_user($email)));
		}else{
			$id=$this->session->userdata('user_id2');
			//$id=$this->UpdateSiswa->show_id($this->session->userdata('email'));
			$email=$this->session->userdata('email2');
			$path=$this->upload->data();
			$this->UpdateGuru->edit_foto($email,$path['file_name']);
			$this->UpdateGuru->add_media($path['file_name']);
			$data = array('upload_data' => $this->upload->data(),'user_id'=>$this->UpdateGuru->show_id($this->session->userdata('email2')));
			$this->load->view("guru/overview",array('error' => 'success' ,'id'=>$this->UpdateGuru->show_id($this->session->userdata('email2')),'data2' => $this->UpdateGuru->show_user($email)));
		}
	}
	

}