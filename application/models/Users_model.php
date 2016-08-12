<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getProfiles() {
		$sql = <<<SQL
		SELECT users.id as id, username, first_name, last_name, city, state, zip, picture, id_position 
		FROM users 
			INNER JOIN profiles 
			ON (users.id=profiles.id_users)
		ORDER BY last_name;
SQL;
		$query = $this->db->query($sql);
		return $query->result();
	}
	/**
	 * Get Logged in user
	 * @return [type] [description]
	 */
	public function getUser() {
		$sql = <<<SQL
		SELECT username, first_name, last_name, picture 
		FROM users 
			INNER JOIN profiles 
			ON (users.id=profiles.id_users)
		ORDER BY RAND() LIMIT 1;
SQL;
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function getById($id) {
	}

	public function getPosition($id_position) {
		$sql = <<<SQL
		SELECT name, description FROM positions WHERE id = '$id_position'
SQL;
		// echo $sql;die;
		$query = $this->db->query($sql);
		if ($query->num_rows()==0) {
			@$row->name = "No position assigned!";
			$row->description = "No description available becuase no positon has been assigned!";
			return $row;
		} else {
			$row=$query->row();
			return $row;
		}
	}
}

/* End of file Users.php */
/* Location: ./application/models/Users.php */
