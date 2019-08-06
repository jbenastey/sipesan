<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BayarModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function lihat_keranjang(){
		$this->db->from('sipesan_keranjang');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function lihat_keranjang_by_id($id){
		$this->db->from('sipesan_keranjang');
		$this->db->where('keranjang_id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function lihat_keranjang_status($pengguna_id,$status){
		$this->db->from('sipesan_keranjang');
		$this->db->where('keranjang_pengguna_id', $pengguna_id);
		$this->db->where('keranjang_status', $status);
		return $this->db->get();
	}
	public function lihat_keranjang_spanduk($pengguna_id,$status,$keranjang_id){
		$this->db->from('sipesan_spanduk');
		$this->db->join('sipesan_keranjang', 'sipesan_keranjang.keranjang_id = sipesan_spanduk.spanduk_keranjang_id');
		$this->db->where('keranjang_pengguna_id', $pengguna_id);
		$this->db->where('keranjang_id', $keranjang_id);
		$this->db->where('keranjang_status', $status);
		return $this->db->get();
	}
	public function lihat_keranjang_faktur($pengguna_id){
		$this->db->from('sipesan_keranjang');
		$this->db->join('sipesan_faktur', 'sipesan_faktur.faktur_keranjang_id = sipesan_keranjang.keranjang_id');
		$this->db->where('keranjang_pengguna_id', $pengguna_id);
		return $this->db->get();
	}
	public function lihat_keranjang_faktur_admin(){
		$this->db->from('sipesan_keranjang');
		$this->db->join('sipesan_faktur', 'sipesan_faktur.faktur_keranjang_id = sipesan_keranjang.keranjang_id');
		$this->db->join('sipesan_pengguna', 'sipesan_pengguna.pengguna_id = sipesan_keranjang.keranjang_pengguna_id');
		return $this->db->get();
	}
	public function lihat_keranjang_faktur_admin_by_id($id){
		$this->db->from('sipesan_keranjang');
		$this->db->join('sipesan_faktur', 'sipesan_faktur.faktur_keranjang_id = sipesan_keranjang.keranjang_id');
		$this->db->join('sipesan_pengguna', 'sipesan_pengguna.pengguna_id = sipesan_keranjang.keranjang_pengguna_id');
		$this->db->where('faktur_id', $id);
		return $this->db->get();
	}
	public function lihat_keranjang_faktur_konfirmasi_admin_by_id($id){
		$this->db->from('sipesan_keranjang');
		$this->db->join('sipesan_faktur', 'sipesan_faktur.faktur_keranjang_id = sipesan_keranjang.keranjang_id');
		$this->db->join('sipesan_pengguna', 'sipesan_pengguna.pengguna_id = sipesan_keranjang.keranjang_pengguna_id');
		$this->db->join('sipesan_konfirmasi', 'sipesan_konfirmasi.konfirmasi_faktur_id = sipesan_faktur.faktur_id');$this->db->where('faktur_id', $id);
		return $this->db->get();
	}
	public function lihat_keranjang_faktur_by_id($id,$pengguna_id){
		$this->db->from('sipesan_keranjang');
		$this->db->join('sipesan_faktur', 'sipesan_faktur.faktur_keranjang_id = sipesan_keranjang.keranjang_id');
		$this->db->where('keranjang_pengguna_id', $pengguna_id);
		$this->db->where('faktur_id', $id);
		return $this->db->get();
	}
	public function simpan_keranjang($data){
		$this->db->insert('sipesan_keranjang',$data);
		return $this->db->affected_rows();
	}
	public function update_keranjang($id,$data){
		$this->db->where('keranjang_id', $id);
		$this->db->update('sipesan_keranjang',$data);
		return $this->db->affected_rows();
	}
	public function simpan_faktur($data){
		$this->db->insert('sipesan_faktur',$data);
		return $this->db->affected_rows();
	}
	public function update_faktur($id,$data){
		$this->db->where('faktur_id', $id);
		$this->db->update('sipesan_faktur',$data);
		return $this->db->affected_rows();
	}
	public function simpan_konfirmasi($data){
		$this->db->insert('sipesan_konfirmasi',$data);
		return $this->db->affected_rows();
	}
}
