<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$model = array('BayarModel');
		$helper = array('tgl_indo','nominal');
		$this->load->model($model);
		$this->load->helper($helper);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('admin/login'));
		}
	}
	public function index(){
		$data = array(
			'transaksi' => $this->BayarModel->lihat_keranjang_faktur_admin()->result_array()
		);
		$this->load->view('backend/templates/header');
		$this->load->view('backend/transaksi/index',$data);
		$this->load->view('backend/templates/footer');
	}
	public function lihat($id){
		$transaksi = $this->BayarModel->lihat_keranjang_faktur_admin_by_id($id)->row_array();
		$konfirmasi = $this->BayarModel->lihat_keranjang_faktur_konfirmasi_admin_by_id($id)->row_array();
//		echo '<pre>';
//		var_dump($konfirmasi);die;
		$data = array(
			'transaksi' => $transaksi,
			'konfirmasi' => $konfirmasi,
			'spanduk' => $this->BayarModel->lihat_keranjang_spanduk($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'stiker' => $this->BayarModel->lihat_keranjang_stiker($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'kartu' => $this->BayarModel->lihat_keranjang_kartu($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
			'brosur' => $this->BayarModel->lihat_keranjang_brosur($transaksi['keranjang_pengguna_id'],'bayar_menunggu',$transaksi['keranjang_id'])->result_array(),
		);
		$this->load->view('backend/templates/header');
		$this->load->view('backend/transaksi/lihat',$data);
		$this->load->view('backend/templates/footer');
	}
	public function konfirmasi($id){
		$data = array(
			'faktur_status' => 'sudah'
		);
		$this->BayarModel->update_faktur($id,$data);
		redirect('admin/transaksi/lihat/'.$id);
	}
}
