<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all_bidang()
	{
		$this->db->select('*');
		$this->db->from('bidang');
		return $this->db->get()->result();
	}

	public function get_all_dinas()
	{
		$this->db->select('*');
		$this->db->from('dinas');
		return $this->db->get()->result();
	}
	
}

/* End of file struktur_model.php */
/* Location: ./application/models/struktur_model.php */