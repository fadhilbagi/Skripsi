<?php
 
class Register extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        
        //load the required helpers and libraries
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        
        //load our Register model here
        $this->load->model('RegisterModel', 'register');
    }
 
    //registration form page
    public function index() {
        //check if the user is already logged in 
        //if yes redirect to the welcome page
        if ($this->session->userdata('logged_in')) {
            redirect(base_url() . 'welcome');
        }
        //load the register page views
        $this->load->view('header');
        $this->load->view('register_page');
		$this->load->view('footer');
        
    }
 
    //register validation and logic
    public function doRegister() {
        //set the form validation here
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_message('is_unique', 'Email already exists.');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
 
        //if the above validation fails, redirect to register page
        //with vaildation_errors();
        if ($this->form_validation->run() == FALSE) {
            //set the validation errors in flashdata (one time session)
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url() . 'index.php/register');
        } else {
            //if not get the input values
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $password = sha1($this->input->post('password'));
			$P1=$this->input->post('option1');
			$P2=$this->input->post('option2');
			$P3=$this->input->post('option3');
			$P4=$this->input->post('option4');
			$P5=$this->input->post('option5');
			$P6=$this->input->post('option6');
			$P7=$this->input->post('option7');
			$P8=$this->input->post('option8');
			$P9=$this->input->post('option9');
			$gaya='';
			$Visual=0;
			$Audio=0;
			$Kines=0;
			$gaya='';
			if($P1=='A'){
				$Visual++;
			}
			if($P2=='A'){
				$Visual++;
			}
			if($P3=='A'){
				$Visual++;
			}
			if($P4=='A'){
				$Visual++;
			}
			if($P5=='A'){
				$Visual++;
			}
			if($P6=='A'){
				$Visual++;
			}
			if($P7=='A'){
				$Visual++;
			}
			if($P8=='A'){
				$Visual++;
			}
			if($P9=='A'){
				$Visual++;
			}
			
			if($P1=='B'){
				$Audio++;
			}
			if($P2=='B'){
				$Audio++;
			}
			if($P3=='B'){
				$Audio++;
			}
			if($P4=='B'){
				$Audio++;
			}
			if($P5=='B'){
				$Audio++;
			}
			if($P6=='B'){
				$Audio++;
			}
			if($P7=='B'){
				$Audio++;
			}
			if($P8=='B'){
				$Audio++;
			}
			if($P9=='B'){
				$Audio++;
			}
			
			if($P1=='C'){
				$Kines++;
			}
			if($P2=='C'){
				$Kines++;
			}
			if($P3=='C'){
				$Kines++;
			}
			if($P4=='C'){
				$Kines++;
			}
			if($P5=='C'){
				$Kines++;
			}
			if($P6=='C'){
				$Kines++;
			}
			if($P7=='C'){
				$Kines++;
			}
			if($P8=='C'){
				$Kines++;
			}
			if($P9=='C'){
				$Kines++;
			}
			if($Visual>$Audio && $Visual>$Kines){
				$gaya='Visual';
			}
			if($Audio>$Visual && $Audio>$Kines){
				$gaya='Audio';
			}
			if($Kines>$Audio && $Kines>$Visual){
				$gaya='Kinestetik';
			}
            $data = [
                'name' => $name, 'email' => $email, 'password' => $password, 'date_time' => date('Y-m-d H:i:s'), 'P1' => $P1, 'P2' => $P2, 'P3' => $P3, 'P4' => $P4, 'P5' => $P5, 'P6' => $P6, 'P7' => $P7, 'P8' => $P8, 'P9' => $P9, 'gaya' => $gaya
            ];
			$data2 = [
                'email' => $email, 'kode' => 0
            ];
            //pass the input values to the register model
            $insert_data = $this->register->add_user($data);
			$insert_data2 = $this->register->add_kode($data2);
 
            //if data inserted then set the success message and redirect to login page
            if ($insert_data) {
                $this->session->set_flashdata('msg', 'Successfully Register, Login now!');
                redirect(base_url() . 'index.php/login');
            }
        }
    }
}