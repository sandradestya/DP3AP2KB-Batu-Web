<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Bidang extends REST_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('bidang_model', 'bidang');
	}

	public function index_get()
	{
		$id_bidang = $this->get('id_bidang');
		if($id_bidang == '') {
			$data = $this->bidang->get_all();
		}
		else {
			$data = $this->bidang->get_by_id_result($id_bidang);
		}
		$this->response($data, 200);
	}

}

/* End of file bidang.php */
/* Location: ./application/controllers/api/bidang.php */