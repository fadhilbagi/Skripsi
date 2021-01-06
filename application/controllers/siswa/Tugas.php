<?php

class Tugas extends MY_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('UpdateSiswa');
	}

	public function index()
	{
        // load view admin/overview.php
		$email=	$this->session->userdata('email');
        $this->load->view("siswa/tugas",array('error' => ' ' ,'id'=>$this->UpdateSiswa->show_id($this->session->userdata('email')),'data2' => $this->UpdateSiswa->show_user($email)));
        
	}
	
}