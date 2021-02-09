<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('person_model','person');
		$this->load->model('UpdateGuru');
	}

	public function index()
	{
		$this->load->helper('url');
		$email=	$this->session->userdata('email2');
		$bidang= $this->UpdateGuru->show_bidang($email);
		$this->load->view('guru/person_view',array('groups'=>$this->UpdateGuru->getmatakuliah($bidang)));
	}

	public function ajax_list()
	{
		$list = $this->person->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->mapel;
			$row[] = $person->judul;
			$row[] = $person->media;

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
				'mapel' => $this->input->post('mapel'),
				'judul' => $this->input->post('judul'),
			);
		$insert = $this->person->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
				'mapel' => $this->input->post('mapel'),
				'judul' => $this->input->post('judul'),
				'media' => $this->input->post('media'),
				'P1' => $this->input->post('P1'),
				'P2' => $this->input->post('P2'),
				'P3' => $this->input->post('P3'),
				'P4' => $this->input->post('P4'),
				'P5' => $this->input->post('P5'),
				'P6' => $this->input->post('P6'),
				'P7' => $this->input->post('P7'),
				'P8' => $this->input->post('P8'),
				'P9' => $this->input->post('P9'),
				'P10' => $this->input->post('P10'),
				'A1' => $this->input->post('A1'),
				'A2' => $this->input->post('A2'),
				'A3' => $this->input->post('A3'),
				'A4' => $this->input->post('A4'),
				'A5' => $this->input->post('A5'),
				'A6' => $this->input->post('A6'),
				'A7' => $this->input->post('A7'),
				'A8' => $this->input->post('A8'),
				'A9' => $this->input->post('A9'),
				'A10' => $this->input->post('A10'),
				'B1' => $this->input->post('B1'),
				'B2' => $this->input->post('B2'),
				'B3' => $this->input->post('B3'),
				'B4' => $this->input->post('B4'),
				'B5' => $this->input->post('B5'),
				'B6' => $this->input->post('B6'),
				'B7' => $this->input->post('B7'),
				'B8' => $this->input->post('B8'),
				'B9' => $this->input->post('B9'),
				'B10' => $this->input->post('B10'),
				'C1' => $this->input->post('C1'),
				'C2' => $this->input->post('C2'),
				'C3' => $this->input->post('C3'),
				'C4' => $this->input->post('C4'),
				'C5' => $this->input->post('C5'),
				'C6' => $this->input->post('C6'),
				'C7' => $this->input->post('C7'),
				'C8' => $this->input->post('C8'),
				'C9' => $this->input->post('C9'),
				'C10' => $this->input->post('C10'),
				'D1' => $this->input->post('D1'),
				'D2' => $this->input->post('D2'),
				'D3' => $this->input->post('D3'),
				'D4' => $this->input->post('D4'),
				'D5' => $this->input->post('D5'),
				'D6' => $this->input->post('D6'),
				'D7' => $this->input->post('D7'),
				'D8' => $this->input->post('D8'),
				'D9' => $this->input->post('D9'),
				'D10' => $this->input->post('D10'),
				'ANS1' => $this->input->post('ANS1'),
				'ANS2' => $this->input->post('ANS2'),
				'ANS3' => $this->input->post('ANS3'),
				'ANS4' => $this->input->post('ANS4'),
				'ANS5' => $this->input->post('ANS5'),
				'ANS6' => $this->input->post('ANS6'),
				'ANS7' => $this->input->post('ANS7'),
				'ANS8' => $this->input->post('ANS8'),
				'ANS9' => $this->input->post('ANS9'),
				'ANS10' => $this->input->post('ANS10'),
			);
		$this->person->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->person->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}


	

}
