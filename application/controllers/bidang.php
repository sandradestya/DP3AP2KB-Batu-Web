<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('bidang_model', 'bidang');
		$this->load->helper('url','form');
		$this->load->library(array('form_validation', 'curl'));
	}

	public function all($id_dinas)
	{
		$data['menuBidang'] = $this->bidang->get_all_bidang();
		$data['menuDinas'] = $this->bidang->get_all_dinas();
    	$data['dataBidang'] = $this->bidang->get_all($id_dinas);
    	$data['dataTitle'] = $this->bidang->get_title($id_dinas);
        $this->render['content'] = $this->load->view('bidang', $data, TRUE);
    	$this->load->view('template2', $this->render);
	}

	public function detail($id_kegiatan)
	{
		$data_bidang = json_decode($this->curl->simple_get('http://localhost/admin_dinaskwb/index.php/api/bidang'));

		$data['dataKegiatan'] = $this->bidang->get_by_detail($id_kegiatan);
		$data['menuBidang'] = $this->bidang->get_all_bidang();
		$data['menuDinas'] = $this->bidang->get_all_dinas();
		$data['dataTitle'] = $this->bidang->get_title_detail($id_kegiatan);
		$data['dataBidang'] = $data_bidang;
        $this->render['content'] = $this->load->view('detail-bidang', $data, TRUE);
    	$this->load->view('template2', $this->render);
	}

}

/* End of file bidang.php */
/* Location: ./application/controllers/bidang.php */