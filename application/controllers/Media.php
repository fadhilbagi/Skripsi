<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('media_model','person');
		$this->load->model('UpdateSiswa');

	}
	public function index()
	{
		$this->load->helper('url');
		$logged_in = $this->session->userdata('user');
        if(!$logged_in){
            //if yes redirect to welcome page
            redirect(base_url().'index.php/loginsiswa');
        }
        // load view admin/overview.php
		//$x['data2']=$this->UpdateSiswa->show_user($this->session->userdata('email'));
		$email=	$this->session->userdata('email');
        $this->load->view("siswa/media",array('error' => ' ' ,'id'=>$this->UpdateSiswa->show_id($this->session->userdata('email')),'data2' => $this->UpdateSiswa->show_user($email)));
		
	}
	
	public function ajax_list()
	{
		$list = $this->person->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->pelajaran;
			$row[] = $person->mapel;
			$row[] = $person->media;

			//add html for action
			//add html for action
			$row[] = '<form action="media/kuis" method="post" >
  <button class="btn btn-sm btn-primary" name="id" type="submit" value="'."'".$person->id."'".'">Download</button>

 </form>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->person->count_all(),
						"recordsFiltered" => $this->person->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	public function ajax_edit($id)
	{
		$data = $this->person->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'mapel' => $this->input->post('mapel'),
				'judul' => $this->input->post('judul'),
			);
		$insert = $this->person->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				'mapel' => $this->input->post('matkul'),
				'judul' => $this->input->post('judul'),
				'media' => $this->input->post('media'),
			);
		$this->person->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->person->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
	public function kuis() {
        //unset the logged_in session and redirect to login page
        
		redirect('localhost/skripsi/uploads/visual/',$this->input->post('id'));
    }

	


	

}
