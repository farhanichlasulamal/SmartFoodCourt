<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view("login");
	}

	public function checkUser() {
		$user = $this->input->post('UserId');
		$pass = $this->input->post('Password');
		$this->load->model('user_model');
		$this->user_model->getAccount($user,$pass);
	}

	public function checkAdmin() {
		$user = $this->input->post('AdminId');
		$pass = $this->input->post('Password');
		$this->load->model('admin_model');
		$this->admin_model->getAccount($user,$pass);
	}

	public function checkTenant() {
		$user = $this->input->post('TenantId');
		$pass = $this->input->post('Password');
		$this->load->model('tenant_model');
		$this->tenant_model->getAccount($user,$pass);
	}

	public function logout() {
		$this->session->set_userdata('userid', FALSE);
		$this->session->sess_destroy();
		redirect('login');
	}
}