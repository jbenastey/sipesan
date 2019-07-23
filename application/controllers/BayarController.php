<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BayarController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
	}
	public function keranjang(){
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/pembayaran/keranjang');
		$this->load->view('frontend/templates/footer');
	}
	public function bayar(){
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/pembayaran/bayar');
		$this->load->view('frontend/templates/footer');
	}
}
