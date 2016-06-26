<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}
	
	public function index() {

		
		$data = array();

		$profiles = $this->users_model->getProfiles();

		foreach ($profiles as $key=>$user) {

			$data['profiles'][$key]['id'] = $user->id;
			$data['profiles'][$key]['username'] = $user->username;
			$data['profiles'][$key]['id_position'] = $user->id_position;
			$data['profiles'][$key]['first_name'] = $user->first_name;
			$data['profiles'][$key]['last_name'] = $user->last_name;
			$data['profiles'][$key]['city'] = $user->city;
			$data['profiles'][$key]['state'] = $user->state;
			$data['profiles'][$key]['zip'] = $user->zip;
			$data['profiles'][$key]['picture'] = $user->picture;
			$data['profiles'][$key]['files'] = $this->randomize_widgets();
			
			$data['profiles'][$key]['position']=$this->users_model->getPosition($user->id_position);	
		}


		$components = "admn/dashboard/components/";
		$social_widgets = $components."social_widgets/";
	
		$user = $this->users_model->getUser();
		$data['user'] = $user;


		$data['site_title'] = "Micho Micho";
		$data['page_title'] = "Dashboard: Admin";
		$data['colors'] = array(
			'red',
			'green',
			'yellow',
			'blue',
			'navy',
			'teal',
			'olive',
			'lime',
			'orange',
			'fuchsia',
			'purple',
			'maroon',
			'black',
			'gray'
			);

		$this->load->view('admn/dashboard/dashboard',$data);
	}

	public function view() {
		
		$item=$this->uri->segment(3);
		
	    switch ($item) {
	    	case 'user':
	    		echo "User's Page";
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
	    die;
	    return $item;
	}

	public function randomize_widgets() {
		$widgets = array(
				'social_developer.php',
				'social_sales.php',
				//'social_sales_banner.php'
		);
		return $widgets[rand(0,count($widgets)-1)];
	}
}
