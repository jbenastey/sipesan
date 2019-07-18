<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}
	public function login(){
		$this->load->view('backend/auth/login');
	}
}
