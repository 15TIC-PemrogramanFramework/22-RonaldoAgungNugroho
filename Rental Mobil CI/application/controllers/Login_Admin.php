<?php 

class Login_Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("admin"));
		}
	}
 

	function index(){
		$this->load->view('dashboard');
	}

		function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login_admin'));
	}
}