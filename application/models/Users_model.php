<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getProfiles() {
		$sql = <<<SQL
		SELECT username, first_name, last_name, picture, id_position 
		FROM users 
			INNER JOIN profiles 
			ON (users.id=profiles.id_users)
SQL;
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getUser() {
		$sql = <<<SQL
		SELECT username, first_name, last_name, picture 
		FROM users 
			INNER JOIN profiles 
			ON (users.id=profiles.id_users)
SQL;
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function getById($id) {
	}

	public function getPosition($id_position) {
		$sql = <<<SQL
		SELECT name FROM positions WHERE id = '$id_position'
SQL;
		// echo $sql;die;
		$query = $this->db->query($sql);
		if ($query->num_rows()==0) {
			return "No Position Assigned!";
		} else {
			$row =  $query->row();
			return $row->name;
		}
		

	}
}

/* End of file Users.php */
/* Location: ./application/models/Users.php */
