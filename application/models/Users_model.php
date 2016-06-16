<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getProfiles() {
		$query = $this->db->query('select username, first_name, last_name, picture from users INNER JOIN profiles ON (users.id=profiles.id_users)');
		return $query->result();
	}

	public function getUser() {
		$query = $this->db->query('select username, first_name, last_name, picture from users INNER JOIN profiles ON (users.id=profiles.id_users)');
		return $query->row();
	}

	public function getById($id) {

	}
}

/* End of file Users.php */
/* Location: ./application/models/Users.php */
