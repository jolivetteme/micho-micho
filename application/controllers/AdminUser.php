<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminUser extends Users {
	public function __construct() {

		parent::__construct();		
		$is_logged_in=0;
		if ($is_logged_in != 1) {
			//Redirect to login page
			// $this->load->view('admn/login');
			
			redirect('login','refresh');
		}
	}
	public function index() {

		$data = array();
		$this->load->model('users_model');
		$user = $this->users_model->getUser();
		$data['user'] = $user;

		$data['site_title'] = "Micho Micho";
		$data['page_title'] = "Dashboard: Admin";

		$this->load->view('admn/dashboard/dashboard',$data);
	}
	public function add() {

		$this->load->model('crud_model');
		$item=$this->uri->segment(3);
		
	    switch ($item) {
	    	case 'create':
					echo "<h1>I'm still working on this feature! Check back soon! <br></h1>";
					echo "<a href=\"{$_SERVER['HTTP_REFERER']}\">Click here to go back where you came from!</a>";
					DIE; 	    		
	    		$user = $this->users_model->getUser();
					$data['user'] = $user;
					$data['site_title'] = "Micho Micho";
					$data['page_title'] = "Dashboard: Add Users";

					if (!empty($_POST)) {
						//Insert Data
						if ($this->crud_model->create('users')) {
							$this->load->view('admn/user/add_profile',$data);
						}
					} else {
	    			$this->load->view('admn/user/add_user',$data);
					}

	    		break;
				case 'product':
	    		echo "Product's Page";
	    		break;
	    	case 'project':
	    		echo "Project's Page";
	    		break;    	
	    	default:
	    		echo "Invalid point!";
	    		break;
	    }
	}
}
