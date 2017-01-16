<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getTransactions() {
		$sql = <<<SQL
			SELECT count(distinct(id_transactions)) as count
				FROM sales 
			WHERE id_users ={$this->session->user['user_id']};
SQL;
			$query = $this->db->query($sql);
			return $query->row();
	}



}

/* End of file Transactions_model.php */
/* Location: ./application/models/Transactions_model.php */