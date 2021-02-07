<?php

class kuis extends MY_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(['form_validation', 'session']);
        $this->load->database();
		$this->load->model('UpdateGuru');
		$this->load->model('RegisterModel', 'register');
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
		
        $this->load->view("guru/quis",array('error' => ' ' ,'groups'=>$this->UpdateGuru->getmatakuliah($bidang),'media'=>$this->UpdateGuru->getmedia($email),'id'=>$this->UpdateGuru->show_kode($this->session->userdata('email2')),'data2' => $this->UpdateGuru->show_user($email)));
		
	}                                                                     
		
	public function doRegister(){
		$this->form_validation->set_rules('judul', 'Judul', 'required|min_length[3]');
        $this->form_validation->set_message('is_unique', 'Email already exists.');
       
		if ($this->form_validation->run() == FALSE) {
            //set the validation errors in flashdata (one time session)
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'index.php/guru/overview');
        } else {
            //if not get the input values
            $judul = $this->input->post('judul');
            $mapel = $this->input->post('matkul');
            $media = $this->input->post('media');
			$pengajar = $this->session->userdata('email2');
			$P1=$this->input->post('p1');
			$P2=$this->input->post('p2');
			$P3=$this->input->post('p3');
			$P4=$this->input->post('p4');
			$P5=$this->input->post('p5');
			$P6=$this->input->post('p6');
			$P7=$this->input->post('p7');
			$P8=$this->input->post('p8');
			$P9=$this->input->post('p9');
			$P10=$this->input->post('p10');
			$A1=$this->input->post('a1');
			$A2=$this->input->post('a2');
			$A3=$this->input->post('a3');
			$A4=$this->input->post('a4');
			$A5=$this->input->post('a5');
			$A6=$this->input->post('a6');
			$A7=$this->input->post('a7');
			$A8=$this->input->post('a8');
			$A9=$this->input->post('a9');
			$A10=$this->input->post('a10');
			$B1=$this->input->post('b1');
			$B2=$this->input->post('b2');
			$B3=$this->input->post('b3');
			$B4=$this->input->post('b4');
			$B5=$this->input->post('b5');
			$B6=$this->input->post('b6');
			$B7=$this->input->post('b7');
			$B8=$this->input->post('b8');
			$B9=$this->input->post('b9');
			$B10=$this->input->post('b10');
			$C1=$this->input->post('c1');
			$C2=$this->input->post('c2');
			$C3=$this->input->post('c3');
			$C4=$this->input->post('c4');
			$C5=$this->input->post('c5');
			$C6=$this->input->post('c6');
			$C7=$this->input->post('c7');
			$C8=$this->input->post('c8');
			$C9=$this->input->post('c9');
			$C10=$this->input->post('c10');
			$D1=$this->input->post('d1');
			$D2=$this->input->post('d2');
			$D3=$this->input->post('d3');
			$D4=$this->input->post('d4');
			$D5=$this->input->post('d5');
			$D6=$this->input->post('d6');
			$D7=$this->input->post('d7');
			$D8=$this->input->post('d8');
			$D9=$this->input->post('d9');
			$D10=$this->input->post('d10');
			$ans1=$this->input->post('ans1');
			$ans2=$this->input->post('ans2');
			$ans3=$this->input->post('ans3');
			$ans4=$this->input->post('ans4');
			$ans5=$this->input->post('ans5');
			$ans6=$this->input->post('ans6');
			$ans7=$this->input->post('ans7');
			$ans8=$this->input->post('ans8');
			$ans9=$this->input->post('ans9');
			$ans10=$this->input->post('ans10');
			$data = [
                'judul' => $judul, 'mapel' => $mapel, 'pengajar' => $pengajar,'media' => $media, 'P1' => $P1, 'P2' => $P2, 'P3' => $P3, 'P4' => $P4, 'P5' => $P5, 'P6' => $P6, 'P7' => $P7, 'P8' => $P8, 'P9' => $P9,'P10' => $P10,  'A1' => $A1, 'A2' => $A2, 'A3' => $A3, 'A4' => $A4, 'A5' => $A5, 'A6' => $A6, 'A7' => $A7, 'A8' => $A8, 'A9' => $A9,'A10' => $A10, 'B1' => $B1, 'B2' => $B2, 'B3' => $B3, 'B4' => $B4, 'B5' => $B5, 'B6' => $B6, 'B7' => $B7, 'B8' => $B8, 'B9' => $B9,'B10' => $B10, 'C1' => $C1, 'C2' => $C2, 'C3' => $C3, 'C4' => $C4, 'C5' => $C5, 'C6' => $C6, 'C7' => $C7, 'C8' => $C8, 'C9' => $C9, 'C10' => $C10,'D1' => $D1, 'D2' => $D2, 'D3' => $D3, 'D4' => $D4, 'D5' => $D5, 'D6' => $D6, 'D7' => $D7, 'D8' => $D8, 'D9' => $D9,'D10' => $D10,
				'ANS1' => $ans1, 'ANS2' => $ans2, 'ANS3' => $ans3, 'ANS4' => $ans4, 'ANS5' => $ans5, 'ANS6' => $ans6, 'ANS7' => $ans7, 'ANS8' => $ans8, 'ANS9' => $ans9,'ANS10' => $ans10,
            ];
			
            //pass the input values to the register model
            $insert_data = $this->register->add_kuis($data);
			
 
            //if data inserted then set the success message and redirect to login page
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Successfully Register, Login now!');
                redirect(base_url() . 'index.php/login');
            }
        }
	}
	

}