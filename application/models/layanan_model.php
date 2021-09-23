<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_model extends CI_Model {

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

	public function get_all($id_dinas)
	{
		$this->db->select('*');
		$this->db->from('layanan');
		$this->db->from('dinas');
		$this->db->where('layanan.id_dinas = dinas.id_dinas');
		$this->db->where('layanan.id_dinas', $id_dinas);
		return $this->db->get()->result();
	}

	public function get_title($id_dinas)
	{
		$this->db->select('*');
		$this->db->from('dinas');
		$this->db->where('dinas.id_dinas', $id_dinas);
		return $this->db->get()->result();
	}

}

/* End of file layanan_model.php */
/* Location: ./application/models/layanan_model.php */