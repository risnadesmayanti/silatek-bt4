<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		$data['pelatihan'] = $this->M_jadwal->getAll();
		$this->load->view('templates/header');
		$this->load->view('jadwal', $data);
		// $this->load->view('templates/footer');
	}

	public function addingToJadwal()
	{
		$nama_pelatihan = $this->input->post('nama_pelatihan');
		$category_color = $this->input->post('category_color');
		$biaya_pelatihan = $this->input->post('biaya_pelatihan');
		
		$data = array(
			'id' => NULL,
			'nama' => $nama_pelatihan,
			'color' => $category_color,
			'biaya_pelatihan' => $biaya_pelatihan
			);

		 echo "<pre>";
            print_r($data);

            echo "</pre>";
		$this->M_jadwal->addJadwal($data);
		redirect('/Jadwal');
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */