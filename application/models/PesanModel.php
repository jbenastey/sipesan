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
}
