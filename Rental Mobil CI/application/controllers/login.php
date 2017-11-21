<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('login_member');
	}

	public function register_member()
    {
        $this->load->view ('register_member');
    }

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("pelanggan",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => ""
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("kendaraan")); //belum ditambahkan memberTemplatenya

		}else{
			$this->load->view('login_member');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}