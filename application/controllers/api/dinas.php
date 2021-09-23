<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Dinas extends REST_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dinas_model', 'dinas');
	}

	public function index_get()
	{
		$id_dinas = $this->get('id_dinas');
		if($id_dinas == '') {
			$data = $this->dinas->get_all();
		}
		else {
			$data = $this->dinas->get_by_id_result($id_dinas);
		}
		$this->response($data, 200);
	}

}

/* End of file dinas.php */
/* Location: ./application/controllers/api/dinas.php */