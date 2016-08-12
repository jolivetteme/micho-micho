<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}

	public function viewUsers() {
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

		$this->load->view('admn/dashboard/users',$data);
	}
	/**
	 * Add the new user
	 */
	public function createUsers() {	
		//Get the Logged in User (Faked for now, takeing the first record returned)
		$user = $this->users_model->getUser();

		//Determine if the form was submitted, or if it's just to display the form
		if ($this->input->server('REQUEST_METHOD')=='POST') {
			echo "POST";
			echo "<pre>";
			print_r($this->input->post());
			echo "</pre>";
		} else {
			//Set your data array for the view
			$data['site_title'] = "Micho Micho";
			$data['page_title'] = "Dashboard: Add Users";
			$data['user']=$user;

			$this->load->view('admn/user/add_user',$data);
		}
	}
	/**
	 * display random social widgets
	 * @return [type] [description]
	 */
	public function randomize_widgets() {
		$widgets = array(
				'social_developer.php',
				'social_sales.php',
				//'social_sales_banner.php'
		);
		return $widgets[rand(0,count($widgets)-1)];
	}
}
/* End of file Users.php */
/* Location: ./application/controllers/Users.php */