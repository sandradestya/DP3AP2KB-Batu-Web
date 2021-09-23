<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

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

	public function get_all_aspirasi()
	{
		$this->db->select('*');
		$this->db->from('aspirasi');
		$this->db->where('status = 1');
		$this->db->order_by('aspirasi.id_aspirasi DESC');
		return $this->db->get()->result();
	}

	public function get_all_kegiatan()
	{
		$this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->from('bidang');
		$this->db->where('kegiatan.id_bidang = bidang.id_bidang');
		$this->db->order_by('kegiatan.id_kegiatan DESC');
		$this->db->limit(3);
		return $this->db->get()->result();
	}

}

/* End of file menu_model.php */
/* Location: ./application/models/menu_model.php */