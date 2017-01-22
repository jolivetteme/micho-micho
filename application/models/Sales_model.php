<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Sales_model extends CI_Model {
	
		public function __construct() {
			parent::__construct();
		}

		public function getSalesCount() {
			$sql = <<<SQL
				SELECT count(*) AS count 
					FROM sales 
				WHERE id_users = {$this->session->user['user_id']};
SQL;

			$query = $this->db->query($sql);
			return $query->row();
		}

		public function getUserSales() {
			$sql = <<<SQL
				SELECT sales.id, name, price 
					FROM products 
					INNER JOIN  sales ON (sales.id_products=products.id)
				WHERE id_users = {$this->session->user['user_id']};
SQL;

			$query = $this->db->query($sql);
			return $query->result();
		}

		public function addSale() {
			
		}
	
	}
	
	/* End of file Sales_model.php */
	/* Location: ./application/models/Sales_model.php */