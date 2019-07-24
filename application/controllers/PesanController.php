<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PesanController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}
	public function pesanSpanduk(){
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/pesanan/spanduk');
		$this->load->view('frontend/templates/footer');
	}
}
