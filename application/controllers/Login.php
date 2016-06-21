<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

<<<<<<< HEAD
	public function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}
	
	public function index() {

		$this->load->view('admin/dashboard/dashboard',$data);
=======
	// public function __construct() {
	// 	parent::__construct();
	// 	$this->load->model('users_model');
	// }
	
	public function index() {

		$this->load->view('admin/login');
	}

	public function auth()
	{
		# code...
>>>>>>> login
	}

}
