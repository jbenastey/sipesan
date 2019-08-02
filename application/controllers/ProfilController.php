<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('BayarModel');
		$helper = array('nominal','tgl_indo');
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
	public function pesanan(){
		$data = array(
			'pesanan' => $this->BayarModel->lihat_keranjang_faktur($this->session->userdata('session_id'),'belum')->result_array(),
		);
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/profil/pesanan',$data);
		$this->load->view('frontend/templates/footer');
	}
	public function detailPesanan($id){
		$data = array(
			'pesanan' => $this->BayarModel->lihat_keranjang_faktur_by_id($id,$this->session->userdata('session_id'),'belum')->row_array(),
			'spanduk' => $this->BayarModel->lihat_keranjang_spanduk($this->session->userdata('session_id'),'bayar_menunggu')->result_array(),
			'stiker' => null,
			'kartu' => null,
			'brosur' => null,
		);
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/profil/detail_pesanan',$data);
		$this->load->view('frontend/templates/footer');
	}
}
