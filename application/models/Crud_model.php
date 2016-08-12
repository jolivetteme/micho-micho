<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function create($table) {
		
		echo "Welcome to create!";die;
		try {
			$this->db->insert($table, $data);
		} catch (Exception $e) {
			//Log some error
			echo $e->getMessage();
		}

// 		$sql = <<<SQL	
// SQL;
		
		/**
		 * Code to check for a duplicate username
		 */
		// if ($result->num_rows()>0) {//User already taken
		// 	$message = "Username {$data['username']} is already taken. Please choose another username.!";
		// 	echo $message;
		// } else {//Everything worked out
		// 	if ($this->db->set($data)->insert($table)) {
		// 		return true;
		// 	} else {//Error inserting data (MySQL INSERT ERROR)
		// 		return false;
		// 	}
		// }
	}
	public function read($table)   {
		$sql = <<<SQL
		SELECT * FROM $table;
SQL;
	}
	public function update($table) {
		$sql = <<<SQL
		UPDATE $tabl SET ($field=$value);
		WHERE id = $this->input->post($id);
SQL;
	}
	public function delete($table) {
		$sql = <<<SQL
		DELETE FROM $table
		WHERE id = $his->input->post($id);
SQL;
	}
	public function isDuplicate($values) {
	}
}		
/* End of file Crud.php */
/* Location: ./application/models/Crud.php */
