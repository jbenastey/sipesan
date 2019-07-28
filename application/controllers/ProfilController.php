<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('BayarModel');
		$helper = array('nominal');
		$this->load->model($model);
		$this->load->helper($helper);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}
	public function index(){
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/profil/index');
		$this->load->view('frontend/templates/footer');
	}
}
