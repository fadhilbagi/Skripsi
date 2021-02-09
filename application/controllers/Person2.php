<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('person_model','person');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('guru/person_view');
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
			$row[] = '<form action="person2/kuis" method="post" >
  <button class="btn btn-sm btn-primary" name="id" type="submit" value="'."'".$person->id."'".'">Start</button>
 </form>
';
		
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
	public function quis() {
        //unset the logged_in session and redirect to login page
        redirect(base_url() . 'index.php/login');
    }

	


	

}
