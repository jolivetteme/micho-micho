<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}
	
	public function index() {

		$profiles = $this->users_model->getProfiles();
		
		$data = array();

		foreach ($profiles as $key=>$user) {

			$data['profiles'][$key]['username'] = $user->username;
			$data['profiles'][$key]['first_name'] = $user->first_name;
			$data['profiles'][$key]['last_name'] = $user->last_name;
			$data['profiles'][$key]['picture'] = $user->picture;
			$data['profiles'][$key]['files'] = $this->randomize_widgets();

		}

		$components = "admin/dashboard/components/";
		$social_widgets = $components."social_widgets/";
	
		$user = $this->users_model->getUser();
		$data['user'] = $user;

		$data['site_title'] = "Micho Micho";
		$data['page_title'] = "Dashboard: Admin";
		
		$this->load->view('admin/dashboard/dashboard',$data);
	}

	function randomize_widgets() {
		$widgets = array(
				'social_developer.php',
				'social_sales.php',
				'social_sales_banner.php'
		);
		return $widgets[rand(0,count($widgets)-1)];
	}
}
