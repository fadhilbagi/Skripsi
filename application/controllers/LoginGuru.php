<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginGuru extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        
        //load the Login Model
        $this->load->model('LoginModel', 'login');
    }

    public function index() {
        //check if the user is already logged in 
        $logged_in = $this->session->userdata('user2');
        if($logged_in){
            //if yes redirect to welcome page
            redirect(base_url().'index.php/guru/overview');
        }
        //if not load the login page
        $this->load->view('header');
        $this->load->view('login_guru');
        $this->load->view('footer');
    }

    public function doLogin() {
        //get the input fields from login form
        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));
        
        //send the email pass to query if the user is present or not
        $check_login = $this->login->checkLogin2($email, $password);
		$user=$this->login->getUser2($email, $password);
        //if the result is query result is 1 then valid user
        if ($check_login) {
            //if yes then set the session 'loggin_in' as true
            $this->session->set_userdata('logged_in2', true);
			$this->session->set_userdata('user2', $user->name);
			$this->session->set_userdata('user_id2', $user->user_id);
			$this->session->set_userdata('id2', $id);
			$this->session->set_userdata('email2', $email);
            redirect(base_url().'index.php/guru/overview');
        } else {
            //if no then set the session 'logged_in' as false
            $this->session->set_userdata('logged_in2', false);
            $this->session->set_userdata('user2', NULL);
            //and redirect to login page with flashdata invalid msg
            $this->session->set_flashdata('msg', 'Username / Password Invalid');
            redirect(base_url().'index.php/loginguru');            
        }
    }

    public function logout() {
        //unset the logged_in session and redirect to login page
        $this->session->unset_userdata('logged_in2');
		$this->session->unset_userdata('user2');
        redirect(base_url().'index.php/loginguru');
    }

}