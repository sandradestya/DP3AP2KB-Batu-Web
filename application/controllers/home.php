<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model', 'home');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['menuBidang'] = $this->home->get_all_bidang();
		$data['menuDinas'] = $this->home->get_all_dinas();
		$data['dataAspirasi'] = $this->home->get_all_aspirasi();
		$data['dataKegiatan'] = $this->home->get_all_kegiatan();
        $this->render['content'] = $this->load->view('template', $data, TRUE);
    	$this->load->view('template');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */