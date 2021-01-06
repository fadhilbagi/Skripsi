<?php

class Overview extends MY_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('UpdateSiswa');
	}

	public function index()
	{
        // load view admin/overview.php
		//$x['data2']=$this->UpdateSiswa->show_user($this->session->userdata('email'));
		$email=	$this->session->userdata('email');
        $this->load->view("siswa/overview",array('error' => ' ' ,'id'=>$this->UpdateSiswa->show_id($this->session->userdata('email')),'data2' => $this->UpdateSiswa->show_user($email)));
		
	}                                                                     
	function edit_user(){
        $id=$this->input->post('id');
        $name=$this->input->post('name');
        $password=sha1($this->input->post('password'));
        $email=$this->input->post('email');
        $this->UpdateSiswa->edit_user($id,$name,$email,$password);
		
		$this->session->set_userdata('user', $name);
		$this->session->set_userdata('email', $email);
        redirect('siswa/overview');
    }

	function edit_foto($path){
        
        $this->UpdateSiswa->edit_foto($email,$path);
        redirect('siswa/overview');
    }
	
	public function aksi_upload(){
		$email=$this->session->userdata('email');
		$id=$this->session->userdata('user_id');
		
		//$id=$this->UpdateSiswa->show_id($this->session->userdata('email'));
		
		$config['file_name']          = 'profile'.$id.'.jpg';
		$config['upload_path']          = 'uploads/profile/';
		$config['allowed_types']        = '*';
		$config['overwrite']        = TRUE;
		
		
		
		
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$id=$this->session->userdata('user_id');
			//$id=$this->UpdateSiswa->show_id($this->session->userdata('email'));
			$email=$this->session->userdata('email');
			$path=$this->upload->data();
		
			$this->load->view("siswa/overview",array('error' => 'fail' ,'id'=>$this->UpdateSiswa->show_id($this->session->userdata('email')),'data2' => $this->UpdateSiswa->show_user($email)));
		}else{
			$id=$this->session->userdata('user_id');
			//$id=$this->UpdateSiswa->show_id($this->session->userdata('email'));
			$email=$this->session->userdata('email');
			$path=$this->upload->data();
			$this->UpdateSiswa->edit_foto($email,$path['file_name']);
			$data = array('upload_data' => $this->upload->data(),'user_id'=>$this->UpdateSiswa->show_id($this->session->userdata('email')));
			
			$this->load->view("siswa/overview",array('error' => 'success' ,'id'=>$this->UpdateSiswa->show_id($this->session->userdata('email')),'data2' => $this->UpdateSiswa->show_user($email)));		
		}
	}

}