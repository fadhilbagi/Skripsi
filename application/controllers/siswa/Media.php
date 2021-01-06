<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MEdia extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('person_model','person');
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
			$row[] = $person->judul;
			$row[] = $person->mapel;
			$row[] = $person->email;
			

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
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
				'judul' => $this->input->post('judul'),
				'mapel' => $this->input->post('mapel'),
				'pengajar' => $this->input->post('pengajar'),
				
			);
		$insert = $this->person->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				'judul' => $this->input->post('name'),
				'mapel' => $this->input->post('matkul'),
				'pengajar' => $this->input->post('email'),
				
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
