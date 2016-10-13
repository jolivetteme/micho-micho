<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct() {
		parent::__construct();
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
	public function setUser() {
		$sql = <<<SQL
		SELECT users.id as user_id, username, concat(first_name, " ",last_name) as name, picture 
		FROM users 
			INNER JOIN profiles 
			ON (users.id=profiles.id_users)
		ORDER BY RAND() LIMIT 1;
SQL;
		$query = $this->db->query($sql);
		$this->session->user= array(
			'user_id'=>$query->row('user_id'),
			'username'=>$query->row('username'),
			'name'=>$query->row('name'),
			'picture'=>$query->row('picture')
		);

		return true;
	}

	public function getUserSales() {
		$sql = <<<SQL
		SELECT sales.id, products.name, products.price  FROM sales INNER JOIN users ON sales.id_users=users.id INNER JOIN products ON sales.id_products=products.id where users.id={$this->user_id};
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
