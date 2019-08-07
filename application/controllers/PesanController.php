<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PesanController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('PesanModel','BayarModel');
		$this->load->model($model);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function pesanSpanduk()
	{
		if (isset($_POST['keranjang'])) {
			$spandukId = 'SDK-' . substr(time(), 5);
			$panjang = $this->input->post('panjang');
			$lebar = $this->input->post('lebar');
			$bahan = $this->input->post('bahan');
			$jumlah = $this->input->post('jumlah');
			$estimasi = $this->input->post('estimasi');
			$total = 0;
			if ($bahan == 'Biasa') {
				$total = ($panjang * $lebar) * $jumlah * 20000;
			} elseif ($bahan == 'Menengah') {
				$total = ($panjang * $lebar) * $jumlah * 30000;
			} elseif ($bahan == 'Bagus') {
				$total = ($panjang * $lebar) * $jumlah * 35000;
			}

			$config['upload_path'] = './assets/images/spanduk/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('upload')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$dataSpanduk = array(
					'spanduk_id' => $spandukId,
					'spanduk_panjang' => $panjang,
					'spanduk_lebar' => $lebar,
					'spanduk_bahan' => $bahan,
					'spanduk_jumlah' => $jumlah,
					'spanduk_estimasi' => $estimasi,
					'spanduk_total' => $total,
					'spanduk_foto' => $foto,
				);

				$allCart = $this->BayarModel->lihat_keranjang();
				$undoneCart = $this->BayarModel->lihat_keranjang_status($this->session->userdata('session_id'),'belum')->row_array();

				if ($allCart == null){
					$cartId = 'CRT-' . substr(time(), 5);
					$dataSpanduk['spanduk_keranjang_id'] = $cartId;
					$dataCart = array(
						'keranjang_id' => $cartId,
						'keranjang_pengguna_id' => $this->session->userdata('session_id'),
						'keranjang_total' => $total,
					);
					$this->PesanModel->simpan_spanduk($dataSpanduk);
					$this->BayarModel->simpan_keranjang($dataCart);
					$this->session->set_flashdata('alert', 'pesan_sukses');
					redirect('spanduk');
				} else {
					if ($undoneCart != null){
						$cartId = $undoneCart['keranjang_id'];
						$cartTotal = $undoneCart['keranjang_total'];
						$dataSpanduk['spanduk_keranjang_id'] = $cartId;
						$dataCart['keranjang_total'] = $cartTotal + $total;

						$this->PesanModel->simpan_spanduk($dataSpanduk);
						$this->BayarModel->update_keranjang($cartId,$dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('spanduk');
					} else {
						$cartId = 'CRT-' . substr(time(), 5);
						$dataSpanduk['spanduk_keranjang_id'] = $cartId;
						$dataCart = array(
							'keranjang_id' => $cartId,
							'keranjang_pengguna_id' => $this->session->userdata('session_id'),
							'keranjang_total' => $total,
						);
						$this->PesanModel->simpan_spanduk($dataSpanduk);
						$this->BayarModel->simpan_keranjang($dataCart);
						$this->session->set_flashdata('alert', 'pesan_sukses');
						redirect('spanduk');
					}
				}
			}
		}
		$data = array(
			'title' => 'Pesan Spanduk | Surya Madani Digital Printing'
		);
		$this->load->view('frontend/templates/header',$data);
		$this->load->view('frontend/pesanan/spanduk');
		$this->load->view('frontend/templates/footer');
	}
}
