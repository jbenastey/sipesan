<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PesanModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function simpan_spanduk($data){
		$this->db->insert('sipesan_spanduk',$data);
		return $this->db->affected_rows();
	}
	public function lihat_spanduk_by_id($id){
		$this->db->where('spanduk_id',$id);
		return $this->db->get('sipesan_spanduk')->row_array();
	}
	public function simpan_stiker($data){
		$this->db->insert('sipesan_stiker',$data);
		return $this->db->affected_rows();
	}
}
