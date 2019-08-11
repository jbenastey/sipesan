<?php


class PesananController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('PenggunaModel','BayarModel','PesanModel');
		$helper = array('nominal','tgl_indo');
		$this->load->helper($helper);
		$this->load->model($model);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('admin/login'));
		}
	}

	public function index()
	{
		$data = array(
			'transaksi' => $this->BayarModel->lihat_keranjang_faktur_admin()->result_array()
		);
		$this->load->view('backend/templates/header');
		$this->load->view('backend/pesanan/index', $data);
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
		$this->load->view('backend/pesanan/lihat',$data);
		$this->load->view('backend/templates/footer');
	}
	public function foto($id){
		$data = array(
			'spanduk' => $this->PesanModel->lihat_spanduk_by_id($id),
			'stiker' => $this->PesanModel->lihat_stiker_by_id($id),
			'kartu' => $this->PesanModel->lihat_kartu_by_id($id),
			'brosur' => $this->PesanModel->lihat_brosur_by_id($id),
		);
		$this->load->view('backend/templates/header');
		$this->load->view('backend/pesanan/foto',$data);
		$this->load->view('backend/templates/footer');
	}
}
