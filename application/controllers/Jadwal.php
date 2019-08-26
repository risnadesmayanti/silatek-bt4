<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		$data['pelatihan'] = $this->M_Jadwal->getAll();
		$this->load->view('templates/header');
		$this->load->view('jadwal', $data);
		// $this->load->view('templates/footer');
	}

	public function addingToJadwal()
	{
		# code...
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */