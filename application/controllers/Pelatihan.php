<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// header('Access-Control-Allow-Origin: *');

class Pelatihan extends CI_Controller {

	public function index()
	{
		$data['pelatihan'] = $this->M_jadwal->getAll();

		$this->load->view('templates/header');
		$this->load->view('pelatihan/pelatihan', $data);
		// $this->load->view('templates/content');
		$this->load->view('templates/footer');

	}


	

	public function AllPelatihan()
	{
		// $this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('AllPelatihan');
		$this->load->view('templates/footer');
	}

	
	public function detail($id){
		$data = $this->M_instruktur->getSelected(array('id' => $id));
        echo json_encode($data);
	}

	public function AddPel()
	{
		$data['pelatihan'] = $this->M_jadwal->getAll();

		foreach ($data['pelatihan'] as $key => $value) {
            $data['data'][$key]['title'] = $value->nama;
            $data['data'][$key]['start'] = $value->start;
            $data['data'][$key]['end'] = $value->end;
            $data['data'][$key]['color'] = $value->color;
            $data['data'][$key]['id'] = $value->id;
        }

		$this->load->view('templates/header');
		$this->load->view('pelatihan/add_pelatihan', $data);
		$this->load->view('templates/footer');
	}

	public function AddingPel($value='')
	{
		$nama_pelatihan = $this->input->post('nama_pelatihan');
		$category = $this->input->post('category');
		if ($category == 'Teknik Mesin') {
			// $jenis = 'Teknik Mesin';
			$color = '#28b779';
		}elseif ($category == 'Teknik Listrik') {
			// $jenis = 'Teknik Listrik';
			$color = '#ea7171';
		}elseif ($category == 'Teknik Sipil') {
			// $jenis = 'Teknik Sipil';
			$color = '#ffb748';
		}elseif ($category == 'Teknik Kimia') {
			// $jenis = 'Teknik Kimia';
			$color = '#2255a4';
		}elseif ($category == 'Teknik Industri') {
			// $jenis = 'Teknik Industri';
			$color = '#7460ee';
		}elseif ($category == 'Perbetonan') {
			// $jenis = 'Perbetonan';
			$color = '#1d2124';
		}

		$start = $this->input->post('start');
		$end = $this->input->post('end');
		$biaya_pelatihan = $this->input->post('biaya_pelatihan');
		$kuota = $this->input->post('kuota');
		
		$data = array(
			'id' => NULL,
			'nama' => $nama_pelatihan,
			'category' => $category,
			'color' => $color,
			'start' => $start,
			'end' => $end,
			'kuota' => $kuota,
			'biaya_pelatihan' => $biaya_pelatihan
			);

		 echo "<pre>";
            print_r($data);

            echo "</pre>";
		$this->M_pelatihan->addPelatihan($data);
		redirect('/Pelatihan');
	}

	public function updatePel($id)
	{
		$where = array('id' => $id);
		$data['pelatihan'] = $this->M_pelatihan->edit_data($where,'user')->result();
		$this->load->view('templates/header');
		$this->load->view('pelatihan/upd_pelatihan',$data);
		$this->load->view('templates/footer');
		// print_r($data);
	}

	public function updatingPel($id)
	{
		$nama_pelatihan = $this->input->post('nama_pelatihan');
		$category = $this->input->post('category');
		$start = $this->input->post('start');
		$end = $this->input->post('end');
		$biaya_pelatihan = $this->input->post('biaya_pelatihan');
		$kuota = $this->input->post('kuota');

		$data = array(
			'id' => $id,
			'nama' => $nama_pelatihan,
			'category' => $category,
			'color' => $color,
			'start' => $start,
			'end' => $end,
			'kuota' => $kuota,
			'biaya_pelatihan' => $biaya_pelatihan
			);

            echo "<pre>";
            print_r($result);
            echo "</pre>";

            echo "<pre>";
            print_r($data);
            echo "</pre>";
		

			$this->M_pelatihan->update_data($data,$id);
			redirect('/pelatihan');
	}

	public function delete($id)
	{
		//$where = array('id' => $id);
		$this->M_pelatihan->deletePelatihanData($id);
		redirect('/pelatihan');
		//redirect('crud/index');
	}
}

/* End of file Dashboard */
/* Location: ./application/controllers/Dashboard */