<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profiles_model extends Crud_model {

	public $variable;

	public function __construct() {
		parent::__construct();
		
	}

	public function addProfile($data) {
		// $this->input->post('data', TRUE);
		// $data = array(
		// 	'first_name'=>$data['first_name'],
		// 	'mi'=>$data['mi'],
		// 	'last_name'=>$data['last_name'],
		// 	'city'=>$data['city'],
		// 	'state'=>$data['state'],
		// 	'zip'=>$data['zip'],
		// 	'picture'=>$data['picture'],
		// 	'id_users'=>$data['id_users'],
		// 	'id_position'=>$data['id_position']
		// 	);

		if(!parent::create('profiles',$data)){
			echo "Inserted Correctly!";
			return true;
		} else {
			echo "BAD INSERT";
			return false;
		}
	}

}

/* End of file Profiles_model.php */
/* Location: ./application/models/Profiles_model.php */