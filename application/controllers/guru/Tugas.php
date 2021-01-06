<?php

class Tugas extends MY_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("siswa/tugas");
	}
	
}