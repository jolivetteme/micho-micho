<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function create($table) {
		$sql <<<SQL
		INSERT INTO $table VALUES ()
SQL;
	}
	public function read($table)   {
		$sql <<<SQL

SQL;
	}
	public function update($table) {
		$sql <<<SQL

SQL;
	}
	public function delete($table) {
		$sql <<<SQL

SQL;
	}


	
/* End of file Crud.php */
/* Location: ./application/models/Crud.php */
