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
	public function lihat_keranjang_status($pengguna_id,$status){
		$this->db->from('sipesan_keranjang');
		$this->db->where('keranjang_pengguna_id', $pengguna_id);
		$this->db->where('keranjang_status', $status);
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
}
