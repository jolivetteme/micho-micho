<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		
		$data['site_title']="MichoMicho";
		$data['page_title']="Dashboard";
		$this->load->model('users_model');
		$this->load->model('sales_model');
		$this->load->model('transactions_model');
		//Login User
		//Set User information is sessions (COOKIE OR SESSION[DB])
		if (!isset($this->session->user['user_id'])) {//NOT SET YET
			//You need to be logged in to contiue. Please add the code!
			// if ($logged_in == 1) {
				$this->users_model->setUser();
				$data['user']= json_decode(json_encode($this->session->user),false);
				$data['sales']= json_decode(json_encode($this->sales_model->getSalesCount()),false);
				$data['sales_detail'] = json_decode(json_encode($this->sales_model->getUserSales(),false));
				$data['transactions'] = json_decode(json_encode($this->transactions_model->getTransactions(),false));
			// }
			// redirect('/','refresh');
		} else {//USER ALREADY SET
			$data['user']= json_decode(json_encode($this->session->user),false);
			$data['sales'] = json_decode(json_encode($this->sales_model->getSalesCount()),false);
			$data['sales_detail'] = json_decode(json_encode($this->sales_model->getUserSales(),false));
			$data['transactions'] = json_decode(json_encode($this->transactions_model->getTransactions(),false));
		}
		$sum = 0;
		foreach ($data['sales_detail'] as $sales) {
			$sum += $sales->price;
		}
		$data['sales_sum'] = $sum;
		$this->load->view('dashboard_view/dashboard_view.php',$data);
	}

	public function isAdmin($username) {
		return false;
	}



}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */