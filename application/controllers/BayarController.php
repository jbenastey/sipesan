<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BayarController extends CI_Controller{
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
	public function keranjang(){
		$data = array(
			'keranjang' => $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'),'belum')->row_array(),
			'spanduk' => $this->BayarModel->lihat_keranjang_spanduk($this->session->userdata('session_id'),'belum')->result_array(),
		);
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/pembayaran/keranjang',$data);
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
