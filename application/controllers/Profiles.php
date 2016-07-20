<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiles extends CI_Controller {

	public function index()
	{
		
	}
	public function add() {
		$_POST['first_name'] = 'Mitchell';
		$_POST['mi'] = 'E';
		$_POST['last_name'] = 'Jolivette';
		$_POST['city'] = 'Houston';
		$_POST['state'] = 'TX';
		$_POST['zip'] = '77056';
		$_POST['picture'] = NULL;
		$_POST['id_users'] = 2;
		$_POST['id_position'] = NULL;

		$data = array(
			'first_name'=>$this->input->post('first_name', TRUE),
			'mi'=>$this->input->post('mi', TRUE),
			'last_name'=>$this->input->post('last_name', TRUE),
			'city'=>$this->input->post('city', TRUE),
			'state'=>$this->input->post('state', TRUE),
			'zip'=>$this->input->post('zip', TRUE),
			'picture'=>$this->input->post('picture', TRUE),
			'id_users'=>$this->input->post('id_users', TRUE),
			'id_position'=>$this->input->post('id_position', TRUE)
		);
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		die;
	}

}

/* End of file Profiles.php */
/* Location: ./application/controllers/Profiles.php */ ?>