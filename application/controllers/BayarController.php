<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BayarController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
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
	public function selesai(){
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/pembayaran/selesai');
		$this->load->view('frontend/templates/footer');
	}
}
