<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('struktur_model', 'struktur');
		$this->load->helper('url');
		$this->load->library(array('curl'));
	}

	public function index()
	{
		$data['menuBidang'] = $this->struktur->get_all_bidang();
		$data['menuDinas'] = $this->struktur->get_all_dinas();
		$this->render['content'] = $this->load->view('struktur', $data, TRUE);
    	$this->load->view('template2', $this->render);
	}

}

/* End of file struktur.php */
/* Location: ./application/controllers/struktur.php */