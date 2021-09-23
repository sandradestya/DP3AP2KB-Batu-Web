<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tentang_model', 'tentang');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['menuBidang'] = $this->tentang->get_all_bidang();
		$data['menuDinas'] = $this->tentang->get_all_dinas();
        $this->render['content'] = $this->load->view('tentang', $data, TRUE);
    	$this->load->view('template2', $this->render);
	}

}

/* End of file tentang.php */
/* Location: ./application/controllers/tentang.php */