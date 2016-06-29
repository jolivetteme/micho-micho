<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function create($table) {

		$data = array(
			'username'=>$this->input->post('username'),
			'password'=>sha1($this->input->post('pwd'))
		);

		$sql = <<<SQL
		SELECT username FROM users WHERE username LIKE '{$data['username']}';
SQL;
		$result = $this->db->query($sql);
		echo "<pre>";
		print_r($this->input->post());
		echo "</pre>";

		if ($result->num_rows()>0) {//User already taken
			$message = "Username {$data['username']} is already taken. Please choose another username.!";
			echo $message;
		} else {//Everything worked out
			if ($this->db->set($data)->insert($table)) {
				return true;
			} else {//Error inserting data (MySQL INSERT ERROR)
				return false;
			}
		}
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
}		
/* End of file Crud.php */
/* Location: ./application/models/Crud.php */
