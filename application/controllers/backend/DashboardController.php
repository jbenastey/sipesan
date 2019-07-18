<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('admin/login'));
		}
	}
	public function index(){
		$this->load->view('backend/templates/header');
		$this->load->view('backend/index');
		$this->load->view('backend/templates/footer');
	}
}
