<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// header('Access-Control-Allow-Origin: *');

class Pelatihan extends CI_Controller {

	public function index()
	{
		$data['pelatihan'] = $this->M_jadwal->getAll();
		$data['training'] = $this->M_training->getAll();

		$this->load->view('templates/header');
		$this->load->view('pelatihan/pelatihan', $data);
		// $this->load->view('templates/content');
		$this->load->view('templates/footer');

	}	

	public function AllPelatihan()
	{
		$data['training'] = $this->M_training->getAll()->result();
		echo json_encode($data);
	}

	
	public function detail($id){
		$data = $this->M_instruktur->getSelected(array('id' => $id));
        echo json_encode($data);
	}

	public function AddPel()
	{
		// $data['pelatihan'] = $this->M_jadwal->getAll();
		$data['training'] = $this->M_training->getAll();

		$this->load->view('templates/header');
		$this->load->view('pelatihan/add_pelatihan', $data);
		$this->load->view('templates/footer');
	}

	public function AddingPel($value='')
	{
		$nama_pelatihan = $this->input->post('nama_pelatihan');
		$category = $this->input->post('category');
		if ($category == 'IWE') {
			// $jenis = 'Teknik Mesin';
			$color = '#28b779';
		}elseif ($category == 'IWIP') {
			// $jenis = 'Teknik Listrik';
			$color = '#ea7171';
		}elseif ($category == 'IWI') {
			// $jenis = 'Teknik Sipil';
			$color = '#ffb748';
		}elseif ($category == 'IWS') {
			// $jenis = 'Teknik Kimia';
			$color = '#2255a4';
		}elseif ($category == 'IWP') {
			// $jenis = 'Teknik Industri';
			$color = '#7460ee';
		}elseif ($category == 'WD') {
			// $jenis = 'Perbetonan';
			$color = '#1d2124';
		}elseif ($category == 'NDT') {
			// $jenis = 'Perbetonan';
			$color = '#29ABE2';
		}elseif ($category == 'RI') {
			// $jenis = 'Perbetonan';
			$color = '#39B54A';
		}elseif ($category == 'CI') {
			// $jenis = 'Perbetonan';
			$color = '#6666CC';
		}


		// $start = $this->input->post('start');
		// $end = $this->input->post('end');
		$biaya_pelatihan = $this->input->post('biaya_pelatihan');
		$kuota = $this->input->post('kuota');
		
		$data = array(
			'trainingId' => NULL,
			'name' => $nama_pelatihan,
			'category' => $category,
			// 'color' => $color,
			// 'start' => $start,
			// 'end' => $end,
			'kuota' => $kuota,
			'biaya' => $biaya_pelatihan
			);

		 echo "<pre>";
            print_r($data);

            echo "</pre>";
		$this->M_training->addPelatihan($data);
		redirect('/Pelatihan');
	}

	public function AddingToJadwal($value='')
	{
		$id_pelatihan = $this->input->post('id');
		$category = $this->input->post('category');
		
		$start = $this->input->post('start');
		$end = $this->input->post('end');
		// $biaya_pelatihan = $this->input->post('biaya_pelatihan');
		// $kuota = $this->input->post('kuota');
		
		if ($category == 'IWE') {
			// $jenis = 'Teknik Mesin';
			$color = '#28b779';
		}elseif ($category == 'IWIP') {
			// $jenis = 'Teknik Listrik';
			$color = '#ea7171';
		}elseif ($category == 'IWI') {
			// $jenis = 'Teknik Sipil';
			$color = '#ffb748';
		}elseif ($category == 'IWS') {
			// $jenis = 'Teknik Kimia';
			$color = '#2255a4';
		}elseif ($category == 'IWP') {
			// $jenis = 'Teknik Industri';
			$color = '#7460ee';
		}elseif ($category == 'WD') {
			// $jenis = 'Perbetonan';
			$color = '#1d2124';
		}elseif ($category == 'NDT') {
			// $jenis = 'Perbetonan';
			$color = '#29ABE2';
		}elseif ($category == 'RI') {
			// $jenis = 'Perbetonan';
			$color = '#39B54A';
		}elseif ($category == 'CI') {
			// $jenis = 'Perbetonan';
			$color = '#6666CC';
		}


		$data = array(
			'id' => NULL,
			'id_peserta' => NULL,
			'id_pelatihan' => $id_pelatihan,
			// 'nama' => $nama_pelatihan,
			// 'category' => $category,
			'color' => $color,
			'start' => $start,
			'end' => $end
			// 'kuota' => $kuota,
			// 'biaya_pelatihan' => $biaya_pelatihan
			);

		 echo "<pre>";
            print_r($data);

            echo "</pre>";
		$this->M_jadwal->addJadwal($data);
		redirect('/jadwal');
	}

	public function updatePel($id)
	{
		$where = array('trainingId' => $id);
		$where2 = array('id_pelatihan' => $id);
		
		$data['training'] = $this->M_training->edit_data($where,'user')->result();
		$data['jadwal'] = $this->M_jadwal->edit_data($where2,'user')->result();
		$data['pelatihan'] = $this->M_jadwal->getJadwalPelatihan();


		foreach ($data['pelatihan'] as $key => $value) {
            $data['data'][$key]['title'] = $value->name;
            $data['data'][$key]['start'] = $value->start;
            $data['data'][$key]['end'] = $value->end;
            $data['data'][$key]['color'] = $value->color;
            $data['data'][$key]['id'] = $value->id;
        }

		// $data['pelatihan'] = $this->M_pelatihan->edit_data($where,'user')->result();
		$this->load->view('templates/header');
		$this->load->view('pelatihan/upd_pelatihan',$data);
		$this->load->view('templates/footer');
		// print_r($data);
	}

	public function updatingPel($id)
	{
		$nama_pelatihan = $this->input->post('nama_pelatihan');
		$category = $this->input->post('category');
		// $start = $this->input->post('start');
		// $end = $this->input->post('end');
		if ($category == 'IWE') {
			// $jenis = 'Teknik Mesin';
			$color = '#28b779';
		}elseif ($category == 'IWIP') {
			// $jenis = 'Teknik Listrik';
			$color = '#ea7171';
		}elseif ($category == 'IWI') {
			// $jenis = 'Teknik Sipil';
			$color = '#ffb748';
		}elseif ($category == 'IWS') {
			// $jenis = 'Teknik Kimia';
			$color = '#2255a4';
		}elseif ($category == 'IWP') {
			// $jenis = 'Teknik Industri';
			$color = '#7460ee';
		}elseif ($category == 'WD') {
			// $jenis = 'Perbetonan';
			$color = '#1d2124';
		}elseif ($category == 'NDT') {
			// $jenis = 'Perbetonan';
			$color = '#29ABE2';
		}elseif ($category == 'RI') {
			// $jenis = 'Perbetonan';
			$color = '#39B54A';
		}elseif ($category == 'CI') {
			// $jenis = 'Perbetonan';
			$color = '#6666CC';
		}
		$biaya_pelatihan = $this->input->post('biaya_pelatihan');
		$kuota = $this->input->post('kuota');

		$data = array(
			'trainingId' => $id,
			'name' => $nama_pelatihan,
			'category' => $category,
			// 'color' => $color,
			// 'start' => $start,
			// 'end' => $end,
			'kuota' => $kuota,
			'biaya' => $biaya_pelatihan
			);

            echo "<pre>";
            print_r($data);
            echo "</pre>";
		

			$this->M_training->update_data($data,$id);
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