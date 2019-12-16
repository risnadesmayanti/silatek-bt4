<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		// $data['pelatihan'] = $this->M_pelatihan->getAll();
		$data['pelatihan'] = $this->M_jadwal->getJadwalPelatihan();


		foreach ($data['pelatihan'] as $key => $value) {
            $data['data'][$key]['title'] = $value->name;
            $data['data'][$key]['start'] = $value->start;
            $data['data'][$key]['end'] = $value->end;
            $data['data'][$key]['color'] = $value->color;
            $data['data'][$key]['id'] = $value->id;
        }

		$this->load->view('templates/header');
		$this->load->view('jadwal', $data);
		// $this->load->view('templates/footer');
	
	}

	public function get_events()
	 {
	     // Our Start and End Dates
	     $start = $this->input->get("start");
	     $end = $this->input->get("end");

	     $startdt = new DateTime('now'); // setup a local datetime
	     $startdt->setTimestamp($start); // Set the date based on timestamp
	     $start_format = $startdt->format('Y-m-d H:i:s');

	     $enddt = new DateTime('now'); // setup a local datetime
	     $enddt->setTimestamp($end); // Set the date based on timestamp
	     $end_format = $enddt->format('Y-m-d H:i:s');

	     $events = $this->M_jadwal->get_events($start_format, $end_format);

	     $data_events = array();

	     foreach($events->result() as $r) {

	         $data_events[] = array(
	             "id" => $r->ID,
	             "nama" => $r->nama,
	             "biaya_pelatihan" => $r->biaya_pelatihan,
	             "end_date" => $r->end_date,
	             "start_date" => $r->start_date
	         );
	     }

	     echo json_encode(array("events" => $data_events));
	     // print_r($data_events);
	     exit();
	 }

	 public function updatingJadwal($id)
	{
		$start = $this->input->post('start');
		$end = $this->input->post('end');

		$data = array(
			'trainingId' => $id,
			// 'name' => $nama_pelatihan,
			// 'category' => $category,
			// 'color' => $color,
			'start' => $start,
			'end' => $end,
			// 'kuota' => $kuota,
			// 'biaya' => $biaya_pelatihan
			);

            echo "<pre>";
            print_r($data);
            echo "</pre>";
		

			$this->M_jadwal->update_data($data,$id);
			redirect('/pelatihan');
	}

	public function delete($id)
	{
		//$where = array('id' => $id);
		$this->M_jadwal->deleteJadwal($id);
		redirect('/Jadwal');
		//redirect('crud/index');
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */