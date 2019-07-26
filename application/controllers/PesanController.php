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
		if (isset($_POST['keranjang'])){
			$panjang = $this->input->post('panjang');
			$lebar = $this->input->post('lebar');
			$bahan = $this->input->post('bahan');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$data = array(
				'spanduk_panjang' => $panjang,
				'spanduk_lebar' => $lebar,
				'spanduk_bahan' => $bahan,
				'spanduk_jumlah' => $jumlah,
				'spanduk_estimasi' => $estimasi,
			);
			var_dump($data);die;
		}
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/pesanan/spanduk');
		$this->load->view('frontend/templates/footer');
	}
}
