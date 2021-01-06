<?php

class uploadm extends MY_Controller {
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
		$bidang= $this->UpdateGuru->show_bidang($email);
		
        $this->load->view("guru/uploadm",array('error' => ' ' ,'groups'=>$this->UpdateGuru->getmatakuliah($bidang),'id'=>$this->UpdateGuru->show_kode($this->session->userdata('email2')),'data2' => $this->UpdateGuru->show_user($email)));
		
	}                                                                     
		
	public function aksi_upload(){
		$email=$this->session->userdata('email2');
		$id=$this->session->userdata('user_id2');
		//$config['file_name']          = 'profile'.$id;
		$file_type=$_FILES['berkas']['type'];
		$tmp = explode('.',$_FILES['berkas']['name']);
        $file_ext=strtolower(end($tmp));
		$extensions= array("mp4","mkv","ppt","pdf","doc","docx");
		$config['allowed_types']        = '*';
		if (in_array($file_ext,$extensions)=== false)
			$config['upload_path']          = 'uploads/audio/';
		else
			$config['upload_path']          = 'uploads/visual/';
		$config['overwrite'] = false;
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$id=$this->session->userdata('user_id2');
			//$id=$this->UpdateSiswa->show_id($this->session->userdata('email'));
			$email=$this->session->userdata('email2');
			$path=$this->upload->data();
			
			$this->load->view("guru/uploadm",array('error' => 'fail' ,'id'=>$id,'data2' => $this->UpdateGuru->show_user($email)));
		}else{
			$id=$this->session->userdata('user_id2');
			//$id=$this->UpdateSiswa->show_id($this->session->userdata('email'));
			$email=$this->session->userdata('email2');
			$path=$this->upload->data();
			if (in_array($file_ext,$extensions)=== false)
			$this->UpdateGuru->add_media($path['file_name'],$this->input->post('matkul'),'audio',$email);
			else
			$this->UpdateGuru->add_media($path['file_name'],$this->input->post('matkul'),'visual',$email);		
			$this->UpdateGuru->edit_foto($email,$path['file_name']);
			
			$data = array('upload_data' => $this->upload->data(),'matkul'=>$this->input->post('matkul'),'user_id'=>$this->UpdateGuru->show_id($this->session->userdata('email2')));
			$this->load->view("guru/uploadm",array('error' => 'success' ,'id'=>$this->UpdateGuru->show_id($this->session->userdata('email2')),'data2' => $this->UpdateGuru->show_user($email)));
		}
	}
	

}