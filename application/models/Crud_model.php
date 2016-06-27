<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function create($table) {
		echo "<br />Time to create!<br />";

		$username = 'testuser';
		$password = 'password';

		$data = array(
			'username'=>$username,
			'password'=>md5($password),
		);

		$sql = $this->db->set($data)->insert($table);
		return true;
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
