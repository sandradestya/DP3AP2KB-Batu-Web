<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('layanan_model', 'layanan');
		$this->load->helper('url','form');
		$this->load->library(array('form_validation', 'curl'));
	}

	public function all($id_dinas)
	{
		$data['menuBidang'] = $this->layanan->get_all_bidang();
		$data['menuDinas'] = $this->layanan->get_all_dinas();
    	$data['dataLayanan'] = $this->layanan->get_all($id_dinas);
    	$data['dataTitle'] = $this->layanan->get_title($id_dinas);
        $this->render['content'] = $this->load->view('layanan', $data, TRUE);
    	$this->load->view('template2', $this->render);
	}

}

/* End of file layanan.php */
/* Location: ./application/controllers/layanan.php */