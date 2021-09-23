<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kontak_model', 'kontak');
		$this->load->helper('url','form');
		$this->load->library(array('form_validation'));
	}

	public function rules()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('profesi', 'Profesi', 'trim|required');
		$this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');		
	}

	public function index()
	{
		$this->rules();
		if ($this->form_validation->run() == FALSE) {
			$data['nama'] = $this->input->post('nama') ? $this->input->post('nama') : '';
			$data['profesi'] = $this->input->post('profesi') ? $this->input->post('profesi') : '';
			$data['pesan'] = $this->input->post('pesan') ? $this->input->post('pesan') : '';
		}

		$data['menuBidang'] = $this->kontak->get_all_bidang();
		$data['menuDinas'] = $this->kontak->get_all_dinas();
		$data['dataKontak'] = $this->kontak->get_all();
        $this->render['content'] = $this->load->view('kontak', $data, TRUE);
    	$this->load->view('template2', $this->render);
	}

	public function create_action()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'profesi' => $this->input->post('profesi'),
			'pesan' => $this->input->post('pesan'),
		);

		$this->kontak->insert($data);

		redirect(site_url('kontak'));
	}

}

/* End of file kontak.php */
/* Location: ./application/controllers/kontak.php */