<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/index');
		$this->load->view('frontend/templates/footer');
	}
}
