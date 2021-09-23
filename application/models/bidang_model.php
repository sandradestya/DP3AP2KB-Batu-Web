<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_model extends CI_Model {

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

	public function get_all($id_bidang)
	{
		$this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->from('bidang');
		$this->db->where('kegiatan.id_bidang = bidang.id_bidang');
		$this->db->where('bidang.id_bidang', $id_bidang);
		return $this->db->get()->result();
	}

	public function get_title($id_bidang)
	{
		$this->db->select('*');
		$this->db->from('bidang');
		$this->db->where('bidang.id_bidang', $id_bidang);
		return $this->db->get()->result();
	}

	public function get_title_detail($id_kegiatan)
	{
		$this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->from('bidang');
		$this->db->where('kegiatan.id_bidang = bidang.id_bidang');
		$this->db->where('kegiatan.id_kegiatan', $id_kegiatan);
		return $this->db->get()->result();
	}

	public function get_by_detail($id_kegiatan) {
		$this->db->where('id_kegiatan', $id_kegiatan);	
		$query = $this->db->get('kegiatan',1);
		return $query->result();
	}
	
}

/* End of file bidang_model.php */
/* Location: ./application/models/bidang_model.php */