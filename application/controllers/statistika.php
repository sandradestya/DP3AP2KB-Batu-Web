<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistika extends CI_Controller {

	var $API = "";

	public function __construct()
	{
		parent::__construct();
		$this->load->model('bidang_model', 'bidang');
		$this->load->helper('url','form');
		$this->load->library(array('form_validation', 'curl'));
		$this->API="http://localhost/kependudukan_app";
	}

	public function index()
	{
		$data['menuBidang'] = $this->bidang->get_all_bidang();
		$data['menuDinas'] = $this->bidang->get_all_dinas();
    	$data['graph'] = json_decode($this->curl->simple_get($this->API.'/kependudukan/restarea'));
        $this->render['content'] = $this->load->view('statistika', $data, TRUE);
    	$this->load->view('template2', $this->render);
	}

}

/* End of file statistika.php */
/* Location: ./application/controllers/statistika.php */