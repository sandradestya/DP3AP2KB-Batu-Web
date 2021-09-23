<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('galeri_model', 'galeri');
		$this->load->helper('url');
		$this->load->library(array('curl'));
	}

	public function index()
	{
		$data['menuBidang'] = $this->galeri->get_all_bidang();
		$data['menuDinas'] = $this->galeri->get_all_dinas();
    	$data['dataGaleri'] = $this->galeri->get_all();
        $this->render['content'] = $this->load->view('galeri', $data, TRUE);
    	$this->load->view('template2', $this->render);
	}

}

/* End of file galeri.php */
/* Location: ./application/controllers/galeri.php */