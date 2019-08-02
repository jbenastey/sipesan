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
	public function bayar($id){
		if (isset($_POST['selesai'])){
			$fakturId = 'INV-' . substr(time(), 5);
			$bank = $this->input->post('tipebayar');
			$dataBayar = array(
				'keranjang_status' => 'bayar_menunggu'
			);
			$dataFaktur = array(
				'faktur_id' => $fakturId,
				'faktur_keranjang_id' => $id,
				'faktur_bank' => $bank
			);
			$this->BayarModel->update_keranjang($id,$dataBayar);
			$this->BayarModel->simpan_faktur($dataFaktur);
			redirect('selesai/'.$bank);
		}
		$data = array(
			'pesanan' => $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'),'belum')->row_array(),
			'spanduk' => $this->BayarModel->lihat_keranjang_spanduk($this->session->userdata('session_id'),'belum')->result_array(),
			'stiker' => null,
			'kartu' => null,
			'brosur' => null,
		);
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/pembayaran/bayar',$data);
		$this->load->view('frontend/templates/footer');
	}
	public function selesai($bank){
		$dataBank = array(
			'bni' => 'Bank BNI 123456789 Atas Nama Surya Madani ',
			'bri' => 'Bank BRI 115511026 Atas Nama Surya Madani '
		);
		$data = array(
			'bank' => $dataBank[$bank],
			'pesanan' => $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'),'bayar_menunggu')->row_array(),
		);
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/pembayaran/selesai',$data);
		$this->load->view('frontend/templates/footer');
	}
}
